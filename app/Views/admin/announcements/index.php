<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Kelola Pengumuman</h2>
    <a href="/admin/announcements/create" class="btn btn-primary">Tambah Pengumuman</a>
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
                        <th>Status</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($announcements as $announcement): ?>
                        <tr>
                            <td><?= $announcement['title'] ?></td>
                            <td>
                                <span class="badge bg-<?= $announcement['status'] == 'active' ? 'success' : 'secondary' ?>">
                                    <?= ucfirst($announcement['status']) ?>
                                </span>
                            </td>
                            <td><?= date('d/m/Y H:i', strtotime($announcement['created_at'])) ?></td>
                            <td>
                                <a href="/admin/announcements/edit/<?= $announcement['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/announcements/delete/<?= $announcement['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus pengumuman ini?')">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php if (empty($announcements)): ?>
            <div class="text-center py-4">
                <p class="text-muted">Belum ada pengumuman.</p>
            </div>
        <?php endif; ?>
    </div>
</div>