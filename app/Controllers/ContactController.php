<?php

namespace App\Controllers;

use App\Models\ContactModel;

class ContactController extends BaseController
{
    protected $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    // Helper method for admin templates
    protected function renderWithAdminTemplate(string $view, array $data = []): string
    {
        // Check if user is logged in
        if (!session()->get('user')) {
            redirect()->to('/auth/login')->send();
            exit;
        }

        echo view('admin/templates/header', $data);
        echo view($view, $data);
        echo view('admin/templates/footer', $data);
        return '';
    }

    public function index(): string
    {
        $data = [
            'title' => 'Kontak Kami - Hubungi Sekolah',
        ];

        return $this->renderWithTemplate('contact/index', $data);
    }

    public function store()
    {
        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email',
            'subject' => 'required|max_length[255]',
            'message' => 'required|min_length[10]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
            'status' => 'unread',
        ];

        $this->contactModel->insert($data);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.');
    }

    // Admin: List kontak
    public function adminIndex(): string
    {
        $status = $this->request->getGet('status');
        $search = $this->request->getGet('search');

        $query = $this->contactModel;

        if ($status) {
            $query = $query->where('status', $status);
        }

        if ($search) {
            $query = $query->like('name', $search)->orLike('email', $search)->orLike('subject', $search);
        }

        $data = [
            'title' => 'Kelola Pesan Kontak',
            'contacts' => $query->orderBy('created_at', 'DESC')->findAll(),
            'selectedStatus' => $status,
            'searchQuery' => $search,
            'stats' => [
                'total' => $this->contactModel->countAll(),
                'unread' => $this->contactModel->where('status', 'unread')->countAllResults(),
                'replied' => $this->contactModel->where('status', 'replied')->countAllResults(),
            ],
        ];

        return $this->renderWithAdminTemplate('admin/contacts/index', $data);
    }

    // Admin: Tandai sebagai sudah dibalas
    public function markReplied($id)
    {
        $contact = $this->contactModel->find($id);
        if (!$contact) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->contactModel->update($id, ['status' => 'replied']);

        return redirect()->to('/admin/contacts')->with('success', 'Pesan berhasil ditandai sebagai sudah dibalas');
    }

    // Admin: View detail kontak (JSON untuk AJAX)
    public function view($id)
    {
        $contact = $this->contactModel->find($id);
        if (!$contact) {
            return $this->response->setJSON(['error' => 'Pesan tidak ditemukan'])->setStatusCode(404);
        }

        return $this->response->setJSON($contact);
    }

    // Admin: Delete kontak
    public function delete($id)
    {
        $contact = $this->contactModel->find($id);
        if (!$contact) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->contactModel->delete($id);

        return redirect()->to('/admin/contacts')->with('success', 'Pesan berhasil dihapus');
    }
}