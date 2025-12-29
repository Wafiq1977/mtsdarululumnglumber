<!-- Hero Section -->
<section class="page-hero bg-gradient-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3"><?= $gallery['title'] ?></h1>
                <p class="lead fs-5 mb-4">
                    <?= $gallery['description'] ?: 'Koleksi foto kegiatan dan momen berharga di Sekolah Kami' ?>
                </p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="/gallery" class="text-white text-decoration-none">Galeri</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page"><?= $gallery['title'] ?></li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-4 text-center">
                <?php
                $images = json_decode($gallery['images'], true);
                if (!empty($images)):
                ?>
                    <img src="<?= base_url('uploads/' . $images[0]) ?>"
                         alt="<?= $gallery['title'] ?>" class="img-fluid rounded-3 shadow-lg">
                <?php else: ?>
                    <div class="bg-light rounded-3 d-flex align-items-center justify-content-center" style="height: 250px;">
                        <i class="fas fa-images fa-4x text-muted"></i>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <!-- Gallery Meta -->
            <div class="gallery-meta mb-4 p-3 bg-light rounded-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-calendar text-primary me-2"></i>
                            <span>Diterbitkan: <?= date('d F Y', strtotime($gallery['created_at'])) ?></span>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <i class="fas fa-images text-success me-2"></i>
                            <span>
                                <?php
                                $images = json_decode($gallery['images'], true);
                                echo count($images ?? []) . ' foto';
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Images Grid -->
            <?php if (!empty($images)): ?>
                <div class="gallery-grid">
                    <div class="row g-3">
                        <?php foreach ($images as $index => $image): ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="<?= base_url('uploads/' . $image) ?>" data-title="<?= $gallery['title'] ?>">
                                    <div class="image-container">
                                        <img src="<?= base_url('uploads/' . $image) ?>"
                                             alt="Gallery image <?= $index + 1 ?>"
                                             class="gallery-image img-fluid rounded-3">
                                        <div class="image-overlay">
                                            <i class="fas fa-search-plus fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="text-center py-5">
                    <div class="empty-gallery-state">
                        <i class="fas fa-images fa-5x text-muted mb-4"></i>
                        <h4 class="text-muted mb-3">Belum ada foto</h4>
                        <p class="text-muted">Galeri ini sedang dalam proses pengisian foto</p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Navigation -->
            <div class="gallery-navigation mt-5 pt-4 border-top">
                <div class="row">
                    <div class="col-md-6">
                        <a href="/gallery" class="btn btn-outline-primary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali ke Galeri
                        </a>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="share-buttons">
                            <span class="me-2 text-muted">Bagikan:</span>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-info me-1" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-danger" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Galeri Foto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-0">
                <img id="modalImage" src="" alt="Gallery Image" class="img-fluid w-100">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a id="downloadBtn" href="#" class="btn btn-primary" download>
                    <i class="fas fa-download me-2"></i>Download
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.page-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
}

.gallery-meta {
    border-left: 4px solid var(--primary-color);
}

.gallery-grid {
    margin-bottom: 2rem;
}

.gallery-item {
    cursor: pointer;
    transition: transform 0.3s ease;
}

.gallery-item:hover {
    transform: scale(1.02);
}

.image-container {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.gallery-image {
    width: 100%;
    height: 200px;
    object-fit: contain;
    background-color: #f8f9fa;
    transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-image {
    transform: scale(1.1);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    color: white;
}

.gallery-item:hover .image-overlay {
    opacity: 1;
}

.empty-gallery-state {
    background: white;
    border-radius: 15px;
    padding: 60px 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.share-buttons .btn {
    width: 35px;
    height: 35px;
    padding: 0;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

@media (max-width: 768px) {
    .gallery-meta .row > div {
        margin-bottom: 10px;
    }

    .gallery-navigation .row > div {
        text-align: center !important;
        margin-bottom: 15px;
    }

    .share-buttons {
        justify-content: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
    const modalImage = document.getElementById('modalImage');
    const downloadBtn = document.getElementById('downloadBtn');

    // Handle gallery item clicks
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', function() {
            const imageSrc = this.dataset.image;
            const title = this.dataset.title;

            modalImage.src = imageSrc;
            downloadBtn.href = imageSrc;
            document.getElementById('imageModalLabel').textContent = title;

            imageModal.show();
        });
    });

    // Keyboard navigation for modal
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && imageModal._isShown) {
            imageModal.hide();
        }
    });
});
</script>