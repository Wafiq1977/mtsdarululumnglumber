<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\NewsModel;
use App\Models\TeacherModel;
use App\Models\ContactModel;

class AdminController extends AdminBaseController
{
    public function dashboard()
    {
        $userModel = new UserModel();
        $newsModel = new NewsModel();
        $teacherModel = new TeacherModel();
        $contactModel = new ContactModel();

        $data = [
            'title' => 'Dashboard Admin',
            'stats' => [
                'totalNews' => $newsModel->countAll(),
                'totalTeachers' => $teacherModel->countAll(),
                'totalUsers' => $userModel->countAll(),
                'unreadContacts' => $contactModel->where('status', 'unread')->countAllResults(),
            ],
        ];

        $this->renderWithTemplate('admin/dashboard', $data);
    }

    public function users()
    {
        $userModel = new UserModel();
        $data = [
            'title' => 'Manajemen User',
            'users' => $userModel->findAll(),
        ];

        $this->renderWithTemplate('admin/users', $data);
    }

    public function announcements()
    {
        // Implementasi untuk pengumuman
        $data = ['title' => 'Pengumuman'];
        $this->renderWithTemplate('admin/announcements', $data);
    }

    public function events()
    {
        // Implementasi untuk agenda
        $data = ['title' => 'Agenda'];
        $this->renderWithTemplate('admin/events', $data);
    }
}