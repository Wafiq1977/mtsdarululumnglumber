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
        $user = session()->get('user');
        if (!$user || $user['role'] !== 'admin') {
            return redirect()->to('/admin/dashboard')->with('error', 'Akses ditolak. Hanya admin yang dapat mengelola user.');
        }

        $userModel = new UserModel();
        $data = [
            'title' => 'Manajemen User',
            'users' => $userModel->findAll(),
        ];

        $this->renderWithTemplate('admin/users', $data);
    }

    public function deleteUser($id)
    {
        $user = session()->get('user');
        if (!$user || $user['role'] !== 'admin') {
            return redirect()->to('/admin/dashboard')->with('error', 'Akses ditolak. Hanya admin yang dapat menghapus user.');
        }

        $userModel = new UserModel();
        $targetUser = $userModel->find($id);

        if (!$targetUser) {
            return redirect()->to('/admin/users')->with('error', 'User tidak ditemukan.');
        }

        // Prevent deleting self or other admins
        if ($targetUser['id'] === $user['id']) {
            return redirect()->to('/admin/users')->with('error', 'Anda tidak dapat menghapus akun sendiri.');
        }

        if ($targetUser['role'] === 'admin') {
            return redirect()->to('/admin/users')->with('error', 'Tidak dapat menghapus admin lain.');
        }

        $userModel->delete($id);

        return redirect()->to('/admin/users')->with('success', 'User berhasil dihapus.');
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