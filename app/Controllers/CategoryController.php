<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
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

    // Admin: List categories
    public function adminIndex()
    {
        $type = $this->request->getGet('type') ?: 'news';

        $data = [
            'title' => 'Kelola Kategori',
            'categories' => $this->categoryModel->where('type', $type)->findAll(),
            'selectedType' => $type,
        ];

        $this->renderWithAdminTemplate('admin/categories/index', $data);
    }

    // Admin: Form create
    public function create()
    {
        $data = [
            'title' => 'Tambah Kategori',
        ];

        $this->renderWithAdminTemplate('admin/categories/create', $data);
    }

    // Admin: Store category
    public function store()
    {
        $rules = [
            'name' => 'required|min_length[2]|max_length[100]',
            'type' => 'required|in_list[news,gallery]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'type' => $this->request->getPost('type'),
        ];

        $this->categoryModel->insert($data);

        return redirect()->to('/admin/categories')->with('success', 'Kategori berhasil ditambahkan');
    }

    // Admin: Form edit
    public function edit($id)
    {
        $category = $this->categoryModel->find($id);
        if (!$category) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => 'Edit Kategori',
            'category' => $category,
        ];

        $this->renderWithAdminTemplate('admin/categories/edit', $data);
    }

    // Admin: Update category
    public function update($id)
    {
        $category = $this->categoryModel->find($id);
        if (!$category) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'name' => 'required|min_length[2]|max_length[100]',
            'type' => 'required|in_list[news,gallery]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'type' => $this->request->getPost('type'),
        ];

        $this->categoryModel->update($id, $data);

        return redirect()->to('/admin/categories')->with('success', 'Kategori berhasil diupdate');
    }

    // Admin: Delete category
    public function delete($id)
    {
        $category = $this->categoryModel->find($id);
        if (!$category) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->categoryModel->delete($id);

        return redirect()->to('/admin/categories')->with('success', 'Kategori berhasil dihapus');
    }
}