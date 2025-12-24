<!-- Modern Admin Dashboard -->
<div class="admin-dashboard">
    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="welcome-content">
            <h1 class="welcome-title">
                <i class="fas fa-tachometer-alt"></i>
                Selamat Datang di Dashboard Admin
            </h1>
            <p class="welcome-subtitle">Kelola konten website MTS Darul Ulum Nglumber dengan mudah</p>
        </div>
        <div class="welcome-actions">
            <a href="/admin/news/create" class="btn-quick-action">
                <i class="fas fa-plus"></i>
                <span>Tambah Berita</span>
            </a>
            <a href="/admin/teachers/create" class="btn-quick-action">
                <i class="fas fa-user-plus"></i>
                <span>Tambah Guru</span>
            </a>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="stats-grid">
        <div class="stat-card stat-news">
            <div class="stat-icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <div class="stat-content">
                <h3 class="stat-number"><?= $stats['totalNews'] ?? 0 ?></h3>
                <p class="stat-label">Total Berita</p>
                <div class="stat-trend">
                    <i class="fas fa-arrow-up"></i>
                    <span>Aktif</span>
                </div>
            </div>
        </div>

        <div class="stat-card stat-teachers">
            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-content">
                <h3 class="stat-number"><?= $stats['totalTeachers'] ?? 0 ?></h3>
                <p class="stat-label">Guru & Staf</p>
                <div class="stat-trend">
                    <i class="fas fa-users-cog"></i>
                    <span>Aktif</span>
                </div>
            </div>
        </div>

        <div class="stat-card stat-users">
            <div class="stat-icon">
                <i class="fas fa-user-shield"></i>
            </div>
            <div class="stat-content">
                <h3 class="stat-number"><?= $stats['totalUsers'] ?? 0 ?></h3>
                <p class="stat-label">Admin User</p>
                <div class="stat-trend">
                    <i class="fas fa-shield-alt"></i>
                    <span>Sistem</span>
                </div>
            </div>
        </div>

        <div class="stat-card stat-contacts">
            <div class="stat-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="stat-content">
                <h3 class="stat-number"><?= $stats['unreadContacts'] ?? 0 ?></h3>
                <p class="stat-label">Kontak Baru</p>
                <div class="stat-trend">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>Perlu Baca</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="dashboard-grid">
        <!-- Management Menu -->
        <div class="dashboard-card management-menu">
            <div class="card-header-modern">
                <h3 class="card-title">
                    <i class="fas fa-cogs"></i>
                    Menu Manajemen Konten
                </h3>
                <p class="card-subtitle">Kelola semua aspek website sekolah</p>
            </div>

            <div class="menu-grid">
                <a href="/admin/news" class="menu-item">
                    <div class="menu-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="menu-content">
                        <h4>Berita & Artikel</h4>
                        <p>Kelola berita sekolah dan artikel</p>
                    </div>
                    <div class="menu-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="/admin/teachers" class="menu-item">
                    <div class="menu-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="menu-content">
                        <h4>Guru & Staf</h4>
                        <p>Kelola data guru dan staf pengajar</p>
                    </div>
                    <div class="menu-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="/admin/galleries" class="menu-item">
                    <div class="menu-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <div class="menu-content">
                        <h4>Galeri Foto</h4>
                        <p>Kelola galeri dan foto sekolah</p>
                    </div>
                    <div class="menu-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="/admin/contacts" class="menu-item">
                    <div class="menu-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="menu-content">
                        <h4>Pesan Kontak</h4>
                        <p>Lihat dan kelola pesan dari pengunjung</p>
                    </div>
                    <div class="menu-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="/admin/announcements" class="menu-item">
                    <div class="menu-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="menu-content">
                        <h4>Pengumuman</h4>
                        <p>Kelola pengumuman sekolah</p>
                    </div>
                    <div class="menu-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="/admin/events" class="menu-item">
                    <div class="menu-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="menu-content">
                        <h4>Agenda & Event</h4>
                        <p>Kelola jadwal dan acara sekolah</p>
                    </div>
                    <div class="menu-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="/admin/users" class="menu-item">
                    <div class="menu-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <div class="menu-content">
                        <h4>Manajemen User</h4>
                        <p>Kelola akun admin dan operator</p>
                    </div>
                    <div class="menu-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="/admin/categories" class="menu-item">
                    <div class="menu-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="menu-content">
                        <h4>Kategori Berita</h4>
                        <p>Kelola kategori untuk berita</p>
                    </div>
                    <div class="menu-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Activities & Quick Stats -->
        <div class="dashboard-card recent-activities">
            <div class="card-header-modern">
                <h3 class="card-title">
                    <i class="fas fa-history"></i>
                    Aktivitas Terbaru
                </h3>
                <p class="card-subtitle">Log aktivitas admin terakhir</p>
            </div>

            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="activity-content">
                        <p class="activity-text">Admin login berhasil</p>
                        <span class="activity-time">Baru saja</span>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="activity-content">
                        <p class="activity-text">Dashboard dimuat</p>
                        <span class="activity-time">2 menit yang lalu</span>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="activity-content">
                        <p class="activity-text">Sistem siap digunakan</p>
                        <span class="activity-time">Hari ini</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- System Info -->
        <div class="dashboard-card system-info">
            <div class="card-header-modern">
                <h3 class="card-title">
                    <i class="fas fa-server"></i>
                    Info Sistem
                </h3>
                <p class="card-subtitle">Status dan informasi sistem</p>
            </div>

            <div class="system-stats">
                <div class="system-stat">
                    <div class="stat-label">Versi PHP</div>
                    <div class="stat-value"><?= phpversion() ?></div>
                </div>
                <div class="system-stat">
                    <div class="stat-label">Framework</div>
                    <div class="stat-value">CodeIgniter 4</div>
                </div>
                <div class="system-stat">
                    <div class="stat-label">Database</div>
                    <div class="stat-value">MySQL</div>
                </div>
                <div class="system-stat">
                    <div class="stat-label">Status</div>
                    <div class="stat-value status-online">
                        <i class="fas fa-circle"></i>
                        Online
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Modern Admin Dashboard Styles */
.admin-dashboard {
    padding: 2rem;
    max-width: 1400px;
    margin: 0 auto;
    font-family: 'Poppins', sans-serif;
}

/* Welcome Section */
.welcome-section {
    background: linear-gradient(135deg, #0F3D3E 0%, #1a4a4a 100%);
    border-radius: 20px;
    padding: 3rem 2rem;
    margin-bottom: 2rem;
    color: white;
    position: relative;
    overflow: hidden;
}

.welcome-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.1;
}

.welcome-content {
    position: relative;
    z-index: 2;
}

.welcome-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.welcome-title i {
    color: #D4AF37;
    font-size: 2rem;
}

.welcome-subtitle {
    font-size: 1.1rem;
    opacity: 0.9;
    margin-bottom: 2rem;
}

.welcome-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.btn-quick-action {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: rgba(212, 175, 55, 0.2);
    color: #D4AF37;
    text-decoration: none;
    border-radius: 50px;
    border: 2px solid rgba(212, 175, 55, 0.3);
    transition: all 0.3s ease;
    font-weight: 600;
}

.btn-quick-action:hover {
    background: #D4AF37;
    color: #0F3D3E;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(212, 175, 55, 0.4);
}

/* Statistics Cards */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 0, 0, 0.05);
    display: flex;
    align-items: center;
    gap: 1.5rem;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.stat-card:hover::before {
    opacity: 1;
}

.stat-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    flex-shrink: 0;
}

.stat-news .stat-icon { background: linear-gradient(135deg, #667eea, #764ba2); color: white; }
.stat-teachers .stat-icon { background: linear-gradient(135deg, #48bb78, #38a169); color: white; }
.stat-users .stat-icon { background: linear-gradient(135deg, #ed8936, #dd6b20); color: white; }
.stat-contacts .stat-icon { background: linear-gradient(135deg, #dc3545, #c82333); color: white; }

.stat-content {
    flex: 1;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    margin: 0;
    color: #0F3D3E;
}

.stat-label {
    font-size: 1rem;
    color: #6c757d;
    margin: 0.25rem 0;
    font-weight: 500;
}

.stat-trend {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    font-size: 0.85rem;
    color: #28a745;
    font-weight: 600;
}

.stat-trend i {
    font-size: 0.7rem;
}

/* Dashboard Grid */
.dashboard-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
}

.dashboard-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 0, 0, 0.05);
    overflow: hidden;
}

.card-header-modern {
    padding: 2rem 2rem 1rem;
    border-bottom: 1px solid #e9ecef;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
}

.card-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #0F3D3E;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.card-title i {
    color: #D4AF37;
    font-size: 1.2rem;
}

.card-subtitle {
    color: #6c757d;
    margin: 0.5rem 0 0;
    font-size: 0.9rem;
}

/* Management Menu */
.menu-grid {
    padding: 1rem;
}

.menu-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 15px;
    text-decoration: none;
    color: #495057;
    transition: all 0.3s ease;
    margin-bottom: 0.75rem;
    border: 1px solid #e9ecef;
}

.menu-item:hover {
    background: white;
    transform: translateX(5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    color: #0F3D3E;
}

.menu-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.menu-item:hover .menu-icon {
    background: linear-gradient(135deg, #D4AF37, #f4c430);
}

.menu-content {
    flex: 1;
}

.menu-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    margin: 0 0 0.25rem;
    color: #0F3D3E;
}

.menu-content p {
    font-size: 0.85rem;
    color: #6c757d;
    margin: 0;
}

.menu-arrow {
    color: #adb5bd;
    transition: all 0.3s ease;
}

.menu-item:hover .menu-arrow {
    color: #D4AF37;
    transform: translateX(3px);
}

/* Recent Activities */
.activity-list {
    padding: 1rem;
}

.activity-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    border-radius: 12px;
    background: #f8f9fa;
    margin-bottom: 0.75rem;
    transition: all 0.3s ease;
}

.activity-item:hover {
    background: white;
    transform: translateX(5px);
}

.activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, #28a745, #20c997);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.9rem;
    flex-shrink: 0;
}

.activity-content {
    flex: 1;
}

.activity-text {
    font-size: 0.9rem;
    font-weight: 500;
    color: #0F3D3E;
    margin: 0 0 0.25rem;
}

.activity-time {
    font-size: 0.75rem;
    color: #6c757d;
}

/* System Info */
.system-stats {
    padding: 1rem;
}

.system-stat {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
}

.system-stat:last-child {
    border-bottom: none;
}

.stat-label {
    font-weight: 500;
    color: #495057;
}

.stat-value {
    font-weight: 600;
    color: #0F3D3E;
}

.status-online {
    color: #28a745;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.status-online i {
    font-size: 0.7rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .dashboard-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .admin-dashboard {
        padding: 1rem;
    }

    .welcome-section {
        padding: 2rem 1.5rem;
    }

    .welcome-title {
        font-size: 2rem;
    }

    .stats-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .stat-card {
        padding: 1.5rem;
        flex-direction: column;
        text-align: center;
        gap: 1rem;
    }

    .menu-grid {
        padding: 0.5rem;
    }

    .menu-item {
        padding: 1rem;
        flex-direction: column;
        text-align: center;
        gap: 0.75rem;
    }

    .activity-list,
    .system-stats {
        padding: 0.5rem;
    }
}

@media (max-width: 576px) {
    .welcome-actions {
        flex-direction: column;
    }

    .btn-quick-action {
        justify-content: center;
        width: 100%;
    }

    .card-header-modern {
        padding: 1.5rem 1rem 1rem;
    }

    .menu-content h4 {
        font-size: 1rem;
    }
}
</style>