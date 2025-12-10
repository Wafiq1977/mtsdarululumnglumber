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
        ];

        $this->renderWithTemplate('home/index', $data);
    }
}
