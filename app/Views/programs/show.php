<!-- Program Detail Page -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/programs" class="text-decoration-none">Program Unggulan</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $program['title'] ?></li>
            </ol>
        </nav>

        <div class="row align-items-center mb-5">
            <div class="col-lg-8">
                <div class="program-header">
                    <div class="program-icon-large mb-4">
                        <i class="<?= $program['icon'] ?> fa-4x" style="color: <?= $program['color'] ?>;"></i>
                    </div>
                    <h1 class="display-5 fw-bold text-success mb-3"><?= $program['title'] ?></h1>
                    <p class="lead text-muted mb-4"><?= $program['short_desc'] ?></p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="program-visual">
                    <div class="program-image-placeholder">
                        <i class="<?= $program['icon'] ?> fa-5x" style="color: rgba(<?= $program['color'] ?>, 0.3);"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="program-content">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h3 class="card-title text-success mb-4">
                                <i class="fas fa-info-circle me-2"></i>Tentang Program
                            </h3>
                            <p class="card-text fs-5 lh-base text-muted"><?= $program['description'] ?></p>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title text-success mb-4">
                                <i class="fas fa-list-check me-2"></i>Fitur Program
                            </h3>
                            <div class="row">
                                <?php foreach ($program['features'] as $feature): ?>
                                    <div class="col-md-6 mb-3">
                                        <div class="feature-item d-flex align-items-center">
                                            <i class="fas fa-check-circle text-success me-3" style="color: <?= $program['color'] ?> !important;"></i>
                                            <span class="fw-medium"><?= $feature ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="program-sidebar">
                    <!-- Quick Actions -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body p-4 text-center">
                            <h5 class="card-title text-success mb-3">
                                <i class="fas fa-rocket me-2"></i>Aksi Cepat
                            </h5>
                            <a href="/contact" class="btn btn-success w-100 mb-3">
                                <i class="fas fa-envelope me-2"></i>Daftar Program
                            </a>
                            <a href="/gallery" class="btn btn-outline-success w-100">
                                <i class="fas fa-images me-2"></i>Lihat Galeri
                            </a>
                        </div>
                    </div>

                    <!-- Other Programs -->
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="card-title text-success mb-3">
                                <i class="fas fa-th-large me-2"></i>Program Lainnya
                            </h5>
                            <div class="other-programs">
                                <a href="/programs/kurikulum-islam" class="other-program-link d-block mb-2">
                                    <i class="fas fa-quran me-2 text-warning"></i>Kurikulum Islam
                                </a>
                                <a href="/programs/ekstrakurikuler" class="other-program-link d-block mb-2">
                                    <i class="fas fa-users me-2 text-success"></i>Ekstrakurikuler
                                </a>
                                <a href="/programs/teknologi-digital" class="other-program-link d-block">
                                    <i class="fas fa-laptop me-2 text-primary"></i>Teknologi Digital
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.breadcrumb {
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 1rem;
    backdrop-filter: blur(10px);
}

.program-header {
    animation: fadeInUp 0.8s ease-out;
}

.program-icon-large {
    animation: bounceIn 1s ease-out;
}

.program-visual {
    animation: fadeInRight 1s ease-out;
}

.program-image-placeholder {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(15, 61, 62, 0.1));
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    border: 3px solid rgba(212, 175, 55, 0.2);
    animation: pulse 3s ease-in-out infinite;
}

.program-content .card {
    border: 2px solid rgba(212, 175, 55, 0.2);
    border-radius: 15px;
    transition: all 0.3s ease;
}

.program-content .card:hover {
    border-color: rgba(212, 175, 55, 0.4);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.feature-item {
    padding: 0.5rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.feature-item:hover {
    background: rgba(40, 167, 69, 0.1);
    transform: translateX(5px);
}

.program-sidebar .card {
    border: 2px solid rgba(212, 175, 55, 0.2);
    border-radius: 15px;
}

.btn-success {
    background: linear-gradient(135deg, #28a745, #20c997);
    border: none;
    transition: all 0.3s ease;
}

.btn-success:hover {
    background: linear-gradient(135deg, #218838, #1aa085);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
}

.other-program-link {
    color: #6c757d;
    text-decoration: none;
    padding: 0.5rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.other-program-link:hover {
    color: #0F3D3E;
    background: rgba(212, 175, 55, 0.1);
    text-decoration: none;
    transform: translateX(5px);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes bounceIn {
    0% {
        opacity: 0;
        transform: scale(0.3);
    }
    50% {
        opacity: 1;
        transform: scale(1.05);
    }
    70% {
        transform: scale(0.9);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
        opacity: 0.8;
    }
    50% {
        transform: scale(1.05);
        opacity: 1;
    }
}
</style>