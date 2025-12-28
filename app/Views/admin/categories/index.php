<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Kelola Kategori</h2>
        <p class="text-muted mb-0">Kelola kategori untuk mengorganisir konten berita dan galeri</p>
    </div>
    <a href="/admin/categories/create" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Tambah Kategori
    </a>
</div>

<!-- Type Filter -->
<div class="mb-4">
    <div class="btn-group" role="group">
        <a href="/admin/categories?type=news" class="btn <?= $selectedType == 'news' ? 'btn-primary' : 'btn-outline-primary' ?>">
            <i class="fas fa-newspaper me-2"></i>Kategori Berita
        </a>
        <a href="/admin/categories?type=gallery" class="btn <?= $selectedType == 'gallery' ? 'btn-primary' : 'btn-outline-primary' ?>">
            <i class="fas fa-images me-2"></i>Kategori Galeri
        </a>
    </div>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle me-2"></i>
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card stats-card border-primary">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-tags fa-2x text-primary"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-primary">
                    <?php
                    $totalCategories = count($categories);
                    echo $totalCategories;
                    ?>
                </div>
                <div class="stats-label">Total Kategori</div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card stats-card border-info">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-newspaper fa-2x text-info"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-info">
                    <?php
                    $newsCategories = 0;
                    foreach ($categories as $cat) {
                        if ($cat['type'] == 'news') $newsCategories++;
                    }
                    echo $newsCategories;
                    ?>
                </div>
                <div class="stats-label">Kategori Berita</div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card stats-card border-success">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-images fa-2x text-success"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-success">
                    <?php
                    $galleryCategories = 0;
                    foreach ($categories as $cat) {
                        if ($cat['type'] == 'gallery') $galleryCategories++;
                    }
                    echo $galleryCategories;
                    ?>
                </div>
                <div class="stats-label">Kategori Galeri</div>
            </div>
        </div>
    </div>
</div>

<!-- Categories Table -->
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-list me-2"></i>Daftar Kategori
            <?php if ($selectedType): ?>
                <span class="badge bg-primary ms-2">
                    <i class="fas fa-filter me-1"></i><?= ucfirst($selectedType) ?>
                </span>
            <?php endif; ?>
        </h5>
    </div>
    <div class="card-body">
        <?php if (!empty($categories)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Kategori</th>
                            <th>Tipe</th>
                            <th>Jumlah Item</th>
                            <th>Dibuat</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td>
                                    <div class="fw-semibold"><?= $category['name'] ?></div>
                                </td>
                                <td>
                                    <span class="badge bg-<?= $category['type'] == 'news' ? 'primary' : 'success' ?>">
                                        <i class="fas fa-<?= $category['type'] == 'news' ? 'newspaper' : 'images' ?> me-1"></i>
                                        <?= ucfirst($category['type']) ?>
                                    </span>
                                </td>
                                <td>
                                    <?php
                                    // Count items in this category
                                    $newsModel = new \App\Models\NewsModel();
                                    $galleryModel = new \App\Models\GalleryModel();
                                    $itemCount = 0;
                                    if ($category['type'] == 'news') {
                                        $itemCount = $newsModel->where('category_id', $category['id'])->countAllResults();
                                    } else {
                                        $itemCount = $galleryModel->where('category_id', $category['id'])->countAllResults();
                                    }
                                    ?>
                                    <span class="badge bg-info">
                                        <i class="fas fa-<?= $category['type'] == 'news' ? 'newspaper' : 'images' ?> me-1"></i>
                                        <?= $itemCount ?> item
                                    </span>
                                </td>
                                <td>
                                    <div class="small text-muted">
                                        <?= date('d/m/Y', strtotime($category['created_at'])) ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="/admin/categories/edit/<?= $category['id'] ?>" class="btn btn-sm btn-outline-warning"
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-danger"
                                                onclick="confirmDelete(<?= $category['id'] ?>, '<?= addslashes($category['name']) ?>')"
                                                title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
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
                    <i class="fas fa-tags fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted mb-2">Belum ada kategori</h4>
                    <p class="text-muted mb-4">
                        <?php if ($selectedType): ?>
                            Belum ada kategori untuk tipe <?= ucfirst($selectedType) ?>.
                            <br><a href="/admin/categories" class="text-decoration-none">Tampilkan semua kategori</a>
                        <?php else: ?>
                            Mulai tambahkan kategori pertama untuk mengorganisir konten.
                        <?php endif; ?>
                    </p>
                    <a href="/admin/categories/create" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Buat Kategori Pertama
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
                <p>Apakah Anda yakin ingin menghapus kategori <strong id="deleteCategoryTitle"></strong>?</p>
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Perhatian:</strong> Kategori yang masih digunakan oleh konten tidak dapat dihapus.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="post" style="display: inline;">
                    <?= csrf_field() ?>
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
function confirmDelete(categoryId, categoryTitle) {
    document.getElementById('deleteCategoryTitle').textContent = categoryTitle;
    document.getElementById('deleteForm').action = `/admin/categories/delete/${categoryId}`;

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