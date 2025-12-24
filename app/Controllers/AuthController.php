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
        // Check for URL parameters first (manual login)
        $username = $this->request->getGet('username') ?: $this->request->getPost('username');
        $password = $this->request->getGet('password') ?: $this->request->getPost('password');

        if (empty($username) || empty($password)) {
            $rules = [
                'username' => 'required',
                'password' => 'required',
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
        }

        $userModel = new UserModel();
        $user = $userModel->authenticate($username, $password);

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