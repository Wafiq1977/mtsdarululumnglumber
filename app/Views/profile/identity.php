<!-- Page Header -->
<section class="page-hero-profile py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold text-white">Identitas Sekolah</h1>
        <p class="lead text-white-50">Informasi lengkap tentang identitas dan data pokok MTS Darul Ulum Nglumber.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Identity Content -->
            <div class="col-lg-8">
                <div class="profile-card">
                    <div class="profile-card-header">
                        <i class="fas fa-id-card"></i>
                        <h2 class="profile-card-title">Data Pokok Sekolah</h2>
                    </div>
                    <div class="profile-card-body">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="identity-item-new">
                                    <div class="identity-label-new">Nama Sekolah</div>
                                    <div class="identity-value-new"><?= esc($identity['nama_sekolah'] ?? 'MTS Darul Ulum Nglumber') ?></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item-new">
                                    <div class="identity-label-new">NPSN</div>
                                    <div class="identity-value-new"><?= esc($identity['npsn'] ?? '20512345') ?></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item-new">
                                    <div class="identity-label-new">Jenjang</div>
                                    <div class="identity-value-new"><?= esc($identity['jenjang'] ?? 'Madrasah Tsanawiyah (MTs)') ?></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item-new">
                                    <div class="identity-label-new">Status Akreditasi</div>
                                    <div class="identity-value-new fw-bold text-success"><?= esc($identity['status_akreditasi'] ?? 'Terakreditasi A') ?></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="identity-item-new">
                                    <div class="identity-label-new">Alamat</div>
                                    <div class="identity-value-new"><?= nl2br(esc($identity['alamat'] ?? 'Jl. Raya Nglumber, Desa Nglumber, Kec. Nglumber, Kab. Lumajang, Jawa Timur 67392')) ?></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item-new">
                                    <div class="identity-label-new">Telepon</div>
                                    <div class="identity-value-new"><a href="tel:<?= esc(str_replace(['(', ')', ' ', '-'], '', $identity['telepon'] ?? '(0334) 1234567')) ?>"><?= esc($identity['telepon'] ?? '(0334) 1234567') ?></a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item-new">
                                    <div class="identity-label-new">Email</div>
                                    <div class="identity-value-new"><a href="mailto:<?= esc($identity['email'] ?? 'info@mtsdarululum.sch.id') ?>"><?= esc($identity['email'] ?? 'info@mtsdarululum.sch.id') ?></a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item-new">
                                    <div class="identity-label-new">Tahun Berdiri</div>
                                    <div class="identity-value-new"><?= esc($identity['tahun_berdiri'] ?? '2010') ?></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="identity-item-new">
                                    <div class="identity-label-new">Lembaga Pengelola</div>
                                    <div class="identity-value-new"><?= esc($identity['lembaga_pengelola'] ?? 'LPM MAARIF NAHDLATUL ULAMA') ?></div>
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
                            <a href="/profile/identity" class="list-group-item list-group-item-action active"><i class="fas fa-id-card"></i> Identitas</a>
                            <a href="/profile/vision" class="list-group-item list-group-item-action"><i class="fas fa-eye"></i> Visi & Misi</a>
                            <a href="/profile/history" class="list-group-item list-group-item-action"><i class="fas fa-history"></i> Sejarah</a>
                            <a href="/profile/structure" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i> Struktur</a>
                            <a href="/profile/facilities" class="list-group-item list-group-item-action"><i class="fas fa-building"></i> Fasilitas</a>
                            <a href="/teachers" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> Guru</a>
                        </div>
                    </div>
                     <div class="sidebar-widget">
                        <h5 class="sidebar-title">Hubungi Kami</h5>
                        <ul class="goals-list">
                            <li><i class="fas fa-phone"></i> <?= esc($identity['telepon'] ?? '(0334) 1234567') ?></li>
                            <li><i class="fas fa-envelope"></i> <?= esc($identity['email'] ?? 'info@mtsdarululum.sch.id') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>