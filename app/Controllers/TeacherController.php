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

        $this->renderWithTemplate('admin/teachers/index', $data);
    }

    // Admin: Form create
    public function create()
    {
        $data = [
            'title' => 'Tambah Guru/Staf',
        ];

        $this->renderWithTemplate('admin/teachers/create', $data);
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
                $photo->move(WRITEPATH . 'uploads', $newName);
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

        $this->renderWithTemplate('admin/teachers/edit', $data);
    }

    // Admin: Update guru
    public function update($id)
    {
        $teacher = $this->teacherModel->find($id);
        if (!$teacher) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'nip' => 'required|is_unique[teachers.nip,id,{id}]|max_length[50]',
            'position' => 'required|max_length[100]',
            'subject' => 'permit_empty|max_length[100]',
            'education' => 'permit_empty|max_length[100]',
            'contact' => 'permit_empty|max_length[100]',
            'photo' => 'max_size[photo,2048]|mime_in[photo,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $photoPath = $teacher['photo'];

        if ($photo = $this->request->getFile('photo')) {
            if ($photo->isValid() && !$photo->hasMoved()) {
                // Hapus foto lama jika ada
                if ($teacher['photo'] && file_exists(WRITEPATH . 'uploads/' . $teacher['photo'])) {
                    unlink(WRITEPATH . 'uploads/' . $teacher['photo']);
                }

                $newName = $photo->getRandomName();
                $photo->move(WRITEPATH . 'uploads', $newName);
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
        ];

        $this->teacherModel->update($id, $data);

        return redirect()->to('/admin/teachers')->with('success', 'Data guru berhasil diupdate');
    }

    // Admin: Delete guru
    public function delete($id)
    {
        $teacher = $this->teacherModel->find($id);
        if (!$teacher) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Hapus foto jika ada
        if ($teacher['photo'] && file_exists(WRITEPATH . 'uploads/' . $teacher['photo'])) {
            unlink(WRITEPATH . 'uploads/' . $teacher['photo']);
        }

        $this->teacherModel->delete($id);

        return redirect()->to('/admin/teachers')->with('success', 'Data guru berhasil dihapus');
    }
}