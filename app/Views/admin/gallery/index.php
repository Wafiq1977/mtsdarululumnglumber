<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Kelola Galeri</h2>
        <p class="text-muted mb-0">Kelola koleksi foto kegiatan dan fasilitas sekolah</p>
    </div>
    <?php if (session()->get('user')['role'] === 'admin'): ?>
    <a href="/admin/gallery/create" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Tambah Galeri
    </a>
    <?php endif; ?>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card stats-card border-primary">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-images fa-2x text-primary"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-primary">
                    <?= count($galleries) ?>
                </div>
                <div class="stats-label">Total Galeri</div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stats-card border-success">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-tags fa-2x text-success"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-success">
                    <?= count($categories) ?>
                </div>
                <div class="stats-label">Kategori</div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stats-card border-info">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-photo-video fa-2x text-info"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-info">
                    <?php
                    $totalImages = 0;
                    foreach ($galleries as $gallery) {
                        $images = json_decode($gallery['images'], true);
                        $totalImages += count($images ?? []);
                    }
                    echo $totalImages;
                    ?>
                </div>
                <div class="stats-label">Total Foto</div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stats-card border-warning">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-calendar-alt fa-2x text-warning"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-warning">
                    <?php
                    $thisMonth = 0;
                    foreach ($galleries as $gallery) {
                        if (date('Y-m', strtotime($gallery['created_at'])) === date('Y-m')) {
                            $thisMonth++;
                        }
                    }
                    echo $thisMonth;
                    ?>
                </div>
                <div class="stats-label">Bulan Ini</div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Table -->
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-list me-2"></i>Daftar Galeri
        </h5>
    </div>
    <div class="card-body">
        <?php if (!empty($galleries)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="60">Preview</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Jumlah Foto</th>
                            <th>Tanggal Dibuat</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($galleries as $gallery): ?>
                            <tr>
                                <td>
                                    <?php
                                    $images = json_decode($gallery['images'], true);
                                    if (!empty($images)):
                                    ?>
                                        <img src="<?= base_url('uploads/' . $images[0]) ?>"
                                             alt="Preview" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                    <?php else: ?>
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                             style="width: 50px; height: 50px;">
                                            <i class="fas fa-image text-muted"></i>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="fw-semibold"><?= $gallery['title'] ?></div>
                                    <?php if ($gallery['description']): ?>
                                        <small class="text-muted">
                                            <?= substr($gallery['description'], 0, 50) ?>...
                                        </small>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php
                                    $categoryName = 'Umum';
                                    foreach ($categories as $cat) {
                                        if ($cat['id'] == $gallery['category_id']) {
                                            $categoryName = $cat['name'];
                                            break;
                                        }
                                    }
                                    ?>
                                    <span class="badge bg-primary">
                                        <i class="fas fa-tag me-1"></i><?= $categoryName ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-info">
                                        <i class="fas fa-images me-1"></i>
                                        <?= count($images ?? []) ?> foto
                                    </span>
                                </td>
                                <td>
                                    <div class="small text-muted">
                                        <?= date('d/m/Y', strtotime($gallery['created_at'])) ?>
                                    </div>
                                    <div class="small text-muted">
                                        <?= date('H:i', strtotime($gallery['created_at'])) ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="/gallery/<?= $gallery['id'] ?>" class="btn btn-sm btn-outline-info"
                                           target="_blank" title="Lihat">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <?php if (session()->get('user')['role'] === 'admin'): ?>
                                        <a href="/admin/gallery/edit/<?= $gallery['id'] ?>" class="btn btn-sm btn-outline-warning"
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-danger"
                                                onclick="confirmDelete(<?= $gallery['id'] ?>, '<?= addslashes($gallery['title']) ?>')"
                                                title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <div class="empty-state">
                    <i class="fas fa-images fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted mb-2">Belum ada galeri</h4>
                    <p class="text-muted mb-4">Mulai tambahkan galeri foto pertama Anda</p>
                    <a href="/admin/gallery/create" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Buat Galeri Pertama
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">
                    <i class="fas fa-exclamation-triangle text-warning me-2"></i>Konfirmasi Hapus
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus galeri <strong id="deleteGalleryTitle"></strong>?</p>
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Perhatian:</strong> Semua foto dalam galeri ini akan dihapus secara permanen.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="post" style="display: inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash me-2"></i>Ya, Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.stats-card {
    border-left: 4px solid;
    transition: transform 0.3s ease;
}

.stats-card:hover {
    transform: translateY(-5px);
}

.stats-icon {
    opacity: 0.8;
}

.stats-number {
    line-height: 1;
}

.stats-label {
    font-size: 0.9rem;
    opacity: 0.8;
    margin-top: 5px;
}

.table th {
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-group .btn {
    border-radius: 6px !important;
    margin: 0 1px;
}

.empty-state {
    background: #f8f9fa;
    border-radius: 15px;
    padding: 60px 40px;
}
</style>

<script>
function confirmDelete(galleryId, galleryTitle) {
    document.getElementById('deleteGalleryTitle').textContent = galleryTitle;
    document.getElementById('deleteForm').action = `/admin/gallery/delete/${galleryId}`;

    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}

// Auto-hide alerts after 5 seconds
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
});
</script>