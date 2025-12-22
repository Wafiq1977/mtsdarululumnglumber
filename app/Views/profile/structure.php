<!-- Page Header -->
<section class="page-hero bg-gradient-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-white-50">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="/profile" class="text-white-50">Profil</a></li>
                        <li class="breadcrumb-item active text-warning" aria-current="page">Struktur Organisasi</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-sitemap me-3 text-warning"></i>
                    Struktur Organisasi
                </h1>
                <p class="lead mb-4">
                    Susunan kepengurusan dan organisasi MTS Darul Ulum Nglumber
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="hero-icon-wrapper">
                    <i class="fas fa-users-cog fa-5x text-warning opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Organization Structure -->
            <div class="col-lg-8 mb-4">
                <!-- Leadership Structure -->
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-header bg-danger text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-crown me-2"></i>
                            Pimpinan Madrasah
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="leader-structure">
                            <div class="leader-card">
                                <div class="leader-avatar">
                                    <i class="fas fa-user-tie fa-3x text-danger"></i>
                                </div>
                                <div class="leader-info">
                                            <h5 class="leader-name">Drs. Ahmad Fauzi, M.Pd.I</h5>
                                            <p class="leader-position text-danger fw-bold">Kepala Madrasah</p>
                                            <p class="leader-description"><?= nl2br(esc($profile['struktur_organisasi'] ?? 'Bertanggung jawab atas pengelolaan dan pengembangan madrasah secara keseluruhan.')) ?></p>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Organization Chart -->
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-project-diagram me-2"></i>
                            Bagan Organisasi
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="org-chart">
                            <!-- Level 1: Kepala Madrasah -->
                            <div class="org-level">
                                <div class="org-node leader-node">
                                    <div class="node-content">
                                        <i class="fas fa-user-tie"></i>
                                        <div class="node-title">Kepala Madrasah</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Level 2: Wakil Kepala & Koordinator -->
                            <div class="org-level">
                                <div class="org-node">
                                    <div class="node-content">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="node-title">Wakil Kepala</div>
                                        <div class="node-subtitle">Bidang Kurikulum</div>
                                    </div>
                                </div>
                                <div class="org-node">
                                    <div class="node-content">
                                        <i class="fas fa-users"></i>
                                        <div class="node-title">Wakil Kepala</div>
                                        <div class="node-subtitle">Bidang Kesiswaan</div>
                                    </div>
                                </div>
                                <div class="org-node">
                                    <div class="node-content">
                                        <i class="fas fa-book"></i>
                                        <div class="node-title">Koordinator</div>
                                        <div class="node-subtitle">Bidang Akademik</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Level 3: Department Heads -->
                            <div class="org-level">
                                <div class="org-node">
                                    <div class="node-content">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                        <div class="node-title">Kepala Program</div>
                                        <div class="node-subtitle">Tahfidz Al-Quran</div>
                                    </div>
                                </div>
                                <div class="org-node">
                                    <div class="node-content">
                                        <i class="fas fa-flask"></i>
                                        <div class="node-title">Kepala Lab</div>
                                        <div class="node-subtitle">IPA & Komputer</div>
                                    </div>
                                </div>
                                <div class="org-node">
                                    <div class="node-content">
                                        <i class="fas fa-running"></i>
                                        <div class="node-title">Koordinator</div>
                                        <div class="node-subtitle">Ekstrakurikuler</div>
                                    </div>
                                </div>
                                <div class="org-node">
                                    <div class="node-content">
                                        <i class="fas fa-user-friends"></i>
                                        <div class="node-title">Kepala</div>
                                        <div class="node-subtitle">Bimbingan Konseling</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Level 4: Teachers -->
                            <div class="org-level">
                                <div class="org-node teacher-node">
                                    <div class="node-content">
                                        <i class="fas fa-users"></i>
                                        <div class="node-title">Guru Mata Pelajaran</div>
                                        <div class="node-subtitle">25+ Pengajar</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Department Details -->
                <div class="card shadow-lg border-0 mt-4">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Penjelasan Jabatan
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="departments-grid">
                            <div class="department-item">
                                <h5 class="department-title text-success">
                                    <i class="fas fa-user-tie me-2"></i>
                                    Kepala Madrasah
                                </h5>
                                <p>Bertanggung jawab penuh atas pengelolaan, pengembangan, dan pencapaian tujuan madrasah.</p>
                            </div>

                            <div class="department-item">
                                <h5 class="department-title text-primary">
                                    <i class="fas fa-user-graduate me-2"></i>
                                    Wakil Kepala Bidang Kurikulum
                                </h5>
                                <p>Mengkoordinasikan penyusunan kurikulum, pengembangan pembelajaran, dan evaluasi akademik.</p>
                            </div>

                            <div class="department-item">
                                <h5 class="department-title text-info">
                                    <i class="fas fa-users me-2"></i>
                                    Wakil Kepala Bidang Kesiswaan
                                </h5>
                                <p>Mengelola kegiatan kesiswaan, disiplin siswa, dan hubungan dengan orang tua.</p>
                            </div>

                            <div class="department-item">
                                <h5 class="department-title text-warning">
                                    <i class="fas fa-chalkboard-teacher me-2"></i>
                                    Koordinator Akademik
                                </h5>
                                <p>Mengawasi implementasi kurikulum dan pengembangan profesional guru.</p>
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
                            <a href="/profile/structure" class="list-group-item list-group-item-action active">
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

                <!-- Contact Leadership -->
                <div class="card shadow">
                    <div class="card-header bg-danger text-white">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-phone me-2"></i>
                            Hubungi Pimpinan
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="contact-leader">
                            <div class="leader-contact-item">
                                <i class="fas fa-envelope text-danger me-2"></i>
                                <div>
                                    <small class="text-muted">Email Kepala Madrasah</small><br>
                                    <span>kepala@mtsdarululum.sch.id</span>
                                </div>
                            </div>
                            <div class="leader-contact-item">
                                <i class="fas fa-phone text-danger me-2"></i>
                                <div>
                                    <small class="text-muted">Telepon</small><br>
                                    <span>(0334) 1234567</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.leader-structure {
    display: flex;
    justify-content: center;
}

.leader-card {
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #fff, #f8f9fa);
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    border: 2px solid #dc3545;
    max-width: 500px;
    width: 100%;
}

.leader-avatar {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #dc3545, #c82333);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin-right: 1.5rem;
    flex-shrink: 0;
}

.leader-info h5 {
    margin-bottom: 0.25rem;
    color: #495057;
}

.leader-position {
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}

.leader-description {
    color: #6c757d;
    font-size: 0.9rem;
    line-height: 1.5;
    margin: 0;
}

.org-chart {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2rem;
}

.org-level {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.org-node {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
    position: relative;
}

.org-node:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #007bff;
}

.leader-node {
    border-color: #dc3545;
    background: linear-gradient(135deg, #fff, #ffe6e6);
}

.leader-node:hover {
    border-color: #dc3545;
}

.teacher-node {
    min-width: 200px;
}

.node-content {
    padding: 1rem;
    text-align: center;
    min-width: 140px;
}

.node-content i {
    font-size: 1.5rem;
    color: #007bff;
    margin-bottom: 0.5rem;
    display: block;
}

.leader-node .node-content i {
    color: #dc3545;
}

.node-title {
    font-weight: 600;
    color: #495057;
    font-size: 0.9rem;
    margin-bottom: 0.25rem;
}

.node-subtitle {
    font-size: 0.8rem;
    color: #6c757d;
    font-weight: 500;
}

.departments-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

.department-item {
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 10px;
    border-left: 4px solid currentColor;
}

.department-title {
    margin-bottom: 0.75rem;
    font-weight: 600;
}

.department-item p {
    color: #6c757d;
    margin: 0;
    line-height: 1.5;
}

.contact-leader {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.leader-contact-item {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
}

.leader-contact-item small {
    color: #6c757d;
    font-size: 0.8rem;
}

.hero-icon-wrapper {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.list-group-item.active {
    background-color: #dc3545;
    border-color: #dc3545;
    color: white;
}

.list-group-item.active i {
    color: white !important;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .org-level {
        flex-direction: column;
        align-items: center;
    }

    .org-node {
        width: 100%;
        max-width: 250px;
    }

    .leader-card {
        flex-direction: column;
        text-align: center;
    }

    .leader-avatar {
        margin-right: 0;
        margin-bottom: 1rem;
    }
}
</style>