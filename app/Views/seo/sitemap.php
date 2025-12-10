<?php echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    <!-- Homepage -->
    <url>
        <loc><?= $base_url ?></loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Static Pages -->
    <url>
        <loc><?= $base_url ?>/profile</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc><?= $base_url ?>/news</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>

    <url>
        <loc><?= $base_url ?>/teachers</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc><?= $base_url ?>/gallery</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>

    <url>
        <loc><?= $base_url ?>/contact</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <!-- News Articles -->
    <?php foreach ($news as $item): ?>
    <url>
        <loc><?= $base_url ?>/news/<?= $item['slug'] ?></loc>
        <lastmod><?= date('Y-m-d', strtotime($item['updated_at'] ?: $item['created_at'])) ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    <?php endforeach; ?>

</urlset>