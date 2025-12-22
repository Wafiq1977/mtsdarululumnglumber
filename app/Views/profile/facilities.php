<!-- Page Header -->
<section class="page-hero bg-gradient-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-white-50">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="/profile" class="text-white-50">Profil</a></li>
                        <li class="breadcrumb-item active text-warning" aria-current="page">Fasilitas</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-building me-3 text-warning"></i>
                    Fasilitas Sekolah
                </h1>
                <p class="lead mb-4">
                    Sarana dan prasarana pendukung pembelajaran di MTS Darul Ulum Nglumber
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="hero-icon-wrapper">
                    <i class="fas fa-school fa-5x text-warning opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Facilities Content -->
            <div class="col-lg-8 mb-4">
                <!-- Academic Facilities -->
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-graduation-cap me-2"></i>
                            Fasilitas Akademik
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="facilities-grid">
                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-chalkboard"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Ruang Kelas</h5>
                                    <p>15 ruang kelas yang nyaman dengan fasilitas multimedia</p>
                                    <span class="facility-count">15 Unit</span>
                                </div>
                            </div>

                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Perpustakaan</h5>
                                    <p>Koleksi buku pelajaran dan bacaan umum yang lengkap</p>
                                    <span class="facility-count">5000+ Buku</span>
                                </div>
                            </div>

                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-flask"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Laboratorium IPA</h5>
                                    <p>Fasilitas praktikum lengkap untuk pembelajaran sains</p>
                                    <span class="facility-count">1 Lab</span>
                                </div>
                            </div>

                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-laptop"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Laboratorium Komputer</h5>
                                    <p>25 unit komputer untuk pembelajaran teknologi informasi</p>
                                    <span class="facility-count">25 Unit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sports & Arts Facilities -->
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-running me-2"></i>
                            Fasilitas Olahraga & Seni
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="facilities-grid">
                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-futbol"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Lapangan Olahraga</h5>
                                    <p>Lapangan multifungsi untuk berbagai kegiatan olahraga</p>
                                    <span class="facility-count">1 Lapangan</span>
                                </div>
                            </div>

                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-music"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Ruang Musik</h5>
                                    <p>Fasilitas untuk kegiatan seni musik dan marching band</p>
                                    <span class="facility-count">1 Ruangan</span>
                                </div>
                            </div>

                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-palette"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Ruang Seni</h5>
                                    <p>Studio seni rupa dan kerajinan tangan</p>
                                    <span class="facility-count">1 Studio</span>
                                </div>
                            </div>

                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-pray"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Masjid Sekolah</h5>
                                    <p>Tempat ibadah yang nyaman untuk seluruh warga sekolah</p>
                                    <span class="facility-count">1 Masjid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Supporting Facilities -->
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-warning text-dark">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-concierge-bell me-2"></i>
                            Fasilitas Pendukung
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <p class="mb-4 text-muted">
                            <?= nl2br(esc($profile['fasilitas'] ?? 'MTS Darul Ulum Nglumber memiliki berbagai fasilitas pendukung pembelajaran yang lengkap dan modern.')) ?>
                        </p>
                        <div class="facilities-grid">
                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-utensils"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Kantin Sehat</h5>
                                    <p>Area makan yang bersih dan sehat untuk siswa</p>
                                    <span class="facility-count">1 Kantin</span>
                                </div>
                            </div>

                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-first-aid"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>UKS (Usaha Kesehatan Sekolah)</h5>
                                    <p>Pelayanan kesehatan dasar untuk siswa</p>
                                    <span class="facility-count">1 Unit</span>
                                </div>
                            </div>

                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-parking"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>Area Parkir</h5>
                                    <p>Parkir yang aman untuk kendaraan siswa dan guru</p>
                                    <span class="facility-count">2 Area</span>
                                </div>
                            </div>

                            <div class="facility-item">
                                <div class="facility-icon">
                                    <i class="fas fa-wifi"></i>
                                </div>
                                <div class="facility-content">
                                    <h5>WiFi Sekolah</h5>
                                    <p>Internet cepat untuk mendukung pembelajaran digital</p>
                                    <span class="facility-count">Full Coverage</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Quick Navigation -->
                <div class="card shadow mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-list me-2"></i>
                            Menu Profil
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <a href="/profile" class="list-group-item list-group-item-action">
                                <i class="fas fa-school me-2 text-primary"></i>
                                Profil Sekolah
                            </a>
                            <a href="/profile/identity" class="list-group-item list-group-item-action">
                                <i class="fas fa-id-card me-2 text-success"></i>
                                Identitas Sekolah
                            </a>
                            <a href="/profile/vision" class="list-group-item list-group-item-action">
                                <i class="fas fa-eye me-2 text-info"></i>
                                Visi Misi
                            </a>
                            <a href="/profile/history" class="list-group-item list-group-item-action">
                                <i class="fas fa-history me-2 text-warning"></i>
                                Sejarah Sekolah
                            </a>
                            <a href="/profile/structure" class="list-group-item list-group-item-action">
                                <i class="fas fa-sitemap me-2 text-danger"></i>
                                Struktur Organisasi
                            </a>
                            <a href="/profile/facilities" class="list-group-item list-group-item-action active">
                                <i class="fas fa-building me-2 text-secondary"></i>
                                Fasilitas
                            </a>
                            <a href="/teachers" class="list-group-item list-group-item-action">
                                <i class="fas fa-users me-2 text-dark"></i>
                                Staf dan Pengajar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Facility Stats -->
                <div class="card shadow mb-4">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-chart-bar me-2"></i>
                            Statistik Fasilitas
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="facility-stats">
                            <div class="stat-item">
                                <div class="stat-number text-success">15</div>
                                <div class="stat-label">Ruang Kelas</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number text-success">25</div>
                                <div class="stat-label">Komputer</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number text-success">5000+</div>
                                <div class="stat-label">Koleksi Buku</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number text-success">2</div>
                                <div class="stat-label">Hektar Lahan</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Link -->
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-images me-2"></i>
                            Galeri Fasilitas
                        </h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="text-muted small mb-3">Lihat foto-foto fasilitas sekolah kami</p>
                        <a href="/gallery" class="btn btn-warning">
                            <i class="fas fa-camera me-2"></i>
                            Lihat Galeri
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.facilities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.facility-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 12px;
    border-left: 4px solid #007bff;
    transition: all 0.3s ease;
}

.facility-item:hover {
    background: #e9ecef;
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

.facility-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #007bff, #6610f2);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.facility-content {
    flex: 1;
}

.facility-content h5 {
    color: #495057;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.facility-content p {
    color: #6c757d;
    font-size: 0.9rem;
    line-height: 1.4;
    margin-bottom: 0.5rem;
}

.facility-count {
    display: inline-block;
    background: rgba(0, 123, 255, 0.1);
    color: #007bff;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.facility-stats {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.facility-stats .stat-item {
    text-align: center;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
    border: 1px solid #dee2e6;
}

.facility-stats .stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.facility-stats .stat-label {
    font-size: 0.8rem;
    color: #6c757d;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.hero-icon-wrapper {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.list-group-item.active {
    background-color: #6c757d;
    border-color: #6c757d;
    color: white;
}

.list-group-item.active i {
    color: white !important;
}

/* Color variations for different facility types */
.facilities-grid .facility-item:nth-child(1) { border-left-color: #007bff; }
.facilities-grid .facility-item:nth-child(2) { border-left-color: #28a745; }
.facilities-grid .facility-item:nth-child(3) { border-left-color: #17a2b8; }
.facilities-grid .facility-item:nth-child(4) { border-left-color: #ffc107; }

/* Responsive */
@media (max-width: 768px) {
    .facilities-grid {
        grid-template-columns: 1fr;
    }

    .facility-item {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
    }

    .facility-stats {
        grid-template-columns: 1fr;
    }
}
</style>