<?php

namespace Tests\Unit;

use App\Models\NewsModel;
use CodeIgniter\Test\CIUnitTestCase;

class NewsModelTest extends CIUnitTestCase
{
    protected $newsModel;

    protected function setUp(): void
    {
        parent::setUp();
        $this->newsModel = new NewsModel();
    }

    public function testGetPublishedReturnsOnlyPublishedNews()
    {
        // Create test data
        $testData = [
            [
                'title' => 'Published News',
                'slug' => 'published-news',
                'content' => 'This is published content',
                'status' => 'published',
                'category_id' => 1,
                'user_id' => 1,
            ],
            [
                'title' => 'Draft News',
                'slug' => 'draft-news',
                'content' => 'This is draft content',
                'status' => 'draft',
                'category_id' => 1,
                'user_id' => 1,
            ]
        ];

        // Insert test data
        $this->newsModel->insertBatch($testData);

        // Test getPublished method
        $publishedNews = $this->newsModel->getPublished();

        $this->assertIsArray($publishedNews);
        $this->assertCount(1, $publishedNews);
        $this->assertEquals('Published News', $publishedNews[0]['title']);
        $this->assertEquals('published', $publishedNews[0]['status']);
    }

    public function testGetBySlugReturnsCorrectNews()
    {
        // Create test data
        $testData = [
            'title' => 'Test News Article',
            'slug' => 'test-news-article',
            'content' => 'This is test content',
            'status' => 'published',
            'category_id' => 1,
            'user_id' => 1,
        ];

        $this->newsModel->insert($testData);

        // Test getBySlug method
        $news = $this->newsModel->getBySlug('test-news-article');

        $this->assertIsArray($news);
        $this->assertEquals('Test News Article', $news['title']);
        $this->assertEquals('test-news-article', $news['slug']);
    }

    public function testValidationRules()
    {
        $data = [
            'title' => '', // Empty title should fail
            'slug' => 'test-slug',
            'content' => 'Test content',
            'category_id' => 1,
            'user_id' => 1,
        ];

        $this->assertFalse($this->newsModel->validate($data));
        $this->assertArrayHasKey('title', $this->newsModel->errors());
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        // Clean up test data
        $this->newsModel->where('title LIKE', '%Test%')->delete();
        $this->newsModel->where('title LIKE', '%Published%')->delete();
        $this->newsModel->where('title LIKE', '%Draft%')->delete();
    }
}