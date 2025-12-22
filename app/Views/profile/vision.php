<!-- Page Header -->
<section class="page-hero-profile py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold text-white">Visi & Misi</h1>
        <p class="lead text-white-50">Arah dan tujuan pendidikan yang menjadi pedoman MTS Darul Ulum Nglumber.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Vision & Mission Content -->
            <div class="col-lg-8">
                <!-- Vision Card -->
                <div class="profile-card vision-card mb-5">
                    <div class="profile-card-header">
                        <i class="fas fa-eye"></i>
                        <h2 class="profile-card-title">Visi Kami</h2>
                    </div>
                    <div class="profile-card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">"<?= esc($profile['visi'] ?? 'Mencetak Generasi Berakhlak, Berprestasi, dan Berwawasan Islam') ?>"</p>
                        </blockquote>
                        <p class="mt-3 text-muted">
                            MTS Darul Ulum Nglumber berkomitmen untuk menjadi madrasah unggulan yang mampu mencetak generasi muda yang tidak hanya berprestasi akademik, tetapi juga memiliki akhlak mulia dan wawasan keislaman yang luas.
                        </p>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="profile-card mission-card">
                    <div class="profile-card-header">
                        <i class="fas fa-rocket"></i>
                        <h2 class="profile-card-title">Misi Kami</h2>
                    </div>
                    <div class="profile-card-body">
                        <ul class="mission-list-new">
                            <?php
                            $missions = explode("\n", $profile['misi'] ?? "1. Menyelenggarakan pendidikan yang berkualitas\n2. Mengembangkan karakter dan akhlak mulia\n3. Meningkatkan kompetensi akademik\n4. Mengembangkan bakat dan minat siswa\n5. Membangun kerjasama dengan stakeholders");
                            $missionDetails = [
                                "Menyediakan program pendidikan yang komprehensif dengan kurikulum yang terintegrasi antara ilmu pengetahuan umum dan ajaran Islam.",
                                "Membentuk peserta didik yang memiliki akhlak terpuji, disiplin, jujur, dan bertanggung jawab sesuai dengan ajaran Islam.",
                                "Mendorong prestasi akademik yang optimal melalui pembelajaran aktif, inovatif, dan berbasis teknologi.",
                                "Menyediakan berbagai kegiatan ekstrakurikuler dan pengembangan bakat sesuai dengan potensi masing-masing siswa.",
                                "Menjalin kemitraan yang baik dengan orang tua, masyarakat, dan lembaga terkait untuk mendukung pendidikan yang berkualitas."
                            ];
                            foreach ($missions as $index => $mission) {
                                $mission = trim($mission);
                                if (empty($mission)) continue;
                                $parts = explode('. ', $mission, 2);
                                $title = $parts[1] ?? $mission;
                                $detail = $missionDetails[$index] ?? '';
                                ?>
                                <li>
                                    <div class="mission-item-new">
                                        <div class="mission-icon-new"><i class="fas fa-check"></i></div>
                                        <div class="mission-text-new">
                                            <h5><?= esc($title) ?></h5>
                                            <p><?= esc($detail) ?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
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
                            <a href="/profile/vision" class="list-group-item list-group-item-action active"><i class="fas fa-eye"></i> Visi & Misi</a>
                            <a href="/profile/history" class="list-group-item list-group-item-action"><i class="fas fa-history"></i> Sejarah</a>
                            <a href="/profile/structure" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i> Struktur</a>
                            <a href="/profile/facilities" class="list-group-item list-group-item-action"><i class="fas fa-building"></i> Fasilitas</a>
                            <a href="/teachers" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> Guru</a>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h5 class="sidebar-title">Tujuan Kami</h5>
                        <ul class="goals-list">
                            <li><i class="fas fa-star"></i> Lulusan Berakhlak Mulia</li>
                            <li><i class="fas fa-star"></i> Prestasi Akademik Optimal</li>
                            <li><i class="fas fa-star"></i> Potensi Siswa Holistik</li>
                            <li><i class="fas fa-star"></i> Madrasah Unggulan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>