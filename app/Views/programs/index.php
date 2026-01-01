<!-- Programs Page -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-success">
                <i class="fas fa-star me-2" style="color: #D4AF37;"></i>Program Unggulan
            </h1>
            <p class="lead" style="color: #0F3D3E;">Program-program unggulan yang kami tawarkan untuk pengembangan siswa secara holistik</p>
        </div>

        <div class="row g-4">
            <?php foreach ($programs as $program): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm program-card-modern" onclick="window.location.href='/programs/<?= $program['slug'] ?>'" style="cursor: pointer;">
                        <div class="card-body text-center p-4">
                            <div class="program-icon-wrapper mb-4">
                                <i class="<?= $program['icon'] ?> fa-3x" style="color: <?= $program['color'] ?>;"></i>
                            </div>
                            <h5 class="card-title text-success fw-bold mb-3"><?= $program['title'] ?></h5>
                            <p class="card-text text-muted mb-4"><?= $program['short_desc'] ?></p>
                            <div class="btn btn-outline-success">
                                <i class="fas fa-arrow-right me-2"></i>Lihat Detail
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.program-card-modern {
    border: 2px solid rgba(212, 175, 55, 0.2);
    border-radius: 20px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(248, 249, 250, 0.8));
    backdrop-filter: blur(10px);
}

.program-card-modern:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border-color: rgba(212, 175, 55, 0.4);
}

.program-icon-wrapper {
    position: relative;
    margin-bottom: 1.5rem;
}

.program-icon-wrapper::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
    z-index: -1;
}

.btn-outline-success {
    border-color: #28a745;
    color: #28a745;
    transition: all 0.3s ease;
}

.btn-outline-success:hover {
    background-color: #28a745;
    border-color: #28a745;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
}
</style>