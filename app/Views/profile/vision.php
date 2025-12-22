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
                            <p class="mb-0">"Terwujudnya peserta didik yang beriman, bertaqwa, berilmu pengetahuan dan teknologi, berakhlak mulia, cerdas, terampil, mandiri, berwawasan global, berpijak pada budaya bangsa"</p>
                        </blockquote>
                        <p class="mt-3 text-muted">
                            MTS Darul Ulum Nglumber berkomitmen untuk mencetak generasi muda yang beriman, bertaqwa kepada Allah SWT, menguasai ilmu pengetahuan dan teknologi, serta memiliki akhlak mulia, kecerdasan, keterampilan, kemandirian, wawasan global, dan tetap berpijak pada budaya bangsa.
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
                            $missions = [
                                "Menumbuh kembangkan lingkungan dan perilaku religius dengan mengamalkan dan menghayati nilai-nilai Ajaran Agama Islam yang berlandaskan faham Ahlusunnah waljamaah.",
                                "Melaksanakan pembelajaran secara aktif, inovatif, kreatif, efektif, menarik dan Islami menuju tercapainya prestasi akademik dan non akademik secara optimal",
                                "Mendorong dan memfasilitasi peserta didik untuk mengembangkan kemampuan, bakat, dan minatnya melalui kegiatan ekstrakurikuler menuju peningkatan life skill yang efektif",
                                "Menumbuhkan semangat keunggulan secara intensif dan berdaya saing melalui Penyelenggaraan pendidikan kelas unggulan yang bekerjasama secara intensif dengan semua stikholder",
                                "Membudayakan dan mengembangakan perilaku terpuji, berakhlakul karimah dan bersedia menjadi teladan bagi teman dan masyarakat.",
                                "Membiasakan berbahasa jawa krama inggil setiap hari Jum'at",
                                "Mewujudkan lingkungan Madrasah yang aman, nyaman bersih, sehat, indah dan Islami.",
                                "Menjalin kerjasama yang harmonis antara warga madrasah, orang tua siswa dan semua stakeholders madrasah lainnya melalui berbagai kegiatan positif.",
                                "Menerapkan model kompensasi (bukan hukuman) yang mengarah pada kecerdasan dan skill menuju prestasi belajar dalam menindak lanjuti pelanggaran terhadap tata tertib dalam kegiatan madrasah",
                                "Membiasakan disiplin, do'a bersama sebelum dan sesudah belajar, Sholat dluha, Sholat dhuhur, tahlil. istighotsah dan sholawat Nabi."
                            ];

                            $missionIcons = [
                                "fas fa-mosque",
                                "fas fa-graduation-cap",
                                "fas fa-users",
                                "fas fa-trophy",
                                "fas fa-heart",
                                "fas fa-language",
                                "fas fa-home",
                                "fas fa-handshake",
                                "fas fa-brain",
                                "fas fa-pray"
                            ];

                            foreach ($missions as $index => $mission) {
                                $mission = trim($mission);
                                if (empty($mission)) continue;
                                $title = "Misi " . ($index + 1);
                                $detail = $mission;
                                $icon = $missionIcons[$index] ?? "fas fa-check";
                                ?>
                                <li>
                                    <div class="mission-item-new">
                                        <div class="mission-icon-new"><i class="<?= $icon ?>"></i></div>
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

                <!-- Goals Card -->
                <div class="profile-card goals-card mt-5">
                    <div class="profile-card-header">
                        <i class="fas fa-bullseye"></i>
                        <h2 class="profile-card-title">Tujuan Kami</h2>
                    </div>
                    <div class="profile-card-body">
                        <ul class="mission-list-new">
                            <?php
                            $goals = [
                                "Terwujudnya budaya madrasah yang religius dan berakhlakul karimah melalui kegiatan keagamaan yang berlandaskan faham ahlusunnah wal jama'ah.",
                                "Meningkatnya kedisiplinan dan kepatuhan terhadap aturan, tata tertip untuk semua warga madrasah sesuai dengan standar dan ketentuan yang berlaku.",
                                "Terciptanya kerjasama yang harmonis antara sesama warga madrasah, orang tua siswa, masyarakat, dan semua stakeholders madrasah secara efektif",
                                "Terlaksananya pengembangan kurikulum secara bertahap, melalui proses kegiatan belajar mengajar (KBM) secara optimal yang berorientasi pada penerapan CTL dan pendekatan saintifik.",
                                "Tercapainya Prestasi nilai akademis dan non akdemis siswa yang meningkat dari tahun ke tahun.",
                                "Siswa dapat berkomunikasi dengan bahasa inggris dan Arab baik secara aktif maupun pasif sesuai dengan tingkat perkembangan anak",
                                "Siswa dapat Menunjukkan kemampuan belajar secara mandiri, berfikir logis, kritis, kreatif dan inovatif",
                                "Terlaksananya kegiatan pembinaan dan pengembangan minat dan bakat siswa melalui kegiatan ekstrakurikuler secara efektif",
                                "Meningkatnya profesionalitas tenaga pendidik dan kependidikan dengan berbagai kegiatan positif yang sesuai dengan tugas pokok dan fungsinya (TUPOKSI)",
                                "Menerapkan nilai-nilai kebersamaan dalam kehidupan bermasyarakat, berbangsa dan bernegara demi terwujudnya persatuan dan kesatuan negara Republik Indonesia"
                            ];

                            $goalIcons = [
                                "fas fa-pray",
                                "fas fa-gavel",
                                "fas fa-users-cog",
                                "fas fa-book-open",
                                "fas fa-chart-line",
                                "fas fa-globe",
                                "fas fa-lightbulb",
                                "fas fa-palette",
                                "fas fa-user-graduate",
                                "fas fa-flag"
                            ];

                            foreach ($goals as $index => $goal) {
                                $goal = trim($goal);
                                if (empty($goal)) continue;
                                $title = "Tujuan " . ($index + 1);
                                $detail = $goal;
                                $icon = $goalIcons[$index] ?? "fas fa-target";
                                ?>
                                <li>
                                    <div class="mission-item-new">
                                        <div class="mission-icon-new"><i class="<?= $icon ?>"></i></div>
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
                </div>
            </div>
        </div>
    </div>
</section>