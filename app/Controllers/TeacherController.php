<?php

namespace App\Controllers;

use App\Models\TeacherModel;

class TeacherController extends BaseController
{
    protected $teacherModel;

    public function __construct()
    {
        $this->teacherModel = new TeacherModel();
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

    // Public: List guru
    public function index()
    {
        $data = [
            'title' => 'Guru & Staf Sekolah',
            'teachers' => $this->teacherModel->findAll(),
        ];

        $this->renderWithTemplate('teachers/index', $data);
    }

    // Public: Detail guru
    public function show($id)
    {
        $teacher = $this->teacherModel->find($id);
        if (!$teacher) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $teacher['name'],
            'teacher' => $teacher,
        ];

        $this->renderWithTemplate('teachers/show', $data);
    }

    // Admin: List guru
    public function adminIndex()
    {
        $data = [
            'title' => 'Kelola Guru & Staf',
            'teachers' => $this->teacherModel->findAll(),
        ];

        $this->renderWithAdminTemplate('admin/teachers/index', $data);
    }

    // Admin: Form create
    public function create()
    {
        $data = [
            'title' => 'Tambah Guru/Staf',
        ];

        $this->renderWithAdminTemplate('admin/teachers/create', $data);
    }

    // Admin: Store guru
    public function store()
    {
        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'nip' => 'required|is_unique[teachers.nip]|max_length[50]',
            'position' => 'required|max_length[100]',
            'subject' => 'permit_empty|max_length[100]',
            'education' => 'permit_empty|max_length[100]',
            'contact' => 'permit_empty|max_length[100]',
            'photo' => 'uploaded[photo]|max_size[photo,2048]|mime_in[photo,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $photoPath = null;

        if ($photo = $this->request->getFile('photo')) {
            if ($photo->isValid() && !$photo->hasMoved()) {
                $newName = $photo->getRandomName();
                $photo->move(FCPATH . 'uploads', $newName);
                $photoPath = $newName;
            }
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'nip' => $this->request->getPost('nip'),
            'position' => $this->request->getPost('position'),
            'subject' => $this->request->getPost('subject'),
            'education' => $this->request->getPost('education'),
            'experience' => $this->request->getPost('experience'),
            'contact' => $this->request->getPost('contact'),
            'photo' => $photoPath,
            'role' => $this->request->getPost('role') ?: 'guru',
        ];

        $this->teacherModel->insert($data);

        return redirect()->to('/admin/teachers')->with('success', 'Data guru berhasil ditambahkan');
    }

    // Admin: Form edit
    public function edit($id)
    {
        $teacher = $this->teacherModel->find($id);
        if (!$teacher) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => 'Edit Guru/Staf',
            'teacher' => $teacher,
        ];

        $this->renderWithAdminTemplate('admin/teachers/edit', $data);
    }

    // Admin: Update guru
    public function update($id)
    {
        try {
            log_message('debug', 'Update teacher called with ID: ' . $id);

            $teacher = $this->teacherModel->find($id);
            if (!$teacher) {
                log_message('error', 'Teacher not found with ID: ' . $id);
                return $this->response->setJSON(['error' => 'Teacher not found'])->setStatusCode(404);
            }

            $rules = [
                'name' => 'required|min_length[3]|max_length[255]',
                'nip' => 'required|max_length[50]',
                'position' => 'required|max_length[100]',
                'subject' => 'permit_empty|max_length[100]',
                'education' => 'permit_empty|max_length[100]',
                'contact' => 'permit_empty|max_length[100]',
                'photo' => 'max_size[photo,2048]|mime_in[photo,image/jpg,image/jpeg,image/png]',
            ];

            if (!$this->validate($rules)) {
                log_message('error', 'Validation failed: ' . json_encode($this->validator->getErrors()));
                return $this->response->setJSON(['error' => 'Validation failed', 'details' => $this->validator->getErrors()])->setStatusCode(400);
            }

            $photoPath = $teacher['photo'];

            if ($photo = $this->request->getFile('photo')) {
                if ($photo->isValid() && !$photo->hasMoved()) {
                    // Hapus foto lama jika ada
                    if ($teacher['photo'] && file_exists(FCPATH . 'uploads/' . $teacher['photo'])) {
                        unlink(FCPATH . 'uploads/' . $teacher['photo']);
                    }

                    $newName = $photo->getRandomName();
                    $photo->move(FCPATH . 'uploads', $newName);
                    $photoPath = $newName;
                }
            }

            $data = [
                'name' => $this->request->getPost('name'),
                'nip' => $this->request->getPost('nip'),
                'position' => $this->request->getPost('position'),
                'subject' => $this->request->getPost('subject'),
                'education' => $this->request->getPost('education'),
                'experience' => $this->request->getPost('experience'),
                'contact' => $this->request->getPost('contact'),
                'photo' => $photoPath,
                'role' => $this->request->getPost('role') ?: 'guru',
            ];

            $result = $this->teacherModel->update($id, $data);
            log_message('debug', 'Update result: ' . ($result ? 'success' : 'failed'));

            if ($result) {
                return $this->response->setJSON(['success' => true, 'message' => 'Data guru berhasil diupdate']);
            } else {
                return $this->response->setJSON(['error' => 'Failed to update teacher'])->setStatusCode(500);
            }
        } catch (\Exception $e) {
            log_message('error', 'Exception in update: ' . $e->getMessage());
            return $this->response->setJSON(['error' => 'Server error: ' . $e->getMessage()])->setStatusCode(500);
        }
    }

    // Admin: Delete guru
    public function delete($id)
    {
        $teacher = $this->teacherModel->find($id);
        if (!$teacher) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Hapus foto jika ada
        if ($teacher['photo'] && file_exists(FCPATH . 'uploads/' . $teacher['photo'])) {
            unlink(FCPATH . 'uploads/' . $teacher['photo']);
        }

        $this->teacherModel->delete($id);

        return redirect()->to('/admin/teachers')->with('success', 'Data guru berhasil dihapus');
    }
}