<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        if (session()->get('user')) {
            return redirect()->to('/admin/dashboard');
        }

        return view('admin/login');
    }

    public function authenticate()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $user = $userModel->authenticate($this->request->getPost('username'), $this->request->getPost('password'));

        if ($user) {
            session()->set('user', $user);
            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->back()->withInput()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}