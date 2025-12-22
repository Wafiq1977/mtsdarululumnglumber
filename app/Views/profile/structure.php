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
                            <div class="org-level-new">
                                <div class="org-node-new org-node-leader">
                                    <img src="<?= base_url('uploads/kepalasekolah.jpg') ?>" alt="Kepala Sekolah" class="org-avatar">
                                    <h5>Drs. Ahmad Fauzi, M.Pd.I</h5>
                                    <span>Kepala Madrasah</span>
                                </div>
                            </div>
                            <div class="org-level-new">
                                <div class="org-node-new">
                                    <h5>Wakil Kepala</h5>
                                    <span>Bidang Kurikulum</span>
                                </div>
                                <div class="org-node-new">
                                    <h5>Wakil Kepala</h5>
                                    <span>Bidang Kesiswaan</span>
                                </div>
                                 <div class="org-node-new">
                                    <h5>Koordinator</h5>
                                    <span>Bidang Akademik</span>
                                </div>
                            </div>
                            <div class="org-level-new">
                               <div class="org-node-new org-node-staff">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                    <h5>Guru & Staff</h5>
                                    <span>20+ Pengajar Profesional</span>
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
                            <li><i class="fas fa-phone"></i> (0334) 1234567</li>
                            <li><i class="fas fa-envelope"></i> info@mtsdarululum.sch.id</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>