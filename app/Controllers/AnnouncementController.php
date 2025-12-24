<?php

namespace App\Controllers;

use App\Models\AnnouncementModel;

class AnnouncementController extends BaseController
{
    protected $announcementModel;

    public function __construct()
    {
        $this->announcementModel = new AnnouncementModel();
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

    // Admin: List announcements
    public function adminIndex()
    {
        $data = [
            'title' => 'Kelola Pengumuman',
            'announcements' => $this->announcementModel->findAll(),
        ];

        return $this->renderWithAdminTemplate('admin/announcements/index', $data);
    }

    // Admin: Form create
    public function create()
    {
        $data = [
            'title' => 'Tambah Pengumuman',
        ];

        return $this->renderWithAdminTemplate('admin/announcements/create', $data);
    }

    // Admin: Store announcement
    public function store()
    {
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'content' => 'required',
            'status' => 'required|in_list[active,inactive]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'status' => $this->request->getPost('status'),
        ];

        $this->announcementModel->insert($data);

        return redirect()->to('/admin/announcements')->with('success', 'Pengumuman berhasil ditambahkan');
    }

    // Admin: Form edit
    public function edit($id)
    {
        $announcement = $this->announcementModel->find($id);
        if (!$announcement) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => 'Edit Pengumuman',
            'announcement' => $announcement,
        ];

        return $this->renderWithAdminTemplate('admin/announcements/edit', $data);
    }

    // Admin: Update announcement
    public function update($id)
    {
        $announcement = $this->announcementModel->find($id);
        if (!$announcement) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'content' => 'required',
            'status' => 'required|in_list[active,inactive]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'status' => $this->request->getPost('status'),
        ];

        $this->announcementModel->update($id, $data);

        return redirect()->to('/admin/announcements')->with('success', 'Pengumuman berhasil diupdate');
    }

    // Admin: Delete announcement
    public function delete($id)
    {
        $this->announcementModel->delete($id);
        return redirect()->to('/admin/announcements')->with('success', 'Pengumuman berhasil dihapus');
    }
}