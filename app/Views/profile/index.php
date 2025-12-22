<!-- Page Header -->
<section class="page-hero-profile py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold text-white">Profil Sekolah</h1>
        <p class="lead text-white-50">Mengenal lebih dalam tentang visi, misi, dan perjalanan panjang MTS Darul Ulum Nglumber.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-12">
                <!-- Visi & Misi Section -->
                <div class="profile-card mb-5">
                    <div class="profile-card-header">
                        <i class="fas fa-bullseye"></i>
                        <h2 class="profile-card-title">Visi & Misi</h2>
                    </div>
                    <div class="profile-card-body">
                        <!-- Vision Section -->
                        <div class="mb-5">
                            <h4 class="text-center mb-4 text-success">Visi</h4>
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">"Terwujudnya peserta didik yang beriman, bertaqwa, berilmu pengetahuan dan teknologi, berakhlak mulia, cerdas, terampil, mandiri, berwawasan global, berpijak pada budaya bangsa"</p>
                            </blockquote>
                        </div>

                        <!-- Mission Section -->
                        <div class="mb-5">
                            <h4 class="text-center mb-4 text-success">Misi</h4>
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
                                    $icon = $missionIcons[$index] ?? "fas fa-check";
                                    ?>
                                    <li>
                                        <div class="mission-item-new">
                                            <div class="mission-icon-new"><i class="<?= $icon ?>"></i></div>
                                            <div class="mission-text-new">
                                                <p><strong>Misi <?= ($index + 1) ?>:</strong> <?= esc($mission) ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>

                        <!-- Goals Section -->
                        <div>
                            <h4 class="text-center mb-4 text-success">Tujuan</h4>
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
                                    $icon = $goalIcons[$index] ?? "fas fa-target";
                                    ?>
                                    <li>
                                        <div class="mission-item-new">
                                            <div class="mission-icon-new"><i class="<?= $icon ?>"></i></div>
                                            <div class="mission-text-new">
                                                <p><strong>Tujuan <?= ($index + 1) ?>:</strong> <?= esc($goal) ?></p>
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
            </div>
        </div>
    </div>
</section>