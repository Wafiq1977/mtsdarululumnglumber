<!-- Page Header -->
<section class="page-hero bg-gradient-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-white-50">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="/profile" class="text-white-50">Profil</a></li>
                        <li class="breadcrumb-item active text-warning" aria-current="page">Identitas Sekolah</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-id-card me-3 text-warning"></i>
                    Identitas Sekolah
                </h1>
                <p class="lead mb-4">
                    Informasi lengkap tentang identitas dan data pokok MTS Darul Ulum Nglumber
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
            <!-- School Identity Card -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Data Pokok Sekolah
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="identity-item">
                                    <div class="identity-label">
                                        <i class="fas fa-building text-success me-2"></i>
                                        Nama Sekolah
                                    </div>
                                    <div class="identity-value fw-bold">
                                        <?= esc($identity['nama_sekolah'] ?? 'MTS Darul Ulum Nglumber') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item">
                                    <div class="identity-label">
                                        <i class="fas fa-hashtag text-success me-2"></i>
                                        NPSN
                                    </div>
                                    <div class="identity-value fw-bold">
                                        <?= esc($identity['npsn'] ?? '20512345') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item">
                                    <div class="identity-label">
                                        <i class="fas fa-graduation-cap text-success me-2"></i>
                                        Jenjang
                                    </div>
                                    <div class="identity-value fw-bold">
                                        <?= esc($identity['jenjang'] ?? 'Madrasah Tsanawiyah (MTs)') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item">
                                    <div class="identity-label">
                                        <i class="fas fa-award text-success me-2"></i>
                                        Status Akreditasi
                                    </div>
                                    <div class="identity-value fw-bold">
                                        <?= esc($identity['status_akreditasi'] ?? 'Terakreditasi A') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item">
                                    <div class="identity-label">
                                        <i class="fas fa-map-marker-alt text-success me-2"></i>
                                        Alamat
                                    </div>
                                    <div class="identity-value">
                                        <?= nl2br(esc($identity['alamat'] ?? 'Jl. Raya Nglumber, Desa Nglumber<br>Kecamatan Nglumber, Kabupaten Lumajang<br>Jawa Timur 67392')) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item">
                                    <div class="identity-label">
                                        <i class="fas fa-phone text-success me-2"></i>
                                        Telepon
                                    </div>
                                    <div class="identity-value fw-bold">
                                        <a href="tel:<?= esc(str_replace(['(', ')', ' ', '-'], '', $identity['telepon'] ?? '(0334) 1234567')) ?>" class="text-decoration-none">
                                            <?= esc($identity['telepon'] ?? '(0334) 1234567') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item">
                                    <div class="identity-label">
                                        <i class="fas fa-envelope text-success me-2"></i>
                                        Email
                                    </div>
                                    <div class="identity-value">
                                        <a href="mailto:<?= esc($identity['email'] ?? 'info@mtsdarululum.sch.id') ?>" class="text-decoration-none">
                                            <?= esc($identity['email'] ?? 'info@mtsdarululum.sch.id') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item">
                                    <div class="identity-label">
                                        <i class="fas fa-calendar-alt text-success me-2"></i>
                                        Tahun Berdiri
                                    </div>
                                    <div class="identity-value fw-bold">
                                        <a href="/profile/history" class="text-decoration-none text-dark" title="Lihat sejarah sekolah">
                                            <?= esc($identity['tahun_berdiri'] ?? '2010') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="identity-item">
                                    <div class="identity-label">
                                        <i class="fas fa-university text-success me-2"></i>
                                        Lembaga Pengelola
                                    </div>
                                    <div class="identity-value fw-bold">
                                        <a href="/profile/structure" class="text-decoration-none text-dark" title="Lihat struktur organisasi">
                                            <?= esc($identity['lembaga_pengelola'] ?? 'LPM MAARIF NAHDLATUL ULAMA') ?>
                                        </a>
                                    </div>
                                    <div class="mt-2">
                                        <small class="text-muted">
                                            <?= esc($identity['deskripsi_lembaga'] ?? 'Lembaga Pengembangan dan Pemberdayaan Madrasah Maarif Nahdlatul Ulama') ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LPM Maarif Information Card -->
                <div class="card shadow-lg border-0 mt-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-university me-2"></i>
                            Lembaga Pendidikan Maarif Nahdlatul Ulama
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="text-primary mb-3">LPM MAARIF NAHDLATUL ULAMA</h5>
                                <div class="institution-description mb-4">
                                    <p class="lead text-justify">
                                        <strong>Lembaga Pendidikan Maarif Nahdlatul Ulama (LPM Maarif NU)</strong> adalah lembaga pendidikan Islam yang berada di bawah naungan Nahdlatul Ulama (NU), organisasi Islam terbesar di Indonesia. Lembaga ini berkomitmen untuk mengembangkan pendidikan yang berbasis pada nilai-nilai Ahlussunnah wal Jama'ah (Aswaja) dan mengintegrasikan ilmu pengetahuan umum dengan ajaran Islam.
                                    </p>
                                    <p class="text-muted">
                                        Sebagai bagian dari jaringan pendidikan NU, LPM Maarif NU bertujuan mencetak generasi muda yang tidak hanya cerdas secara akademik, tetapi juga memiliki akhlak mulia, toleran, dan berkontribusi positif bagi masyarakat dan bangsa. Madrasah Tsanawiyah Darul Ulum Nglumber merupakan salah satu unit pendidikan yang dikelola oleh lembaga ini.
                                    </p>
                                </div>

                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="info-box p-3 bg-light rounded">
                                            <h6 class="text-primary mb-2">
                                                <i class="fas fa-bullseye me-2"></i>
                                                Prinsip Utama
                                            </h6>
                                            <p class="small mb-0">
                                                <?= esc($identity['prinsip_utama'] ?? 'Ahlussunnah wal Jama\'ah (Aswaja) sebagai landasan pendidikan Islam moderat dan toleran.') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="info-box p-3 bg-light rounded">
                                            <h6 class="text-primary mb-2">
                                                <i class="fas fa-graduation-cap me-2"></i>
                                                Tujuan Pendidikan
                                            </h6>
                                            <p class="small mb-0">
                                                <?= esc($identity['tujuan_pendidikan'] ?? 'Mencetak generasi yang berilmu, berakhlak, dan berkontribusi bagi umat dan bangsa.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="institution-logo">
                                    <i class="fas fa-mosque fa-4x text-primary mb-3"></i>
                                    <h6 class="text-primary fw-bold">LPM MAARIF NU</h6>
                                    <small class="text-muted">Lembaga Pendidikan Islam</small>
                                    <div class="mt-3">
                                        <span class="badge bg-primary px-3 py-2">
                                            <i class="fas fa-star me-1"></i>
                                            Terakreditasi
                                        </span>
                                    </div>
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
                            <a href="/profile/identity" class="list-group-item list-group-item-action active">
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

                <!-- Contact Info -->
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-phone me-2"></i>
                            Hubungi Kami
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="contact-info">
                            <p class="mb-2">
                                <i class="fas fa-map-marker-alt text-success me-2"></i>
                                <small>Jl. Raya Nglumber, Lumajang</small>
                            </p>
                            <p class="mb-2">
                                <i class="fas fa-phone text-success me-2"></i>
                                <small>(0334) 1234567</small>
                            </p>
                            <p class="mb-0">
                                <i class="fas fa-envelope text-success me-2"></i>
                                <small>info@mtsdarululum.sch.id</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.identity-item {
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
    border-left: 4px solid #28a745;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.identity-item:hover {
    background: #e9ecef;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.identity-label {
    font-size: 0.9rem;
    color: #6c757d;
    font-weight: 600;
    margin-bottom: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.identity-value {
    color: #495057;
    font-size: 1rem;
    line-height: 1.4;
}

.hero-icon-wrapper {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.list-group-item.active {
    background-color: #28a745;
    border-color: #28a745;
    color: white;
}

.list-group-item.active i {
    color: white !important;
}

.info-box {
    border-left: 4px solid #007bff;
    transition: all 0.3s ease;
}

.info-box:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,123,255,0.1);
}

.institution-logo {
    padding: 2rem;
    background: linear-gradient(135deg, rgba(0,123,255,0.1), rgba(0,123,255,0.05));
    border-radius: 15px;
    border: 2px solid rgba(0,123,255,0.1);
    transition: all 0.3s ease;
}

.institution-logo:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 25px rgba(0,123,255,0.2);
}

.institution-description {
    background: linear-gradient(135deg, rgba(0,123,255,0.05), rgba(0,123,255,0.02));
    padding: 1.5rem;
    border-radius: 10px;
    border-left: 4px solid #007bff;
}

.text-justify {
    text-align: justify;
    text-justify: inter-word;
}

.badge {
    font-size: 0.75rem;
    font-weight: 600;
}
</style>