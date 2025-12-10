<?php

namespace App\Controllers;

use App\Models\NewsModel;

class SeoController extends BaseController
{
    public function sitemap()
    {
        $newsModel = new NewsModel();

        $data = [
            'news' => $newsModel->getPublished(),
            'base_url' => base_url(),
        ];

        // Set content type to XML
        $this->response->setContentType('application/xml');

        return $this->response->setBody(view('seo/sitemap', $data));
    }

    public function robots()
    {
        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        $content .= "Sitemap: " . base_url('sitemap.xml') . "\n";

        return $this->response->setContentType('text/plain')->setBody($content);
    }
}