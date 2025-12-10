<!-- Hero Section -->
<section class="page-hero bg-gradient-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Galeri Sekolah</h1>
                <p class="lead fs-5 mb-4">
                    Koleksi foto kegiatan, fasilitas, dan momen berharga di Sekolah Kami.
                    Saksikan berbagai aktivitas dan pencapaian siswa dalam galeri ini.
                </p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Galeri</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-4 text-center">
                <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                     alt="Galeri Sekolah" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<div class="container py-5">
    <!-- Search & Filter -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="gallery-controls bg-light p-4 rounded-3">
                <div class="row g-3 align-items-end">
                    <!-- Search -->
                    <div class="col-lg-6">
                        <label for="search" class="form-label fw-semibold">
                            <i class="fas fa-search me-2"></i>Cari Galeri
                        </label>
                        <form method="GET" class="d-flex">
                            <input type="text" class="form-control me-2" id="search" name="search"
                                   placeholder="Cari berdasarkan judul atau deskripsi..."
                                   value="<?= esc($searchQuery ?? '') ?>">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Category Filter -->
                    <div class="col-lg-4">
                        <label for="category" class="form-label fw-semibold">
                            <i class="fas fa-filter me-2"></i>Kategori
                        </label>
                        <form method="GET">
                            <select class="form-select" id="category" name="category" onchange="this.form.submit()">
                                <option value="">Semua Kategori</option>
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?= $cat['id'] ?>" <?= ($selectedCategory == $cat['id']) ? 'selected' : '' ?>>
                                        <?= $cat['name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </form>
                    </div>

                    <!-- Stats -->
                    <div class="col-lg-2">
                        <div class="stats-card text-center p-3 bg-white rounded-3">
                            <div class="stats-number display-6 fw-bold text-primary">
                                <?= count($galleries) ?>
                            </div>
                            <div class="stats-label small text-muted">Galeri</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Grid -->
    <?php if (!empty($galleries)): ?>
        <div class="row g-4">
            <?php foreach ($galleries as $gallery): ?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-card h-100">
                        <!-- Gallery Images Preview -->
                        <div class="gallery-images">
                            <?php
                            $images = json_decode($gallery['images'], true);
                            if (!empty($images) && is_array($images)):
                                $previewImages = array_slice($images, 0, 4);
                            ?>
                                <div class="images-grid">
                                    <?php foreach ($previewImages as $index => $image): ?>
                                        <div class="image-item image-<?= $index + 1 ?>">
                                            <img src="<?= base_url('uploads/' . $image) ?>"
                                                 alt="Gallery image"
                                                 class="gallery-img">
                                            <?php if ($index === 3 && count($images) > 4): ?>
                                                <div class="image-overlay">
                                                    <span class="overlay-text">+<?= count($images) - 4 ?> lagi</span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <div class="no-images-placeholder">
                                    <i class="fas fa-images fa-3x text-muted mb-2"></i>
                                    <p class="text-muted small mb-0">Belum ada foto</p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Gallery Info -->
                        <div class="gallery-info p-3">
                            <h5 class="gallery-title mb-2">
                                <a href="/gallery/<?= $gallery['id'] ?>" class="text-decoration-none text-dark">
                                    <?= $gallery['title'] ?>
                                </a>
                            </h5>

                            <?php if ($gallery['description']): ?>
                                <p class="gallery-description text-muted small mb-2">
                                    <?= substr($gallery['description'], 0, 80) ?>...
                                </p>
                            <?php endif; ?>

                            <div class="gallery-meta d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="fas fa-calendar me-1"></i>
                                    <?= date('d M Y', strtotime($gallery['created_at'])) ?>
                                </small>

                                <?php if (!empty($images)): ?>
                                    <small class="text-muted">
                                        <i class="fas fa-images me-1"></i>
                                        <?= count($images) ?> foto
                                    </small>
                                <?php endif; ?>
                            </div>

                            <!-- Category Badge -->
                            <?php
                            $categoryName = 'Umum';
                            foreach ($categories as $cat) {
                                if ($cat['id'] == $gallery['category_id']) {
                                    $categoryName = $cat['name'];
                                    break;
                                }
                            }
                            ?>
                            <span class="badge bg-primary mt-2">
                                <i class="fas fa-tag me-1"></i><?= $categoryName ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Load More (if needed for pagination) -->
        <div class="text-center mt-5">
            <p class="text-muted">Menampilkan <?= count($galleries) ?> galeri</p>
        </div>

    <?php else: ?>
        <!-- Empty State -->
        <div class="empty-gallery text-center py-5">
            <div class="empty-icon mb-4">
                <i class="fas fa-images fa-5x text-muted"></i>
            </div>
            <h3 class="text-muted mb-3">Belum ada galeri</h3>
            <p class="text-muted mb-4">
                <?php if ($selectedCategory || $searchQuery): ?>
                    Tidak ada galeri yang sesuai dengan filter yang dipilih.
                    <br><a href="/gallery" class="text-primary">Tampilkan semua galeri</a>
                <?php else: ?>
                    Galeri foto akan segera ditambahkan oleh administrator.
                <?php endif; ?>
            </p>

            <?php if ($selectedCategory || $searchQuery): ?>
                <div class="active-filters mb-3">
                    <?php if ($selectedCategory): ?>
                        <span class="badge bg-primary me-2">
                            Kategori: <?= $categoryName ?? 'Pilih' ?>
                            <a href="?<?= $searchQuery ? 'search=' . urlencode($searchQuery) : '' ?>" class="text-white ms-1">
                                <i class="fas fa-times"></i>
                            </a>
                        </span>
                    <?php endif; ?>

                    <?php if ($searchQuery): ?>
                        <span class="badge bg-secondary">
                            Pencarian: "<?= esc($searchQuery) ?>"
                            <a href="?<?= $selectedCategory ? 'category=' . $selectedCategory : '' ?>" class="text-white ms-1">
                                <i class="fas fa-times"></i>
                            </a>
                        </span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

<!-- Gallery Modal (for viewing images) -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galleryModalLabel">Galeri Foto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" alt="Gallery Image" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

<style>
.page-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
}

.gallery-controls {
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.gallery-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.gallery-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.gallery-images {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.images-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    height: 100%;
    gap: 2px;
}

.image-item {
    position: relative;
    overflow: hidden;
}

.image-item.image-1 {
    grid-row: span 2;
}

.gallery-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.image-item:hover .gallery-img {
    transform: scale(1.1);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
}

.overlay-text {
    color: white;
    font-weight: bold;
    font-size: 18px;
}

.no-images-placeholder {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #f8f9fa;
}

.gallery-info {
    border-top: 1px solid #eee;
}

.gallery-title {
    font-size: 1.1rem;
    font-weight: 600;
    line-height: 1.3;
}

.gallery-title a:hover {
    color: var(--primary-color) !important;
}

.gallery-description {
    line-height: 1.4;
}

.gallery-meta {
    font-size: 0.85rem;
}

.stats-card {
    border: 2px solid var(--primary-color);
}

.stats-number {
    color: var(--primary-color);
}

.empty-gallery {
    background: white;
    border-radius: 15px;
    padding: 60px 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.active-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.badge {
    font-size: 0.8rem;
    padding: 6px 12px;
}

@media (max-width: 768px) {
    .gallery-controls .row > div {
        margin-bottom: 15px;
    }

    .images-grid {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(4, 1fr);
    }

    .image-item.image-1 {
        grid-row: span 1;
    }

    .gallery-card {
        margin-bottom: 20px;
    }
}
</style>

<script>
// Gallery modal functionality
document.addEventListener('DOMContentLoaded', function() {
    const galleryModal = new bootstrap.Modal(document.getElementById('galleryModal'));
    const modalImage = document.getElementById('modalImage');

    // Add click handlers for gallery images
    document.querySelectorAll('.gallery-img').forEach(img => {
        img.addEventListener('click', function(e) {
            e.preventDefault();
            modalImage.src = this.src;
            galleryModal.show();
        });
    });

    // Search form enhancement
    const searchInput = document.getElementById('search');
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                this.closest('form').submit();
            }
        });
    }
});
</script>