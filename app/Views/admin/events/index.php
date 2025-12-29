<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Kelola Agenda</h2>
        <p class="text-muted mb-0">Kelola agenda dan kegiatan sekolah</p>
    </div>
    <?php if (session()->get('user')['role'] === 'admin'): ?>
    <a href="/admin/events/create" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Tambah Agenda
    </a>
    <?php endif; ?>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($events as $event): ?>
                        <tr>
                            <td><?= $event['title'] ?></td>
                            <td><?= date('d/m/Y H:i', strtotime($event['start_date'])) ?></td>
                            <td>
                                <?php if ($event['end_date']): ?>
                                    <?= date('d/m/Y H:i', strtotime($event['end_date'])) ?>
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php
                                $now = date('Y-m-d H:i:s');
                                $start = $event['start_date'];
                                $end = $event['end_date'] ?: $start;

                                if ($now > $end) {
                                    echo '<span class="badge bg-secondary">Selesai</span>';
                                } elseif ($now >= $start && $now <= $end) {
                                    echo '<span class="badge bg-success">Sedang Berlangsung</span>';
                                } else {
                                    echo '<span class="badge bg-info">Akan Datang</span>';
                                }
                                ?>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <?php if (session()->get('user')['role'] === 'admin'): ?>
                                    <a href="/admin/events/edit/<?= $event['id'] ?>" class="btn btn-sm btn-outline-warning"
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                            onclick="confirmDelete(<?= $event['id'] ?>, '<?= addslashes($event['title']) ?>')"
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

        <?php if (empty($events)): ?>
            <div class="text-center py-4">
                <p class="text-muted">Belum ada agenda.</p>
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
                <p>Apakah Anda yakin ingin menghapus agenda <strong id="deleteEventTitle"></strong>?</p>
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Perhatian:</strong> Agenda yang dihapus tidak dapat dikembalikan.
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
.btn-group .btn {
    border-radius: 6px !important;
    margin: 0 1px;
}
</style>

<script>
function confirmDelete(eventId, eventTitle) {
    document.getElementById('deleteEventTitle').textContent = eventTitle;
    document.getElementById('deleteForm').action = `/admin/events/delete/${eventId}`;

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