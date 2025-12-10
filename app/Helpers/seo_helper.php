<?php

if (!function_exists('set_meta_tags')) {
    /**
     * Set meta tags for SEO
     */
    function set_meta_tags(array $meta = [])
    {
        $defaults = [
            'title' => 'Website Sekolah',
            'description' => 'Website resmi sekolah dengan informasi terbaru tentang berita, guru, dan kegiatan sekolah.',
            'keywords' => 'sekolah, pendidikan, berita sekolah, guru, siswa',
            'author' => 'Sekolah Kami',
            'robots' => 'index, follow',
            'og_title' => '',
            'og_description' => '',
            'og_image' => '',
            'og_url' => '',
            'canonical' => '',
        ];

        $meta = array_merge($defaults, $meta);

        // Set title
        if (!empty($meta['title'])) {
            echo '<title>' . htmlspecialchars($meta['title']) . '</title>' . PHP_EOL;
        }

        // Basic meta tags
        echo '<meta name="description" content="' . htmlspecialchars($meta['description']) . '">' . PHP_EOL;
        echo '<meta name="keywords" content="' . htmlspecialchars($meta['keywords']) . '">' . PHP_EOL;
        echo '<meta name="author" content="' . htmlspecialchars($meta['author']) . '">' . PHP_EOL;
        echo '<meta name="robots" content="' . htmlspecialchars($meta['robots']) . '">' . PHP_EOL;

        // Open Graph tags
        if (!empty($meta['og_title'])) {
            echo '<meta property="og:title" content="' . htmlspecialchars($meta['og_title']) . '">' . PHP_EOL;
        }
        if (!empty($meta['og_description'])) {
            echo '<meta property="og:description" content="' . htmlspecialchars($meta['og_description']) . '">' . PHP_EOL;
        }
        if (!empty($meta['og_image'])) {
            echo '<meta property="og:image" content="' . htmlspecialchars($meta['og_image']) . '">' . PHP_EOL;
        }
        if (!empty($meta['og_url'])) {
            echo '<meta property="og:url" content="' . htmlspecialchars($meta['og_url']) . '">' . PHP_EOL;
        }

        // Canonical URL
        if (!empty($meta['canonical'])) {
            echo '<link rel="canonical" href="' . htmlspecialchars($meta['canonical']) . '">' . PHP_EOL;
        }
    }
}

if (!function_exists('generate_sitemap')) {
    /**
     * Generate XML sitemap
     */
    function generate_sitemap(): string
    {
        $baseUrl = base_url();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        // Static pages
        $staticPages = [
            '',
            'profile',
            'news',
            'teachers',
            'gallery',
            'contact',
        ];

        foreach ($staticPages as $page) {
            $xml .= "\t<url>" . PHP_EOL;
            $xml .= "\t\t<loc>" . $baseUrl . ($page ? '/' . $page : '') . "</loc>" . PHP_EOL;
            $xml .= "\t\t<lastmod>" . date('Y-m-d') . "</lastmod>" . PHP_EOL;
            $xml .= "\t\t<changefreq>weekly</changefreq>" . PHP_EOL;
            $xml .= "\t\t<priority>" . ($page === '' ? '1.0' : '0.8') . "</priority>" . PHP_EOL;
            $xml .= "\t</url>" . PHP_EOL;
        }

        // Dynamic pages (news articles)
        $newsModel = new \App\Models\NewsModel();
        $publishedNews = $newsModel->getPublished();

        foreach ($publishedNews as $news) {
            $xml .= "\t<url>" . PHP_EOL;
            $xml .= "\t\t<loc>" . $baseUrl . '/news/' . $news['slug'] . "</loc>" . PHP_EOL;
            $xml .= "\t\t<lastmod>" . date('Y-m-d', strtotime($news['updated_at'])) . "</lastmod>" . PHP_EOL;
            $xml .= "\t\t<changefreq>monthly</changefreq>" . PHP_EOL;
            $xml .= "\t\t<priority>0.6</priority>" . PHP_EOL;
            $xml .= "\t</url>" . PHP_EOL;
        }

        $xml .= '</urlset>' . PHP_EOL;

        return $xml;
    }
}

if (!function_exists('structured_data_news')) {
    /**
     * Generate structured data for news article
     */
    function structured_data_news(array $news): string
    {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'headline' => $news['title'],
            'description' => substr(strip_tags($news['content']), 0, 160),
            'datePublished' => $news['created_at'],
            'dateModified' => $news['updated_at'],
            'author' => [
                '@type' => 'Organization',
                'name' => 'Sekolah Kami'
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Sekolah Kami',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => base_url('assets/images/logo.png')
                ]
            ]
        ];

        if (!empty($news['image'])) {
            $data['image'] = [base_url('uploads/' . $news['image'])];
        }

        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_SLASHES) . '</script>';
    }
}