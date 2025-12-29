<?php

namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\CategoryModel;

class GalleryController extends BaseController
{
    protected $galleryModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
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

    // Public: List galeri dengan kategori
    public function index(): string
    {
        $category = $this->request->getGet('category');
        $search = $this->request->getGet('search');

        $query = $this->galleryModel;

        if ($category) {
            $query = $query->where('category_id', $category);
        }

        if ($search) {
            $query = $query->like('title', $search)->orLike('description', $search);
        }

        $data = [
            'title' => 'Galeri Sekolah - Kegiatan & Fasilitas',
            'galleries' => $query->findAll(),
            'categories' => $this->categoryModel->where('type', 'gallery')->findAll(),
            'selectedCategory' => $category,
            'searchQuery' => $search,
        ];

        return $this->renderWithTemplate('gallery/index', $data);
    }

    // Public: Detail galeri
    public function show($id): string
    {
        $gallery = $this->galleryModel->find($id);
        if (!$gallery) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $gallery['title'] . ' - Galeri Sekolah',
            'gallery' => $gallery,
        ];

        return $this->renderWithTemplate('gallery/show', $data);
    }

    // Admin: List galeri
    public function adminIndex(): string
    {
        $data = [
            'title' => 'Kelola Galeri',
            'galleries' => $this->galleryModel->findAll(),
            'categories' => $this->categoryModel->where('type', 'gallery')->findAll(),
        ];

        return $this->renderWithAdminTemplate('admin/gallery/index', $data);
    }

    // Admin: Form create
    public function create(): string
    {
        $user = session()->get('user');
        if (!$user || $user['role'] !== 'admin') {
            return redirect()->to('/admin/gallery')->with('error', 'Akses ditolak. Hanya admin yang dapat menambah galeri.');
        }

        $data = [
            'title' => 'Tambah Galeri',
            'categories' => $this->categoryModel->where('type', 'gallery')->findAll(),
        ];

        return $this->renderWithAdminTemplate('admin/gallery/create', $data);
    }

    // Admin: Store galeri
    public function store()
    {
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'permit_empty|max_length[1000]',
            'category_id' => 'required|integer',
            'images.*' => 'uploaded[images]|max_size[images,2048]|mime_in[images,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $uploadedImages = [];
        $images = $this->request->getFiles();

        if (isset($images['images'])) {
            foreach ($images['images'] as $image) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move(FCPATH . 'uploads', $newName);
                    $uploadedImages[] = $newName;
                }
            }
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'images' => json_encode($uploadedImages),
            'category_id' => $this->request->getPost('category_id'),
        ];

        $this->galleryModel->insert($data);

        return redirect()->to('/admin/gallery')->with('success', 'Galeri berhasil ditambahkan');
    }

    // Admin: Form edit
    public function edit($id): string
    {
        $user = session()->get('user');
        if (!$user || $user['role'] !== 'admin') {
            return redirect()->to('/admin/gallery')->with('error', 'Akses ditolak. Hanya admin yang dapat mengedit galeri.');
        }

        $gallery = $this->galleryModel->find($id);
        if (!$gallery) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => 'Edit Galeri',
            'gallery' => $gallery,
            'categories' => $this->categoryModel->where('type', 'gallery')->findAll(),
        ];

        return $this->renderWithAdminTemplate('admin/gallery/edit', $data);
    }

    // Admin: Update galeri
    public function update($id)
    {
        $user = session()->get('user');
        if (!$user || $user['role'] !== 'admin') {
            return redirect()->to('/admin/gallery')->with('error', 'Akses ditolak. Hanya admin yang dapat mengupdate galeri.');
        }

        $gallery = $this->galleryModel->find($id);
        if (!$gallery) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'permit_empty|max_length[1000]',
            'category_id' => 'required|integer',
            'images.*' => 'max_size[images,2048]|mime_in[images,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $existingImages = $this->request->getPost('existing_images') ?? [];
        $removeImages = $this->request->getPost('remove_images') ?? [];

        // Remove images that were marked for deletion
        foreach ($removeImages as $removeImage) {
            if (($key = array_search($removeImage, $existingImages)) !== false) {
                unset($existingImages[$key]);
                // Delete file from storage
                if (file_exists(FCPATH . 'uploads/' . $removeImage)) {
                    unlink(FCPATH . 'uploads/' . $removeImage);
                }
            }
        }

        $uploadedImages = array_values($existingImages); // Reindex array
        $images = $this->request->getFiles();

        if (isset($images['images'])) {
            foreach ($images['images'] as $image) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move(FCPATH . 'uploads', $newName);
                    $uploadedImages[] = $newName;
                }
            }
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'images' => json_encode($uploadedImages),
            'category_id' => $this->request->getPost('category_id'),
        ];

        $this->galleryModel->update($id, $data);

        return redirect()->to('/admin/gallery')->with('success', 'Galeri berhasil diupdate');
    }

    // Admin: Delete galeri
    public function delete($id)
    {
        $user = session()->get('user');
        if (!$user || $user['role'] !== 'admin') {
            return redirect()->to('/admin/gallery')->with('error', 'Akses ditolak. Hanya admin yang dapat menghapus galeri.');
        }

        $gallery = $this->galleryModel->find($id);
        if (!$gallery) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Hapus gambar dari storage
        $images = json_decode($gallery['images'], true) ?? [];
        foreach ($images as $image) {
            if (file_exists(FCPATH . 'uploads/' . $image)) {
                unlink(FCPATH . 'uploads/' . $image);
            }
        }

        $this->galleryModel->delete($id);

        return redirect()->to('/admin/gallery')->with('success', 'Galeri berhasil dihapus');
    }
}