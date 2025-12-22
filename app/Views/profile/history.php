<!-- Page Header -->
<section class="page-hero bg-gradient-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-white-50">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="/profile" class="text-white-50">Profil</a></li>
                        <li class="breadcrumb-item active text-warning" aria-current="page">Sejarah Sekolah</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-history me-3 text-warning"></i>
                    Sejarah Sekolah
                </h1>
                <p class="lead mb-4">
                    Perjalanan panjang MTS Darul Ulum Nglumber dari masa ke masa
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="hero-icon-wrapper">
                    <i class="fas fa-book-open fa-5x text-warning opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- History Content -->
            <div class="col-lg-8 mb-4">
                <!-- Founding Story -->
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-header bg-warning text-dark">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-seedling me-2"></i>
                            Awal Berdiri (2010)
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="history-content">
                            <div class="history-year">2010</div>
                            <h4 class="text-warning mb-3">Pendirian Madrasah Tsanawiyah Darul Ulum Nglumber</h4>
                            <p class="lead">
                                <?= nl2br(esc($profile['sejarah'] ?? 'MTS Darul Ulum Nglumber didirikan pada tahun 2010 sebagai respon terhadap kebutuhan pendidikan Islam yang berkualitas di wilayah Nglumber dan sekitarnya.')) ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Development Timeline -->
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-road me-2"></i>
                            Perkembangan Madrasah
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-marker bg-success"></div>
                                <div class="timeline-content">
                                    <div class="timeline-year">2012</div>
                                    <h5>Pembangunan Fasilitas</h5>
                                    <p>Dibangunnya gedung baru dengan 6 ruang kelas, perpustakaan, dan laboratorium IPA. Jumlah siswa meningkat menjadi 120 orang.</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-marker bg-primary"></div>
                                <div class="timeline-content">
                                    <div class="timeline-year">2015</div>
                                    <h5>Akreditasi Pertama</h5>
                                    <p>Madrasah berhasil mendapatkan akreditasi B dari BAN-S/M (Badan Akreditasi Nasional Sekolah/Madrasah).</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-marker bg-info"></div>
                                <div class="timeline-content">
                                    <div class="timeline-year">2018</div>
                                    <h5>Program Unggulan</h5>
                                    <p>Diluncurkannya program tahfidz Al-Quran dan ekstrakurikuler olahraga. Jumlah siswa mencapai 200 orang.</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-marker bg-warning"></div>
                                <div class="timeline-content">
                                    <div class="timeline-year">2020</div>
                                    <h5>Transformasi Digital</h5>
                                    <p>Implementasi pembelajaran berbasis teknologi dengan komputer dan internet untuk semua kelas.</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-marker bg-danger"></div>
                                <div class="timeline-content">
                                    <div class="timeline-year">2023</div>
                                    <h5>Akreditasi A</h5>
                                    <p>Madrasah berhasil meningkatkan akreditasi menjadi A dan menjadi salah satu madrasah unggulan di Kabupaten Lumajang.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Current Status -->
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-trophy me-2"></i>
                            Pencapaian Saat Ini
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="achievements-grid">
                            <div class="achievement-item">
                                <div class="achievement-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="achievement-content">
                                    <h4>500+</h4>
                                    <p>Siswa Aktif</p>
                                </div>
                            </div>

                            <div class="achievement-item">
                                <div class="achievement-icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <div class="achievement-content">
                                    <h4>25+</h4>
                                    <p>Guru & Staff</p>
                                </div>
                            </div>

                            <div class="achievement-item">
                                <div class="achievement-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="achievement-content">
                                    <h4>A</h4>
                                    <p>Akreditasi</p>
                                </div>
                            </div>

                            <div class="achievement-item">
                                <div class="achievement-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="achievement-content">
                                    <h4>15+</h4>
                                    <p>Ruang Kelas</p>
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
                            <a href="/profile/history" class="list-group-item list-group-item-action active">
                                <i class="fas fa-history me-2 text-warning"></i>
                                Sejarah Sekolah
                            </a>
                            <a href="/profile/structure" class="list-group-item list-group-item-action">
                                <i class="fas fa-sitemap me-2 text-danger"></i>
                                Struktur Organisasi
                            </a>
                            <a href="/profile/facilities" class="list-group-item list-group-item-action">
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

                <!-- Historical Photo -->
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-camera me-2"></i>
                            Galeri Sejarah
                        </h5>
                    </div>
                    <div class="card-body text-center">
                        <div class="history-photo-placeholder">
                            <i class="fas fa-image fa-3x text-muted mb-3"></i>
                            <p class="text-muted small">Galeri foto sejarah akan segera ditambahkan</p>
                        </div>
                        <a href="/gallery" class="btn btn-warning btn-sm">
                            <i class="fas fa-images me-1"></i>
                            Lihat Galeri
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.history-content {
    position: relative;
}

.history-year {
    position: absolute;
    top: -10px;
    right: -10px;
    background: linear-gradient(135deg, #ffc107, #fd7e14);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: bold;
    font-size: 0.9rem;
    box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
}

.timeline {
    position: relative;
    padding-left: 2rem;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 15px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, #28a745, #007bff, #17a2b8, #ffc107, #dc3545);
}

.timeline-item {
    position: relative;
    margin-bottom: 2rem;
    padding-left: 2rem;
}

.timeline-marker {
    position: absolute;
    left: -23px;
    top: 10px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    border: 3px solid white;
    box-shadow: 0 0 0 3px currentColor;
}

.timeline-content {
    background: white;
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border-left: 4px solid currentColor;
}

.timeline-year {
    color: currentColor;
    font-weight: bold;
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
}

.timeline-content h5 {
    color: #495057;
    margin-bottom: 0.5rem;
}

.timeline-content p {
    color: #6c757d;
    margin: 0;
    line-height: 1.5;
}

.achievements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    gap: 1rem;
}

.achievement-item {
    text-align: center;
    padding: 1.5rem 1rem;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 12px;
    transition: all 0.3s ease;
}

.achievement-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.achievement-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #007bff, #6610f2);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 1.2rem;
}

.achievement-content h4 {
    color: #495057;
    margin-bottom: 0.25rem;
    font-weight: 700;
}

.achievement-content p {
    color: #6c757d;
    font-size: 0.9rem;
    margin: 0;
}

.hero-icon-wrapper {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.history-photo-placeholder {
    padding: 2rem;
    border: 2px dashed #dee2e6;
    border-radius: 10px;
    margin-bottom: 1rem;
}

.list-group-item.active {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #212529;
}

.list-group-item.active i {
    color: #212529 !important;
}
</style>