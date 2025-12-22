<!-- Page Header -->
<section class="page-hero-profile py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold text-white">Sejarah Sekolah</h1>
        <p class="lead text-white-50">Perjalanan panjang MTS Darul Ulum Nglumber dari masa ke masa.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- History Content -->
            <div class="col-lg-8">
                <div class="profile-card">
                    <div class="profile-card-header">
                        <i class="fas fa-history"></i>
                        <h2 class="profile-card-title">Jejak Langkah Kami</h2>
                    </div>
                    <div class="profile-card-body">
                        <p class="lead text-muted mb-5">
                            <?= nl2br(esc($profile['sejarah'] ?? 'MTS Darul Ulum Nglumber didirikan pada tahun 2010 sebagai respon terhadap kebutuhan pendidikan Islam yang berkualitas di wilayah Nglumber dan sekitarnya. Sejak awal, kami berkomitmen untuk terus tumbuh dan berkembang menjadi lembaga pendidikan yang unggul.')) ?>
                        </p>

                        <div class="timeline-new">
                            <div class="timeline-item-new">
                                <div class="timeline-marker-new"></div>
                                <div class="timeline-content-new">
                                    <span class="timeline-year-new">2012</span>
                                    <h5>Pembangunan Awal & Akreditasi Pertama</h5>
                                    <p>Gedung baru dengan 6 ruang kelas, perpustakaan, dan lab IPA dibangun. Madrasah berhasil mendapatkan akreditasi B dari BAN-S/M.</p>
                                </div>
                            </div>
                             <div class="timeline-item-new">
                                <div class="timeline-marker-new"></div>
                                <div class="timeline-content-new">
                                    <span class="timeline-year-new">2018</span>
                                    <h5>Pengembangan Program Unggulan</h5>
                                    <p>Program tahfidz Al-Quran dan berbagai ekstrakurikuler olahraga diluncurkan untuk mengembangkan potensi siswa secara holistik.</p>
                                </div>
                            </div>
                            <div class="timeline-item-new">
                                <div class="timeline-marker-new"></div>
                                <div class="timeline-content-new">
                                    <span class="timeline-year-new">2020</span>
                                    <h5>Transformasi Digital</h5>
                                    <p>Mengadopsi pembelajaran berbasis teknologi dengan fasilitas komputer dan internet di semua kelas untuk menjawab tantangan zaman.</p>
                                </div>
                            </div>
                            <div class="timeline-item-new">
                                <div class="timeline-marker-new"></div>
                                <div class="timeline-content-new">
                                    <span class="timeline-year-new">2023</span>
                                    <h5>Pencapaian Puncak: Akreditasi A</h5>
                                    <p>Berhasil meraih akreditasi A dan diakui sebagai salah satu madrasah unggulan di Kabupaten Lumajang, sebuah bukti komitmen kami terhadap kualitas.</p>
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
                            <a href="/profile/history" class="list-group-item list-group-item-action active"><i class="fas fa-history"></i> Sejarah</a>
                            <a href="/profile/structure" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i> Struktur</a>
                            <a href="/profile/facilities" class="list-group-item list-group-item-action"><i class="fas fa-building"></i> Fasilitas</a>
                            <a href="/teachers" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> Guru</a>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h5 class="sidebar-title">Galeri Sejarah</h5>
                        <div class="text-center p-3 bg-light rounded">
                             <i class="fas fa-camera-retro fa-3x text-muted mb-3"></i>
                            <p class="text-muted small">Galeri foto sejarah akan segera kami hadirkan untuk Anda.</p>
                             <a href="/gallery" class="btn btn-sm btn-outline-primary">Lihat Galeri</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>