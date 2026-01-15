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

        $news = $query->orderBy('created_at', 'DESC')->findAll();

        $selectedCategoryName = '';
        if ($category) {
            if (is_numeric($category)) {
                $cat = $this->categoryModel->find($category);
                $selectedCategoryName = $cat ? $cat['name'] : '';
            } else {
                $selectedCategoryName = $category;
            }
        }

        // Fetch berita API from cache (same as Home)
        $cache = \Config\Services::cache();
        $kemenagNews = $cache->get('kemenag_news_v2') ?: $this->fetchKemenagNews();
        $kemendikbudNews = $cache->get('kemendikbud_news_rss_v1') ?: $this->fetchKemendikbudNews();

        // Dummy data if empty
        if (empty($kemenagNews)) {
            $kemenagNews = [
                [
                    'title' => 'Kemenag Luncurkan Program Moderasi Beragama',
                    'description' => 'Program moderasi beragama dicanangkan untuk memperkuat toleransi dan kerukunan antar umat beragama.',
                    'urlToImage' => 'https://picsum.photos/400/250?random=1001',
                    'url' => 'https://kemenag.go.id',
                    'source' => ['name' => 'Kemenag.go.id'],
                    'publishedAt' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Haji 2024: Pemerintah Pastikan Kualitas dan Keselamatan Jemaah',
                    'description' => 'Persiapan ibadah haji tahun 2024 difokuskan pada peningkatan pelayanan dan keselamatan jemaah.',
                    'urlToImage' => 'https://picsum.photos/400/250?random=1002',
                    'url' => 'https://kemenag.go.id',
                    'source' => ['name' => 'Kemenag.go.id'],
                    'publishedAt' => date('Y-m-d H:i:s'),
                ],
            ];
        }

        if (empty($kemendikbudNews)) {
            $kemendikbudNews = [
                [
                    'title' => 'Kemendikbudristek Luncurkan Program Merdeka Belajar Episode 20',
                    'description' => 'Program Merdeka Belajar terus dikembangkan dengan fokus pada peningkatan kualitas pendidikan di Indonesia.',
                    'urlToImage' => 'https://picsum.photos/400/250?random=1',
                    'url' => 'https://www.kemdikbud.go.id',
                    'source' => ['name' => 'Kemendikbud.go.id'],
                    'publishedAt' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Pemerintah Targetkan 100% Akses Internet di Sekolah',
                    'description' => 'Inisiatif untuk memastikan semua sekolah di Indonesia memiliki akses internet yang memadai.',
                    'urlToImage' => 'https://picsum.photos/400/250?random=2',
                    'url' => 'https://www.kemdikbud.go.id',
                    'source' => ['name' => 'Kemendikbud.go.id'],
                    'publishedAt' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Kurikulum Merdeka Diterapkan di 200.000 Sekolah',
                    'description' => 'Implementasi kurikulum baru telah mencapai target yang ditetapkan pemerintah.',
                    'urlToImage' => 'https://picsum.photos/400/250?random=3',
                    'url' => 'https://www.kemdikbud.go.id',
                    'source' => ['name' => 'Kemendikbud.go.id'],
                    'publishedAt' => date('Y-m-d H:i:s'),
                ],
            ];
        }

        $data = [
            'title' => 'Berita',
            'kemenagNews' => $kemenagNews,
            'kemendikbudNews' => $kemendikbudNews,
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

        // Get latest news for sidebar (exclude current news)
        $latestNews = $this->newsModel->where('status', 'published')
                                      ->where('id !=', $news['id'])
                                      ->orderBy('created_at', 'DESC')
                                      ->limit(5)
                                      ->findAll();

        $data = [
            'title' => $news['title'],
            'news' => $news,
            'latestNews' => $latestNews,
            'categories' => $this->categoryModel->where('type', 'news')->findAll(),
        ];

        $this->renderWithTemplate('news/show', $data);
    }

    // Admin: List berita
    public function adminIndex()
    {
        $news = $this->newsModel->select('news.*, categories.name as category_name')
                                ->join('categories', 'categories.id = news.category_id')
                                ->findAll();

        $data = [
            'title' => 'Kelola Berita',
            'news' => $news,
        ];

        $this->renderWithAdminTemplate('admin/news/index', $data);
    }

    // Admin: Form create
    public function create()
    {
        $data = [
            'title' => 'Tambah Berita',
            'categories' => $this->categoryModel->where('type', 'news')->findAll(),
        ];

        $this->renderWithAdminTemplate('admin/news/create', $data);
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
                $image->move(FCPATH . 'uploads', $newName);
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

        $this->renderWithAdminTemplate('admin/news/edit', $data);
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
                if ($news['image'] && file_exists(FCPATH . 'uploads/' . $news['image'])) {
                    unlink(FCPATH . 'uploads/' . $news['image']);
                }

                $newName = $image->getRandomName();
                $image->move(FCPATH . 'uploads', $newName);
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
        if ($news['image'] && file_exists(FCPATH . 'uploads/' . $news['image'])) {
            unlink(FCPATH . 'uploads/' . $news['image']);
        }

        $this->newsModel->delete($id);

        return redirect()->to('/admin/news')->with('success', 'Berita berhasil dihapus');
    }

    // Public: API News - Berita dari API nasional dan Kemenag
    public function apiIndex()
    {
        // Fetch berita dari API nasional
        $nationalNews = $this->fetchNationalNews();

        // Fetch berita dari API Kemendikbud
        $kemendikbudNews = $this->fetchKemendikbudNews();

        // Gabungkan berita
        $apiNews = array_merge($nationalNews, $kemendikbudNews);

        $data = [
            'title' => 'Berita dari API',
            'news' => $apiNews,
            'categories' => [], // Tidak ada kategori untuk API
        ];

        $this->renderWithTemplate('news/api_index', $data);
    }

    // Helper: Fetch berita Kemendikbud dari RSS
    private function fetchKemendikbudNews()
    {
        try {
            // Try to fetch from Kemendikbud RSS feed
            $rssUrl = 'https://www.kemdikbud.go.id/feed/';

            // Use curl to fetch RSS
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $rssUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');

            $rssContent = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode == 200 && $rssContent) {
                // Parse RSS XML
                $xml = simplexml_load_string($rssContent);
                if ($xml && isset($xml->channel->item)) {
                    $news = [];
                    foreach ($xml->channel->item as $item) {
                        // Extract image from content if available
                        $content = (string)$item->description;
                        $imageUrl = $this->extractImageFromContent($content);

                        $news[] = [
                            'title' => (string)$item->title,
                            'description' => strip_tags((string)$item->description),
                            'urlToImage' => $imageUrl ?: 'https://picsum.photos/400/250?random=' . rand(1, 1000),
                            'url' => (string)$item->link,
                            'source' => ['name' => 'Kemendikbud.go.id'],
                            'publishedAt' => date('Y-m-d H:i:s', strtotime((string)$item->pubDate)),
                        ];
                    }
                    return $news;
                }
            }
        } catch (\Exception $e) {
            // Log the error or handle it gracefully
            log_message('error', 'Kemendikbud RSS fetch failed: ' . $e->getMessage());
        }

        return [];
    }

    // Helper: Fetch berita Kemenag dari RSS
    private function fetchKemenagNews()
    {
        try {
            // Try to fetch from KEMENAG RSS feed
            $rssUrl = 'https://kemenag.go.id/feed/';

            // Use curl to fetch RSS
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $rssUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');

            $rssContent = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode == 200 && $rssContent) {
                // Parse RSS XML
                $xml = simplexml_load_string($rssContent);
                if ($xml && isset($xml->channel->item)) {
                    $news = [];
                    foreach ($xml->channel->item as $item) {
                        // Extract image from content if available
                        $content = (string)$item->description;
                        $imageUrl = $this->extractImageFromContent($content);

                        $news[] = [
                            'title' => (string)$item->title,
                            'description' => strip_tags((string)$item->description),
                            'urlToImage' => $imageUrl ?: 'https://picsum.photos/400/250?random=' . rand(1001, 2000),
                            'url' => (string)$item->link,
                            'source' => ['name' => 'Kemenag.go.id'],
                            'publishedAt' => date('Y-m-d H:i:s', strtotime((string)$item->pubDate)),
                        ];
                    }
                    return $news;
                }
            }
        } catch (\Exception $e) {
            // Log the error or handle it gracefully
            log_message('error', 'Kemenag RSS fetch failed: ' . $e->getMessage());
        }

        return [];
    }

    private function extractImageFromContent($content)
    {
        // Try to extract image URL from content
        if (preg_match('/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', $content, $matches)) {
            return $matches[1];
        }
        return null;
    }
}