<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Edit Kategori</h2>
        <p class="text-muted mb-0">Update informasi kategori</p>
    </div>
    <a href="/admin/categories" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left me-2"></i>Kembali
    </a>
</div>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle me-2"></i>
        <strong>Mohon perbaiki kesalahan berikut:</strong>
        <ul class="mb-0 mt-2">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-edit me-2"></i>Informasi Kategori
                </h5>
            </div>
            <div class="card-body">
                <form action="/admin/categories/update/<?= $category['id'] ?>" method="post" id="categoryForm">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">
                                <i class="fas fa-tag me-1"></i>Nama Kategori *
                            </label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="<?= old('name', $category['name']) ?>" required
                                   placeholder="Contoh: Prestasi Siswa">
                            <div class="form-text">Masukkan nama kategori yang deskriptif dan mudah dipahami</div>
                        </div>

                        <div class="col-md-6">
                            <label for="type" class="form-label fw-semibold">
                                <i class="fas fa-layer-group me-1"></i>Tipe Kategori *
                            </label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="">Pilih Tipe Kategori</option>
                                <option value="news" <?= old('type', $category['type']) == 'news' ? 'selected' : '' ?>>
                                    <i class="fas fa-newspaper me-1"></i>Berita
                                </option>
                                <option value="gallery" <?= old('type', $category['type']) == 'gallery' ? 'selected' : '' ?>>
                                    <i class="fas fa-images me-1"></i>Galeri
                                </option>
                            </select>
                            <div class="form-text">Pilih tipe konten yang akan dikategorikan</div>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Update Kategori
                        </button>
                        <a href="/admin/categories" class="btn btn-outline-secondary btn-lg">
                            <i class="fas fa-times me-2"></i>Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Help Panel -->
        <div class="card sticky-top" style="top: 20px;">
            <div class="card-header bg-light">
                <h6 class="mb-0">
                    <i class="fas fa-question-circle me-2"></i>Bantuan Edit
                </h6>
            </div>
            <div class="card-body">
                <h6>Tips Edit Kategori:</h6>
                <ul class="small mb-3">
                    <li>Ubah nama kategori jika diperlukan</li>
                    <li>Tipe kategori dapat diubah</li>
                    <li>Pastikan perubahan tidak memengaruhi konten yang ada</li>
                    <li>Kategori yang masih digunakan tidak dapat dihapus</li>
                </ul>

                <h6>Status Kategori:</h6>
                <div class="mb-3">
                    <?php
                    $newsModel = new \App\Models\NewsModel();
                    $galleryModel = new \App\Models\GalleryModel();
                    $newsCount = $newsModel->where('category_id', $category['id'])->countAllResults();
                    $galleryCount = $galleryModel->where('category_id', $category['id'])->countAllResults();
                    $totalItems = $newsCount + $galleryCount;
                    ?>
                    <span class="badge bg-info">
                        <i class="fas fa-<?= $category['type'] == 'news' ? 'newspaper' : 'images' ?> me-1"></i>
                        <?= ucfirst($category['type']) ?>
                    </span>
                    <p class="small text-muted mt-2">
                        Digunakan oleh <?= $totalItems ?> item
                        <?php if ($totalItems > 0): ?>
                            (<?= $newsCount ?> berita, <?= $galleryCount ?> galeri)
                        <?php endif; ?>
                    </p>
                </div>

                <div class="alert alert-warning small">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    <strong>Perhatian:</strong> Mengubah tipe kategori dapat memengaruhi cara konten ditampilkan.
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.form-text {
    font-size: 0.875rem;
    color: #6c757d;
}

.sticky-top {
    z-index: 100;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-hide alerts
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
});
</script>