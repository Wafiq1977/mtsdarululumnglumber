<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panel Admin - MTS Darul Ulum Nglumber">
    <title><?= $title ?? 'Panel Admin - MTS Darul Ulum Nglumber' ?></title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom Admin CSS -->
    <style>
        /* Admin Layout Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
            min-height: 100vh;
        }

        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .admin-sidebar {
            width: 280px;
            background: linear-gradient(180deg, #0F3D3E 0%, #1a4a4a 100%);
            color: white;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 2rem 1.5rem;
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
            text-align: center;
        }

        .sidebar-logo {
            width: 60px;
            height: auto;
            margin-bottom: 1rem;
            border-radius: 10px;
        }

        .sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .sidebar-subtitle {
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .menu-section {
            margin-bottom: 2rem;
        }

        .menu-section-title {
            padding: 0.5rem 1.5rem;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #D4AF37;
            opacity: 0.8;
        }

        .menu-item {
            display: block;
            padding: 0.875rem 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            position: relative;
        }

        .menu-item:hover,
        .menu-item.active {
            background: rgba(212, 175, 55, 0.1);
            color: #D4AF37;
            border-left-color: #D4AF37;
            text-decoration: none;
        }

        .menu-item.active {
            background: rgba(212, 175, 55, 0.2);
            font-weight: 600;
        }

        .menu-item i {
            width: 20px;
            margin-right: 0.75rem;
            text-align: center;
        }

        /* Main Content */
        .admin-main {
            flex: 1;
            margin-left: 280px;
            min-height: 100vh;
        }

        .admin-header {
            background: white;
            padding: 1rem 2rem;
            border-bottom: 1px solid #e9ecef;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #0F3D3E;
            margin: 0;
        }

        .page-subtitle {
            font-size: 0.9rem;
            color: #6c757d;
            margin: 0.25rem 0 0;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-menu {
            position: relative;
        }

        .user-menu-toggle {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.5rem 1rem;
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 50px;
            text-decoration: none;
            color: #495057;
            transition: all 0.3s ease;
        }

        .user-menu-toggle:hover {
            background: #e9ecef;
            text-decoration: none;
            color: #0F3D3E;
        }

        .user-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .user-info {
            text-align: left;
        }

        .user-name {
            font-size: 0.9rem;
            font-weight: 600;
            line-height: 1.2;
        }

        .user-role {
            font-size: 0.75rem;
            color: #6c757d;
            line-height: 1.2;
        }

        .admin-content {
            padding: 2rem;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }

            .admin-sidebar.show {
                transform: translateX(0);
            }

            .admin-main {
                margin-left: 0;
            }

            .sidebar-toggle {
                display: block !important;
            }

            .admin-header {
                padding: 1rem;
            }

            .header-content {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }

            .admin-content {
                padding: 1rem;
            }
        }

        .sidebar-toggle {
            display: none;
            background: none;
            border: none;
            color: #6c757d;
            font-size: 1.2rem;
            padding: 0.5rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .sidebar-toggle:hover {
            background: #f8f9fa;
            color: #0F3D3E;
        }

        /* Overlay for mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .sidebar-overlay.show {
            display: block;
        }
    </style>
</head>
<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="sidebar-header">
                <img src="/uploads/logo.png" alt="Logo" class="sidebar-logo">
                <h3 class="sidebar-title">MTS Darul Ulum</h3>
                <p class="sidebar-subtitle">Panel Administrasi</p>
            </div>

            <nav class="sidebar-menu">
                <div class="menu-section">
                    <div class="menu-section-title">Dashboard</div>
                    <a href="/admin/dashboard" class="menu-item <?= uri_string() == 'admin/dashboard' ? 'active' : '' ?>">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </div>

                <div class="menu-section">
                    <div class="menu-section-title">Konten</div>
                    <a href="/admin/news" class="menu-item <?= strpos(uri_string(), 'admin/news') === 0 ? 'active' : '' ?>">
                        <i class="fas fa-newspaper"></i>
                        Berita & Artikel
                    </a>
                    <a href="/admin/teachers" class="menu-item <?= strpos(uri_string(), 'admin/teachers') === 0 ? 'active' : '' ?>">
                        <i class="fas fa-users"></i>
                        Guru & Staf
                    </a>
                    <a href="/admin/galleries" class="menu-item <?= strpos(uri_string(), 'admin/galleries') === 0 ? 'active' : '' ?>">
                        <i class="fas fa-images"></i>
                        Galeri Foto
                    </a>
                    <a href="/admin/announcements" class="menu-item <?= strpos(uri_string(), 'admin/announcements') === 0 ? 'active' : '' ?>">
                        <i class="fas fa-bullhorn"></i>
                        Pengumuman
                    </a>
                    <a href="/admin/events" class="menu-item <?= strpos(uri_string(), 'admin/events') === 0 ? 'active' : '' ?>">
                        <i class="fas fa-calendar-alt"></i>
                        Agenda & Event
                    </a>
                </div>

                <div class="menu-section">
                    <div class="menu-section-title">Pengaturan</div>
                    <a href="/admin/contacts" class="menu-item <?= strpos(uri_string(), 'admin/contacts') === 0 ? 'active' : '' ?>">
                        <i class="fas fa-envelope"></i>
                        Pesan Kontak
                    </a>
                    <a href="/admin/categories" class="menu-item <?= strpos(uri_string(), 'admin/categories') === 0 ? 'active' : '' ?>">
                        <i class="fas fa-tags"></i>
                        Kategori
                    </a>
                    <a href="/admin/users" class="menu-item <?= strpos(uri_string(), 'admin/users') === 0 ? 'active' : '' ?>">
                        <i class="fas fa-user-cog"></i>
                        Manajemen User
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="admin-main">
            <!-- Header -->
            <header class="admin-header">
                <div class="header-content">
                    <div>
                        <button class="sidebar-toggle" id="sidebarToggle">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h1 class="page-title"><?= $title ?? 'Dashboard Admin' ?></h1>
                        <p class="page-subtitle">Kelola konten website sekolah</p>
                    </div>

                    <div class="header-actions">
                        <div class="user-menu">
                            <a href="#" class="user-menu-toggle" id="userMenuToggle">
                                <div class="user-avatar">
                                    <?= strtoupper(substr(session()->get('user')['username'] ?? 'A', 0, 1)) ?>
                                </div>
                                <div class="user-info">
                                    <div class="user-name"><?= session()->get('user')['username'] ?? 'Admin' ?></div>
                                    <div class="user-role">Administrator</div>
                                </div>
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" id="userDropdown" style="display: none;">
                                <a class="dropdown-item" href="/admin/dashboard">
                                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/auth/logout">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="admin-content">