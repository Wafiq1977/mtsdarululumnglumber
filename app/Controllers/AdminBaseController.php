<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class AdminBaseController extends BaseController
{
    protected function renderWithAdminTemplate(string $view, array $data = []): string
    {
        // Check if user is logged in
        if (!session()->get('user')) {
            // For admin controllers, redirect to login
            redirect()->to('/auth/login')->send();
            exit; // Stop execution after redirect
        }

        echo view('admin/templates/header', $data);
        echo view($view, $data);
        echo view('admin/templates/footer', $data);
        return '';
    }

    protected function renderWithTemplate(string $view, array $data = []): string
    {
        return $this->renderWithAdminTemplate($view, $data);
    }
}