<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\CategoryModel;

class NewsController extends BaseController
{
    protected $newsModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->newsModel = new NewsModel();
        $this->categoryModel = new CategoryModel();
    }

    // Public: List berita
    public function index()
    {
        $search = $this->request->getGet('search');
        $category = $this->request->getGet('category');
        $page = $this->request->getGet('page') ?? 1;
        $perPage = 6;

        $query = $this->newsModel->where('status', 'published');

        // Apply search filter
        if ($search) {
            $query = $query->like('title', $search)->orLike('content', $search);
        }

        // Apply category filter
        if ($category) {
            // Check if category is numeric (ID) or string (name)
            if (is_numeric($category)) {
                $query = $query->where('category_id', $category);
            } else {
                // Find category by name
                $cat = $this->categoryModel->where('name', $category)->where('type', 'news')->first();
                if ($cat) {
                    $query = $query->where('category_id', $cat['id']);
                }
            }
        }

        $total = $query->countAllResults(false);
        $news = $query->orderBy('created_at', 'DESC')->paginate($perPage, 'news', $page);

        $selectedCategoryName = '';
        if ($category) {
            if (is_numeric($category)) {
                $cat = $this->categoryModel->find($category);
                $selectedCategoryName = $cat ? $cat['name'] : '';
            } else {
                $selectedCategoryName = $category;
            }
        }

        $data = [
            'title' => 'Berita Sekolah',
            'news' => $news,
            'pager' => $this->newsModel->pager,
            'search' => $search,
            'selectedCategory' => $selectedCategoryName,
            'categories' => $this->categoryModel->where('type', 'news')->findAll(),
        ];

        $this->renderWithTemplate('news/index', $data);
    }

    // Public: Detail berita
    public function show($slug)
    {
        $news = $this->newsModel->getBySlug($slug);
        if (!$news) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $news['title'],
            'news' => $news,
        ];

        $this->renderWithTemplate('news/show', $data);
    }

    // Admin: List berita
    public function adminIndex()
    {
        $data = [
            'title' => 'Kelola Berita',
            'news' => $this->newsModel->findAll(),
        ];

        $this->renderWithTemplate('admin/news/index', $data);
    }

    // Admin: Form create
    public function create()
    {
        $data = [
            'title' => 'Tambah Berita',
            'categories' => $this->categoryModel->where('type', 'news')->findAll(),
        ];

        $this->renderWithTemplate('admin/news/create', $data);
    }

    // Admin: Store berita
    public function store()
    {
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'content' => 'required',
            'category_id' => 'required|integer',
            'status' => 'required|in_list[draft,published]',
            'image' => 'uploaded[image]|max_size[image,2048]|mime_in[image,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $slug = url_title($this->request->getPost('title'), '-', true);
        $imagePath = null;

        if ($image = $this->request->getFile('image')) {
            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(WRITEPATH . 'uploads', $newName);
                $imagePath = $newName;
            }
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'content' => $this->request->getPost('content'),
            'image' => $imagePath,
            'category_id' => $this->request->getPost('category_id'),
            'status' => $this->request->getPost('status'),
            'user_id' => session()->get('user')['id'],
        ];

        $this->newsModel->insert($data);

        return redirect()->to('/admin/news')->with('success', 'Berita berhasil ditambahkan');
    }

    // Admin: Form edit
    public function edit($id)
    {
        $news = $this->newsModel->find($id);
        if (!$news) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => 'Edit Berita',
            'news' => $news,
            'categories' => $this->categoryModel->where('type', 'news')->findAll(),
        ];

        $this->renderWithTemplate('admin/news/edit', $data);
    }

    // Admin: Update berita
    public function update($id)
    {
        $news = $this->newsModel->find($id);
        if (!$news) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'content' => 'required',
            'category_id' => 'required|integer',
            'status' => 'required|in_list[draft,published]',
            'image' => 'max_size[image,2048]|mime_in[image,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $slug = url_title($this->request->getPost('title'), '-', true);
        $imagePath = $news['image'];

        if ($image = $this->request->getFile('image')) {
            if ($image->isValid() && !$image->hasMoved()) {
                // Hapus gambar lama jika ada
                if ($news['image'] && file_exists(WRITEPATH . 'uploads/' . $news['image'])) {
                    unlink(WRITEPATH . 'uploads/' . $news['image']);
                }

                $newName = $image->getRandomName();
                $image->move(WRITEPATH . 'uploads', $newName);
                $imagePath = $newName;
            }
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'content' => $this->request->getPost('content'),
            'image' => $imagePath,
            'category_id' => $this->request->getPost('category_id'),
            'status' => $this->request->getPost('status'),
        ];

        $this->newsModel->update($id, $data);

        return redirect()->to('/admin/news')->with('success', 'Berita berhasil diupdate');
    }

    // Admin: Delete berita
    public function delete($id)
    {
        $news = $this->newsModel->find($id);
        if (!$news) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Hapus gambar jika ada
        if ($news['image'] && file_exists(WRITEPATH . 'uploads/' . $news['image'])) {
            unlink(WRITEPATH . 'uploads/' . $news['image']);
        }

        $this->newsModel->delete($id);

        return redirect()->to('/admin/news')->with('success', 'Berita berhasil dihapus');
    }
}