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

        // Fetch berita API from cache (same as Home)
        $cache = \Config\Services::cache();
        $nationalNews = $cache->get('national_news_v2') ?: $this->fetchNationalNews();
        $kemendikbudNews = $cache->get('kemendikbud_news_v2') ?: $this->fetchKemendikbudNews();

        // Dummy data if empty
        if (empty($nationalNews)) {
            $nationalNews = [
                [
                    'title' => 'Berita Nasional 1',
                    'content' => 'Ini adalah contoh berita nasional dari API.',
                    'image' => null,
                    'url' => '#',
                    'source' => 'Nasional',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Berita Nasional 2',
                    'content' => 'Contoh berita kedua dari sumber nasional.',
                    'image' => null,
                    'url' => '#',
                    'source' => 'Nasional',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
            ];
        }

        if (empty($kemendikbudNews)) {
            $kemendikbudNews = [
                [
                    'title' => 'Berita Kemendikbud 1',
                    'content' => 'Ini adalah contoh berita dari Kementerian Pendidikan.',
                    'image' => null,
                    'url' => '#',
                    'source' => 'Kemendikbud',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Berita Kemendikbud 2',
                    'content' => 'Contoh berita kedua dari Kemendikbud.',
                    'image' => null,
                    'url' => '#',
                    'source' => 'Kemendikbud',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
            ];
        }

        $data = [
            'title' => 'Berita Sekolah',
            'news' => $news,
            'pager' => $this->newsModel->pager,
            'search' => $search,
            'selectedCategory' => $selectedCategoryName,
            'categories' => $this->categoryModel->where('type', 'news')->findAll(),
            'nationalNews' => $nationalNews,
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

    // Helper: Fetch berita Kemendikbud dari NewsAPI
    private function fetchKemendikbudNews()
    {
        $apiKey = getenv('NEWSAPI_KEY') ?: '27fb318e335b42078b472ab90956e5cb'; // Use a valid key or environment variable
        $query = 'kemendikbud';
        $url = "https://newsapi.org/v2/everything?q=" . urlencode($query) . "&language=id&sortBy=publishedAt&apiKey={$apiKey}";

        $client = \Config\Services::curlrequest([
            'timeout' => 10,
        ]);
        
        $news = [];
        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'User-Agent' => 'MTS-Darul-Ulum-App/1.0',
                ]
            ]);

            $body = $response->getBody();
            $data = json_decode($body, true);

            if ($data && isset($data['articles'])) {
                foreach ($data['articles'] as $article) {
                     if (!empty($article['urlToImage'])) { // Hanya tampilkan berita dengan gambar
                        $news[] = [
                            'title' => $article['title'],
                            'content' => $article['description'] ?: '',
                            'image' => $article['urlToImage'],
                            'url' => $article['url'],
                            'source' => $article['source']['name'] ?? 'Unknown Source',
                            'created_at' => $article['publishedAt'],
                        ];
                    }
                }
            }
        } catch (\Exception $e) {
            // Log the error or handle it gracefully
            log_message('error', 'NewsAPI fetch failed for Kemendikbud: ' . $e->getMessage());
        }

        return $news;
    }

    // Helper: Fetch berita nasional dari NewsAPI
    private function fetchNationalNews()
    {
        $apiKey = getenv('NEWSAPI_KEY') ?: '27fb318e335b42078b472ab90956e5cb'; // Use a valid key or environment variable
        $url = "https://newsapi.org/v2/top-headlines?country=id&apiKey={$apiKey}";

        $client = \Config\Services::curlrequest([
            'timeout' => 10,
        ]);

        $news = [];
        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'User-Agent' => 'MTS-Darul-Ulum-App/1.0',
                ]
            ]);

            $body = $response->getBody();
            $data = json_decode($body, true);

            if ($data && isset($data['articles'])) {
                foreach ($data['articles'] as $article) {
                    if (!empty($article['urlToImage'])) { // Hanya tampilkan berita dengan gambar
                        $news[] = [
                            'title' => $article['title'],
                            'content' => $article['description'] ?: '',
                            'image' => $article['urlToImage'],
                            'url' => $article['url'],
                            'source' => $article['source']['name'] ?? 'Nasional',
                            'created_at' => $article['publishedAt'],
                        ];
                    }
                }
            }
        } catch (\Exception $e) {
            // Log the error or handle it gracefully
            log_message('error', 'NewsAPI fetch failed for National News: ' . $e->getMessage());
        }

        return $news;
    }
}