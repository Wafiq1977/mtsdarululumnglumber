<?php

namespace App\Controllers;

use App\Models\EventModel;

class EventController extends BaseController
{
    protected $eventModel;

    public function __construct()
    {
        $this->eventModel = new EventModel();
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

    // Public: List upcoming events
    public function index()
    {
        $data = [
            'title' => 'Agenda Sekolah',
            'events' => $this->eventModel->where('start_date >=', date('Y-m-d'))->orderBy('start_date', 'ASC')->findAll(),
        ];

        return $this->renderWithTemplate('events/index', $data);
    }

    // Admin: List events
    public function adminIndex()
    {
        $data = [
            'title' => 'Kelola Agenda',
            'events' => $this->eventModel->orderBy('start_date', 'DESC')->findAll(),
        ];

        return $this->renderWithAdminTemplate('admin/events/index', $data);
    }

    // Admin: Form create
    public function create()
    {
        $data = [
            'title' => 'Tambah Agenda',
        ];

        return $this->renderWithAdminTemplate('admin/events/create', $data);
    }

    // Admin: Store event
    public function store()
    {
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'permit_empty',
            'start_date' => 'required|valid_date[Y-m-d H:i:s]',
            'end_date' => 'permit_empty|valid_date[Y-m-d H:i:s]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date') ?: null,
        ];

        $this->eventModel->insert($data);

        return redirect()->to('/admin/events')->with('success', 'Agenda berhasil ditambahkan');
    }

    // Admin: Form edit
    public function edit($id)
    {
        $event = $this->eventModel->find($id);
        if (!$event) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => 'Edit Agenda',
            'event' => $event,
        ];

        return $this->renderWithAdminTemplate('admin/events/edit', $data);
    }

    // Admin: Update event
    public function update($id)
    {
        $event = $this->eventModel->find($id);
        if (!$event) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'permit_empty',
            'start_date' => 'required|valid_date[Y-m-d H:i:s]',
            'end_date' => 'permit_empty|valid_date[Y-m-d H:i:s]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date') ?: null,
        ];

        $this->eventModel->update($id, $data);

        return redirect()->to('/admin/events')->with('success', 'Agenda berhasil diupdate');
    }

    // Admin: Delete event
    public function delete($id)
    {
        $this->eventModel->delete($id);
        return redirect()->to('/admin/events')->with('success', 'Agenda berhasil dihapus');
    }
}