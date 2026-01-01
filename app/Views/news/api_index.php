<div class="container my-5">
    <!-- Page Title -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-success fw-bold">
                <i class="fas fa-newspaper me-2" style="color: #D4AF37;"></i>
                Berita dari API Nasional & Kemenag
            </h1>
        </div>
    </div>

    <!-- News Grid -->
    <div class="row">
        <?php foreach ($news as $item): ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                    <img src="<?= $item['image'] ?: base_url('assets/images/default-news.jpg') ?>" class="card-img-top" alt="<?= $item['title'] ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                        <h5 class="card-title" style="color: #0F3D3E;"><?= $item['title'] ?></h5>
                        <p class="card-text flex-grow-1" style="color: #495057;"><?= substr(strip_tags($item['content']), 0, 120) ?>...</p>
                        <div class="mt-auto">
                            <p class="text-muted small mb-2">Sumber: <?= $item['source'] ?> | <?= date('d M Y', strtotime($item['created_at'])) ?></p>
                            <?php if (isset($item['url'])): ?>
                                <a href="<?= $item['url'] ?>" target="_blank" class="btn btn-sm" style="background: linear-gradient(135deg, #D4AF37, #f4c430); color: #0F3D3E; border: none;">Baca Selengkapnya</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if (empty($news)): ?>
        <div class="text-center py-5">
            <div style="color: #0F3D3E;">
                <i class="fas fa-newspaper fa-3x mb-3" style="color: #D4AF37;"></i>
                <h4>Tidak ada berita ditemukan</h4>
                <p>Coba lagi nanti atau periksa koneksi API.</p>
            </div>
        </div>
    <?php endif; ?>
</div>
