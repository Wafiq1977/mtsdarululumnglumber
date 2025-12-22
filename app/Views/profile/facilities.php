<!-- Page Header -->
<section class="page-hero-profile py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold text-white">Fasilitas Sekolah</h1>
        <p class="lead text-white-50">Sarana dan prasarana pendukung pembelajaran di MTS Darul Ulum Nglumber.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Facilities Content -->
            <div class="col-lg-8">
                <div class="profile-card">
                     <div class="profile-card-header">
                        <i class="fas fa-building"></i>
                        <h2 class="profile-card-title">Sarana & Prasarana</h2>
                    </div>
                    <div class="profile-card-body">
                         <p class="lead text-muted mb-5">
                           <?= nl2br(esc($profile['fasilitas'] ?? 'MTS Darul Ulum Nglumber memiliki berbagai fasilitas pendukung pembelajaran yang lengkap dan modern untuk menunjang proses belajar mengajar yang efektif dan menyenangkan.')) ?>
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="facility-item-new">
                                    <div class="facility-icon-new"><i class="fas fa-chalkboard"></i></div>
                                    <div class="facility-text-new">
                                        <h5>Ruang Kelas Modern</h5>
                                        <p>15 ruang kelas yang nyaman dan dilengkapi proyektor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-item-new">
                                    <div class="facility-icon-new"><i class="fas fa-book-open"></i></div>
                                    <div class="facility-text-new">
                                        <h5>Perpustakaan Lengkap</h5>
                                        <p>Koleksi lebih dari 5000 buku dan area baca yang nyaman.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-item-new">
                                    <div class="facility-icon-new"><i class="fas fa-flask"></i></div>
                                    <div class="facility-text-new">
                                        <h5>Laboratorium IPA</h5>
                                        <p>Peralatan lengkap untuk praktikum sains yang interaktif.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-item-new">
                                    <div class="facility-icon-new"><i class="fas fa-laptop-code"></i></div>
                                    <div class="facility-text-new">
                                        <h5>Lab Komputer</h5>
                                        <p>25 unit komputer modern dengan akses internet cepat.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="facility-item-new">
                                    <div class="facility-icon-new"><i class="fas fa-futbol"></i></div>
                                    <div class="facility-text-new">
                                        <h5>Lapangan Olahraga</h5>
                                        <p>Lapangan multifungsi untuk basket, voli, dan futsal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-item-new">
                                    <div class="facility-icon-new"><i class="fas fa-mosque"></i></div>
                                    <div class="facility-text-new">
                                        <h5>Masjid Sekolah</h5>
                                        <p>Area ibadah yang luas dan nyaman untuk kegiatan keagamaan.</p>
                                    </div>
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
                            <a href="/profile/structure" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i> Struktur</a>
                            <a href="/profile/facilities" class="list-group-item list-group-item-action active"><i class="fas fa-building"></i> Fasilitas</a>
                            <a href="/teachers" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> Guru</a>
                        </div>
                    </div>
                     <div class="sidebar-widget">
                        <h5 class="sidebar-title">Galeri Fasilitas</h5>
                        <div class="text-center p-3 bg-light rounded">
                             <i class="fas fa-images fa-3x text-muted mb-3"></i>
                            <p class="text-muted small">Lihat lebih dekat fasilitas kami melalui galeri foto.</p>
                             <a href="/gallery" class="btn btn-sm btn-outline-primary">Lihat Galeri</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>