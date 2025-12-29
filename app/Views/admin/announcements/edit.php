<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Edit Pengumuman</h2>
        <p class="text-muted mb-0">Update informasi pengumuman</p>
    </div>
    <a href="/admin/announcements" class="btn btn-outline-secondary">
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
                    <i class="fas fa-edit me-2"></i>Informasi Pengumuman
                </h5>
            </div>
            <div class="card-body">
                <form action="/admin/announcements/update/<?= $announcement['id'] ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label fw-semibold">
                                <i class="fas fa-heading me-1"></i>Judul Pengumuman *
                            </label>
                            <input type="text" class="form-control" id="title" name="title"
                                   value="<?= old('title', $announcement['title']) ?>" required>
                            <div class="form-text">Berikan judul yang jelas dan informatif</div>
                        </div>

                        <div class="col-12">
                            <label for="content" class="form-label fw-semibold">
                                <i class="fas fa-align-left me-1"></i>Konten Pengumuman *
                            </label>
                            <textarea class="form-control" id="content" name="content" rows="8"
                                      placeholder="Tulis isi pengumuman di sini..."><?= old('content', $announcement['content']) ?></textarea>
                            <div class="form-text">Jelaskan pengumuman dengan lengkap dan jelas</div>
                        </div>

                        <div class="col-md-6">
                            <label for="status" class="form-label fw-semibold">
                                <i class="fas fa-toggle-on me-1"></i>Status *
                            </label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="">Pilih Status</option>
                                <option value="active" <?= old('status', $announcement['status']) == 'active' ? 'selected' : '' ?>>
                                    <i class="fas fa-check-circle me-1"></i>Aktif
                                </option>
                                <option value="inactive" <?= old('status', $announcement['status']) == 'inactive' ? 'selected' : '' ?>>
                                    <i class="fas fa-pause-circle me-1"></i>Tidak Aktif
                                </option>
                            </select>
                            <div class="form-text">Pengumuman aktif akan ditampilkan di halaman publik</div>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Update Pengumuman
                        </button>
                        <a href="/admin/announcements" class="btn btn-outline-secondary btn-lg">
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
                <h6>Tips Edit Pengumuman:</h6>
                <ul class="small mb-3">
                    <li>Judul harus jelas dan menarik perhatian</li>
                    <li>Konten harus informatif dan mudah dipahami</li>
                    <li>Status aktif untuk menampilkan di publik</li>
                    <li>Pastikan tidak ada kesalahan ketik</li>
                </ul>

                <h6>Status Pengumuman:</h6>
                <div class="mb-3">
                    <span class="badge bg-success">
                        <i class="fas fa-check me-1"></i>Aktif
                    </span>
                    <p class="small text-muted mt-2">Pengumuman ini sedang aktif dan dapat dilihat publik</p>
                </div>

                <div class="alert alert-warning small">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    <strong>Penting:</strong> Pastikan semua informasi sudah benar sebelum menyimpan.
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