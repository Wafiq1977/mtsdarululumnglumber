<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Kelola Guru & Staf</h2>
    <a href="/admin/teachers/create" class="btn btn-primary">Tambah Guru/Staf</a>
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
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Role</th>
                        <th>Jabatan</th>
                        <th>Mata Pelajaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($teachers as $teacher): ?>
                        <tr>
                            <td>
                                <?php if ($teacher['photo']): ?>
                                    <img src="<?= base_url('uploads/' . $teacher['photo']) ?>" alt="<?= $teacher['name'] ?>" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                <?php else: ?>
                                    <div class="bg-light rounded d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="fas fa-user text-secondary"></i>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td><?= $teacher['name'] ?></td>
                            <td><?= $teacher['nip'] ?></td>
                            <td>
                                <span class="badge bg-<?= ($teacher['role'] ?? 'guru') == 'guru' ? 'primary' : 'success' ?>">
                                    <?= ucfirst($teacher['role'] ?? 'guru') ?>
                                </span>
                            </td>
                            <td><?= $teacher['position'] ?></td>
                            <td><?= $teacher['subject'] ?: '-' ?></td>
                            <td>
                                <a href="/teachers/<?= $teacher['id'] ?>" class="btn btn-sm btn-info" target="_blank">Lihat</a>
                                <a href="/admin/teachers/edit/<?= $teacher['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/teachers/delete/<?= $teacher['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data guru ini?');">
                                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php if (empty($teachers)): ?>
            <div class="text-center py-4">
                <p class="text-muted">Belum ada data guru.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
