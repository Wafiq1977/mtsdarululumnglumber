<div class="container my-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" style="color: #0F3D3E;">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/news" style="color: #0F3D3E;">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $news['title'] ?></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-8">
            <article class="card shadow-sm" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                <div class="card-body" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                    <header class="mb-4">
                        <h1 class="display-4 fw-bold" style="color: #0F3D3E;"><?= $news['title'] ?></h1>
                        <p class="text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>Diterbitkan pada <?= date('d F Y', strtotime($news['created_at'])) ?>
                        </p>
                    </header>

                    <?php if ($news['image']): ?>
                        <img src="<?= base_url('uploads/' . $news['image']) ?>" class="img-fluid mb-4 rounded" alt="<?= $news['title'] ?>" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <?php endif; ?>

                    <div class="content" style="color: #495057; line-height: 1.8;">
                        <?= $news['content'] ?>
                    </div>
                </div>
            </article>

            <div class="text-center mt-4">
                <a href="/news" class="btn" style="background: linear-gradient(135deg, #D4AF37, #f4c430); color: #0F3D3E; border: none;">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Berita
                </a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                <div class="card-header" style="background: linear-gradient(135deg, #D4AF37, #f4c430); color: #0F3D3E;">
                    <h5 class="mb-0"><i class="fas fa-newspaper me-2"></i>Berita Terbaru</h5>
                </div>
                <div class="card-body" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                    <?php if (!empty($latestNews)): ?>
                        <?php foreach ($latestNews as $item): ?>
                            <div class="mb-3 pb-3 border-bottom">
                                <h6><a href="/news/<?= $item['slug'] ?>" style="color: #0F3D3E; text-decoration: none;"><?= $item['title'] ?></a></h6>
                                <small class="text-muted">Diterbitkan: <?= date('d M Y', strtotime($item['created_at'])) ?></small>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted">Tidak ada berita lainnya.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Categories -->
            <div class="card shadow-sm" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                <div class="card-header" style="background: linear-gradient(135deg, #D4AF37, #f4c430); color: #0F3D3E;">
                    <h5 class="mb-0"><i class="fas fa-tags me-2"></i>Kategori</h5>
                </div>
                <div class="card-body" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                    <?php if (!empty($categories)): ?>
                        <?php foreach ($categories as $category): ?>
                            <a href="/news?category=<?= urlencode($category['name']) ?>" class="btn btn-sm me-2 mb-2" style="background: rgba(212, 175, 55, 0.1); color: #0F3D3E; border: 1px solid rgba(212, 175, 55, 0.3);">
                                <?= $category['name'] ?>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted">Tidak ada kategori.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>