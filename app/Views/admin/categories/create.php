<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Tambah Kategori Baru</h2>
        <p class="text-muted mb-0">Buat kategori untuk mengorganisir konten berita atau galeri</p>
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
                    <i class="fas fa-plus-circle me-2"></i>Informasi Kategori
                </h5>
            </div>
            <div class="card-body">
                <form action="/admin/categories/store" method="post" id="categoryForm">
                    <?= csrf_field() ?>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">
                                <i class="fas fa-tag me-1"></i>Nama Kategori *
                            </label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="<?= old('name') ?>" required
                                   placeholder="Contoh: Prestasi Siswa">
                            <div class="form-text">Masukkan nama kategori yang deskriptif dan mudah dipahami</div>
                        </div>

                        <div class="col-md-6">
                            <label for="type" class="form-label fw-semibold">
                                <i class="fas fa-layer-group me-1"></i>Tipe Kategori *
                            </label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="">Pilih Tipe Kategori</option>
                                <option value="news" <?= old('type') == 'news' ? 'selected' : '' ?>>
                                    <i class="fas fa-newspaper me-1"></i>Berita
                                </option>
                                <option value="gallery" <?= old('type') == 'gallery' ? 'selected' : '' ?>>
                                    <i class="fas fa-images me-1"></i>Galeri
                                </option>
                            </select>
                            <div class="form-text">Pilih tipe konten yang akan dikategorikan</div>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Simpan Kategori
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
                    <i class="fas fa-question-circle me-2"></i>Bantuan
                </h6>
            </div>
            <div class="card-body">
                <h6>Tips Membuat Kategori:</h6>
                <ul class="small mb-3">
                    <li>Gunakan nama yang spesifik dan deskriptif</li>
                    <li>Pilih tipe yang sesuai dengan konten</li>
                    <li>Kategori berita untuk artikel berita</li>
                    <li>Kategori galeri untuk koleksi foto</li>
                </ul>

                <h6>Contoh Kategori:</h6>
                <div class="mb-3">
                    <span class="badge bg-primary me-1 mb-1">
                        <i class="fas fa-newspaper me-1"></i>Prestasi Siswa
                    </span>
                    <span class="badge bg-success me-1 mb-1">
                        <i class="fas fa-images me-1"></i>Kegiatan Sekolah
                    </span>
                </div>

                <div class="alert alert-info small">
                    <i class="fas fa-info-circle me-1"></i>
                    <strong>Info:</strong> Kategori akan membantu pengguna menemukan konten yang mereka cari dengan lebih mudah.
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