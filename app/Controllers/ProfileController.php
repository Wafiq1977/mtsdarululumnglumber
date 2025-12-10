<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Profil Sekolah - Visi, Misi & Sejarah',
        ];

        return $this->renderWithTemplate('profile/index', $data);
    }
}