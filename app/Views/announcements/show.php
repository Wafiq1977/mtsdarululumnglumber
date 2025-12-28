<div class="container my-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" style="color: #0F3D3E;">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/announcements" style="color: #0F3D3E;">Pengumuman</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $announcement['title'] ?></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-12">
            <article class="card shadow-sm" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                <div class="card-body" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                    <header class="mb-4">
                        <h1 class="display-4 fw-bold" style="color: #0F3D3E;"><?= $announcement['title'] ?></h1>
                        <p class="text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>Diterbitkan pada <?= date('d F Y', strtotime($announcement['created_at'])) ?>
                        </p>
                    </header>

                    <div class="content" style="color: #495057; line-height: 1.8; font-size: 1.1rem;">
                        <?= $announcement['content'] ?>
                    </div>
                </div>
            </article>

            <div class="text-center mt-4">
                <a href="/announcements" class="btn" style="background: linear-gradient(135deg, #D4AF37, #f4c430); color: #0F3D3E; border: none;">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Pengumuman
                </a>
            </div>
        </div>
    </div>
</div>