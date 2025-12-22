<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SchoolIdentityModel;
use App\Models\SchoolProfileModel;

class ProfileController extends BaseController
{
    protected $schoolIdentityModel;
    protected $schoolProfileModel;

    public function __construct()
    {
        $this->schoolIdentityModel = new SchoolIdentityModel();
        $this->schoolProfileModel = new SchoolProfileModel();
    }

    public function index()
    {
        return $this->renderWithTemplate('profile/index');
    }

    public function identity()
    {
        try {
            $data['identity'] = $this->schoolIdentityModel->getIdentity();
            return $this->renderWithTemplate('profile/identity', $data);
        } catch (\Exception $e) {
            log_message('error', 'Error loading school identity: ' . $e->getMessage());
            return redirect('/profile')->with('error', 'Terjadi kesalahan saat memuat data identitas sekolah.');
        }
    }

    public function vision()
    {
        try {
            $data['profile'] = $this->schoolProfileModel->getProfile();
            return $this->renderWithTemplate('profile/vision', $data);
        } catch (\Exception $e) {
            log_message('error', 'Error loading school vision: ' . $e->getMessage());
            return redirect('/profile')->with('error', 'Terjadi kesalahan saat memuat data visi misi sekolah.');
        }
    }

    public function history()
    {
        try {
            $data['profile'] = $this->schoolProfileModel->getProfile();
            return $this->renderWithTemplate('profile/history', $data);
        } catch (\Exception $e) {
            log_message('error', 'Error loading school history: ' . $e->getMessage());
            return redirect('/profile')->with('error', 'Terjadi kesalahan saat memuat data sejarah sekolah.');
        }
    }

    public function structure()
    {
        try {
            $data['profile'] = $this->schoolProfileModel->getProfile();
            return $this->renderWithTemplate('profile/structure', $data);
        } catch (\Exception $e) {
            log_message('error', 'Error loading school structure: ' . $e->getMessage());
            return redirect('/profile')->with('error', 'Terjadi kesalahan saat memuat data struktur organisasi sekolah.');
        }
    }

    public function facilities()
    {
        try {
            $data['profile'] = $this->schoolProfileModel->getProfile();
            return $this->renderWithTemplate('profile/facilities', $data);
        } catch (\Exception $e) {
            log_message('error', 'Error loading school facilities: ' . $e->getMessage());
            return redirect('/profile')->with('error', 'Terjadi kesalahan saat memuat data fasilitas sekolah.');
        }
    }
}