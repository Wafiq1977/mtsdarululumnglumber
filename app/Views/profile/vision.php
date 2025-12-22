<!-- Page Header -->
<section class="page-hero bg-gradient-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-white-50">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="/profile" class="text-white-50">Profil</a></li>
                        <li class="breadcrumb-item active text-warning" aria-current="page">Visi & Misi</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-eye me-3 text-warning"></i>
                    Visi & Misi
                </h1>
                <p class="lead mb-4">
                    Arah dan tujuan pendidikan yang menjadi pedoman MTS Darul Ulum Nglumber
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="hero-icon-wrapper">
                    <i class="fas fa-bullseye fa-5x text-warning opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Vision & Mission Content -->
            <div class="col-lg-8 mb-4">
                <!-- Vision Section -->
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-eye me-2"></i>
                            Visi Sekolah
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="vision-content">
                            <div class="vision-quote">
                                <i class="fas fa-quote-left text-primary fa-2x mb-3"></i>
                                <h4 class="text-primary mb-3">"<?= esc($profile['visi'] ?? 'Mencetak Generasi Berakhlak, Berprestasi, dan Berwawasan Islam') ?>"</h4>
                                <i class="fas fa-quote-right text-primary fa-2x mt-3 float-end"></i>
                            </div>
                            <div class="vision-description mt-4">
                                <p class="lead">
                                    MTS Darul Ulum Nglumber berkomitmen untuk menjadi madrasah unggulan yang mampu mencetak generasi muda yang tidak hanya berprestasi akademik, tetapi juga memiliki akhlak mulia dan wawasan keislaman yang luas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission Section -->
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title mb-0">
                            <i class="fas fa-target me-2"></i>
                            Misi Sekolah
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="mission-list">
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
                                $number = $parts[0] ?? ($index + 1);
                                $title = $parts[1] ?? $mission;
                                $detail = $missionDetails[$index] ?? '';
                                ?>
                                <div class="mission-item">
                                    <div class="mission-number"><?= esc($number) ?></div>
                                    <div class="mission-content">
                                        <h5><?= esc($title) ?></h5>
                                        <p><?= esc($detail) ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
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
                            <a href="/profile/vision" class="list-group-item list-group-item-action active">
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

                <!-- Goals -->
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-star me-2"></i>
                            Tujuan Pendidikan
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-info me-2"></i>
                                <small>Menghasilkan lulusan yang berakhlak mulia</small>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-info me-2"></i>
                                <small>Mencapai prestasi akademik yang optimal</small>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-info me-2"></i>
                                <small>Mengembangkan potensi siswa secara holistik</small>
                            </li>
                            <li class="mb-0">
                                <i class="fas fa-check-circle text-info me-2"></i>
                                <small>Menjadi madrasah unggulan di wilayah</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.vision-content {
    text-align: center;
}

.vision-quote {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 15px;
    padding: 2rem;
    border-left: 5px solid #007bff;
    position: relative;
}

.mission-list {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.mission-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 12px;
    border-left: 4px solid #28a745;
    transition: all 0.3s ease;
}

.mission-item:hover {
    background: #e9ecef;
    transform: translateX(5px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.mission-number {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.mission-content h5 {
    color: #495057;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.mission-content p {
    color: #6c757d;
    margin: 0;
    line-height: 1.5;
}

.hero-icon-wrapper {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.list-group-item.active {
    background-color: #17a2b8;
    border-color: #17a2b8;
    color: white;
}

.list-group-item.active i {
    color: white !important;
}
</style>