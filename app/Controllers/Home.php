<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\AnnouncementModel;
use App\Models\EventModel;

class Home extends BaseController
{
    public function index()
    {
        $newsModel = new NewsModel();
        $announcementModel = new AnnouncementModel();
        $eventModel = new EventModel();

        $data = [
            'title' => 'Beranda - Sekolah Kami',
            'latestNews' => $newsModel->getPublished(5),
            'announcements' => $announcementModel->where('status', 'active')->findAll(),
            'upcomingEvents' => $eventModel->where('start_date >=', date('Y-m-d'))->orderBy('start_date', 'ASC')->findAll(5),
            'nationalNews' => $this->getNationalNews(),
        ];

        $this->renderWithTemplate('home/index', $data);
    }

    private function getNationalNews()
    {
        // Try to fetch real news from RSS feed or API
        $news = $this->fetchFromRSS();

        // If RSS fails, return dummy data
        if (empty($news)) {
            return $this->getDummyNews();
        }

        return array_slice($news, 0, 3); // Return only 3 latest news
    }

    private function fetchFromRSS()
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
                            'url' => (string)$item->link,
                            'urlToImage' => $imageUrl ?: 'https://picsum.photos/400/250?random=' . rand(1, 1000),
                            'publishedAt' => date('Y-m-d H:i:s', strtotime((string)$item->pubDate)),
                            'source' => ['name' => 'Kemendikbud.go.id']
                        ];
                    }
                    return $news;
                }
            }
        } catch (Exception $e) {
            // Log error if needed
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

    private function getDummyNews()
    {
        // Fallback dummy data
        return [
            [
                'title' => 'Kemendikbudristek Luncurkan Program Merdeka Belajar Episode 20',
                'description' => 'Program Merdeka Belajar terus dikembangkan dengan fokus pada peningkatan kualitas pendidikan di Indonesia.',
                'url' => 'https://www.kemdikbud.go.id',
                'urlToImage' => 'https://picsum.photos/400/250?random=1',
                'publishedAt' => date('Y-m-d H:i:s'),
                'source' => ['name' => 'Kemendikbud.go.id']
            ],
            [
                'title' => 'Pemerintah Targetkan 100% Akses Internet di Sekolah',
                'description' => 'Inisiatif untuk memastikan semua sekolah di Indonesia memiliki akses internet yang memadai.',
                'url' => 'https://www.kemdikbud.go.id',
                'urlToImage' => 'https://picsum.photos/400/250?random=2',
                'publishedAt' => date('Y-m-d H:i:s'),
                'source' => ['name' => 'Kemendikbud.go.id']
            ],
            [
                'title' => 'Kurikulum Merdeka Diterapkan di 200.000 Sekolah',
                'description' => 'Implementasi kurikulum baru telah mencapai target yang ditetapkan pemerintah.',
                'url' => 'https://www.kemdikbud.go.id',
                'urlToImage' => 'https://picsum.photos/400/250?random=3',
                'publishedAt' => date('Y-m-d H:i:s'),
                'source' => ['name' => 'Kemendikbud.go.id']
            ]
        ];
    }
}
