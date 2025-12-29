<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Edit Agenda</h2>
        <p class="text-muted mb-0">Update informasi agenda sekolah</p>
    </div>
    <a href="/admin/events" class="btn btn-outline-secondary">
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
                    <i class="fas fa-edit me-2"></i>Informasi Agenda
                </h5>
            </div>
            <div class="card-body">
                <form action="/admin/events/update/<?= $event['id'] ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label fw-semibold">
                                <i class="fas fa-heading me-1"></i>Judul Agenda *
                            </label>
                            <input type="text" class="form-control" id="title" name="title"
                                   value="<?= old('title', $event['title']) ?>" required>
                            <div class="form-text">Berikan judul yang jelas untuk agenda ini</div>
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label fw-semibold">
                                <i class="fas fa-align-left me-1"></i>Deskripsi
                            </label>
                            <textarea class="form-control" id="description" name="description" rows="4"
                                      placeholder="Jelaskan tentang agenda ini..."><?= old('description', $event['description']) ?></textarea>
                            <div class="form-text">Opsional: Berikan penjelasan detail tentang agenda</div>
                        </div>

                        <div class="col-md-6">
                            <label for="start_date" class="form-label fw-semibold">
                                <i class="fas fa-calendar-alt me-1"></i>Tanggal & Waktu Mulai *
                            </label>
                            <input type="datetime-local" class="form-control" id="start_date" name="start_date"
                                   value="<?= old('start_date', date('Y-m-d\TH:i:s', strtotime($event['start_date']))) ?>" required>
                            <div class="form-text">Format: YYYY-MM-DD HH:MM</div>
                        </div>

                        <div class="col-md-6">
                            <label for="end_date" class="form-label fw-semibold">
                                <i class="fas fa-calendar-check me-1"></i>Tanggal & Waktu Selesai
                            </label>
                            <input type="datetime-local" class="form-control" id="end_date" name="end_date"
                                   value="<?= old('end_date', $event['end_date'] ? date('Y-m-d\TH:i:s', strtotime($event['end_date'])) : '') ?>">
                            <div class="form-text">Opsional: Kosongkan jika agenda satu hari</div>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Update Agenda
                        </button>
                        <a href="/admin/events" class="btn btn-outline-secondary btn-lg">
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
                <h6>Tips Edit Agenda:</h6>
                <ul class="small mb-3">
                    <li>Judul harus jelas dan menarik</li>
                    <li>Tanggal mulai wajib diisi</li>
                    <li>Tanggal selesai opsional</li>
                    <li>Pastikan format tanggal benar</li>
                </ul>

                <h6>Status Agenda:</h6>
                <div class="mb-3">
                    <?php
                    $now = date('Y-m-d H:i:s');
                    $isUpcoming = $event['start_date'] > $now;
                    $isOngoing = $event['start_date'] <= $now && ($event['end_date'] === null || $event['end_date'] > $now);
                    $isPast = $event['end_date'] !== null && $event['end_date'] <= $now;
                    ?>
                    <?php if ($isUpcoming): ?>
                        <span class="badge bg-info">
                            <i class="fas fa-clock me-1"></i>Mendatang
                        </span>
                        <p class="small text-muted mt-2">Agenda ini belum dimulai</p>
                    <?php elseif ($isOngoing): ?>
                        <span class="badge bg-success">
                            <i class="fas fa-play me-1"></i>Berlangsung
                        </span>
                        <p class="small text-muted mt-2">Agenda ini sedang berlangsung</p>
                    <?php else: ?>
                        <span class="badge bg-secondary">
                            <i class="fas fa-check me-1"></i>Selesai
                        </span>
                        <p class="small text-muted mt-2">Agenda ini telah selesai</p>
                    <?php endif; ?>
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