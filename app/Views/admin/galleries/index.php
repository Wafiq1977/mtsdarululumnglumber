<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Kelola Galeri</h2>
    <a href="/admin/galleries/create" class="btn btn-primary">Tambah Galeri</a>
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
                        <th>Kategori</th>
                        <th>Jumlah Foto</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($galleries as $gallery): ?>
                        <tr>
                            <td><?= $gallery['title'] ?></td>
                            <td>
                                <?php
                                // Get category name - in real implementation, join with categories table
                                echo 'Kategori ' . $gallery['category_id'];
                                ?>
                            </td>
                            <td>
                                <?php
                                $images = json_decode($gallery['images'], true) ?? [];
                                echo count($images) . ' foto';
                                ?>
                            </td>
                            <td><?= date('d/m/Y', strtotime($gallery['created_at'])) ?></td>
                            <td>
                                <a href="/gallery" class="btn btn-sm btn-info" target="_blank">Lihat</a>
                                <a href="/admin/galleries/edit/<?= $gallery['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/galleries/delete/<?= $gallery['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus galeri ini?')">
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

        <?php if (empty($galleries)): ?>
            <div class="text-center py-4">
                <p class="text-muted">Belum ada galeri.</p>
            </div>
        <?php endif; ?>
    </div>
</div>