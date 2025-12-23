<!-- Page Header -->
<section class="page-hero-profile py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold text-white">Struktur Organisasi</h1>
        <p class="lead text-white-50">Susunan kepengurusan dan organisasi MTS Darul Ulum Nglumber.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Structure Content -->
            <div class="col-lg-8">
                <div class="profile-card">
                    <div class="profile-card-header">
                        <i class="fas fa-sitemap"></i>
                        <h2 class="profile-card-title">Bagan Organisasi</h2>
                    </div>
                    <div class="profile-card-body">
                        <p class="lead text-muted mb-5 text-center">
                            <?= esc($profile['struktur_organisasi'] ?? 'Struktur organisasi kami dirancang untuk memastikan pengelolaan yang efektif dan pelayanan pendidikan yang optimal. Setiap bagian memiliki peran penting dalam mencapai visi dan misi madrasah.') ?>
                        </p>
                        <div class="org-chart-new">
                            <!-- Level 1: Kepala Madrasah -->
                            <div class="org-level-new">
                                <div class="org-node-new org-node-leader">
                                    <i class="fas fa-user-tie"></i>
                                    <h5>Kepala Madrasah</h5>
                                    <span>Pimpinan Tertinggi</span>
                                </div>
                            </div>

                            <!-- Level 2: Wakil Kepala -->
                            <div class="org-level-new">
                                <div class="org-node-new">
                                    <i class="fas fa-graduation-cap"></i>
                                    <h5>Wakil Kepala</h5>
                                    <span>Bidang Kurikulum</span>
                                </div>
                                <div class="org-node-new">
                                    <i class="fas fa-users"></i>
                                    <h5>Wakil Kepala</h5>
                                    <span>Bidang Kesiswaan</span>
                                </div>
                                <div class="org-node-new">
                                    <i class="fas fa-cogs"></i>
                                    <h5>Wakil Kepala</h5>
                                    <span>Bidang Sarana & Prasarana</span>
                                </div>
                            </div>

                            <!-- Level 3: Koordinator & Kepala Program -->
                            <div class="org-level-new">
                                <div class="org-node-new">
                                    <i class="fas fa-book"></i>
                                    <h5>Koordinator</h5>
                                    <span>Bidang Akademik</span>
                                </div>
                                <div class="org-node-new">
                                    <i class="fas fa-mosque"></i>
                                    <h5>Koordinator</h5>
                                    <span>Bidang Keagamaan</span>
                                </div>
                                <div class="org-node-new">
                                    <i class="fas fa-palette"></i>
                                    <h5>Koordinator</h5>
                                    <span>Ekstrakurikuler</span>
                                </div>
                                <div class="org-node-new">
                                    <i class="fas fa-clipboard-list"></i>
                                    <h5>Kepala</h5>
                                    <span>TU & Kepegawaian</span>
                                </div>
                            </div>

                            <!-- Level 4: Guru Mata Pelajaran -->
                            <div class="org-level-new">
                                <div class="org-node-new org-node-staff">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                    <h5>Guru</h5>
                                    <span>Mata Pelajaran Umum</span>
                                </div>
                                <div class="org-node-new org-node-staff">
                                    <i class="fas fa-quran"></i>
                                    <h5>Guru</h5>
                                    <span>Mata Pelajaran Agama</span>
                                </div>
                                <div class="org-node-new org-node-staff">
                                    <i class="fas fa-language"></i>
                                    <h5>Guru</h5>
                                    <span>Bahasa Asing</span>
                                </div>
                            </div>

                            <!-- Level 5: Staff & Tenaga Kependidikan -->
                            <div class="org-level-new">
                                <div class="org-node-new org-node-staff">
                                    <i class="fas fa-user-friends"></i>
                                    <h5>Staff</h5>
                                    <span>Administrasi</span>
                                </div>
                                <div class="org-node-new org-node-staff">
                                    <i class="fas fa-tools"></i>
                                    <h5>Staff</h5>
                                    <span>Sarana & Prasarana</span>
                                </div>
                                <div class="org-node-new org-node-staff">
                                    <i class="fas fa-book-reader"></i>
                                    <h5>Pustakawan</h5>
                                    <span>Perpustakaan</span>
                                </div>
                                <div class="org-node-new org-node-staff">
                                    <i class="fas fa-laptop"></i>
                                    <h5>Operator</h5>
                                    <span>Lab. Komputer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="profile-sidebar">
                    <div class="sidebar-widget">
                        <h5 class="sidebar-title">Navigasi Profil</h5>
                        <div class="list-group profile-nav">
                            <a href="/profile" class="list-group-item list-group-item-action"><i class="fas fa-school"></i> Profil Sekolah</a>
                            <a href="/profile/identity" class="list-group-item list-group-item-action"><i class="fas fa-id-card"></i> Identitas</a>
                            <a href="/profile/vision" class="list-group-item list-group-item-action"><i class="fas fa-eye"></i> Visi & Misi</a>
                            <a href="/profile/history" class="list-group-item list-group-item-action"><i class="fas fa-history"></i> Sejarah</a>
                            <a href="/profile/structure" class="list-group-item list-group-item-action active"><i class="fas fa-sitemap"></i> Struktur</a>
                            <a href="/profile/facilities" class="list-group-item list-group-item-action"><i class="fas fa-building"></i> Fasilitas</a>
                            <a href="/teachers" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> Guru</a>
                        </div>
                    </div>
                     <div class="sidebar-widget">
                        <h5 class="sidebar-title">Hubungi Kami</h5>
                        <ul class="goals-list">
                            <li><i class="fas fa-phone"></i> +62 952 5893 2028</li>
                            <li><i class="fas fa-envelope"></i> mtsdunglumber@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>