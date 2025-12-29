<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Kelola Berita</h2>
    <a href="/admin/news/create" class="btn btn-primary">Tambah Berita</a>
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
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($news as $item): ?>
                        <tr>
                            <td><?= $item['title'] ?></td>
                            <td><?= $item['category_name'] ?></td>
                            <td>
                                <span class="badge bg-<?= $item['status'] == 'published' ? 'success' : 'secondary' ?>">
                                    <?= ucfirst($item['status']) ?>
                                </span>
                            </td>
                            <td><?= date('d/m/Y', strtotime($item['created_at'])) ?></td>
                            <td>
                                <a href="/news/<?= $item['slug'] ?>" class="btn btn-sm btn-info" target="_blank">Lihat</a>
                                <a href="/admin/news/edit/<?= $item['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/news/delete/<?= $item['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus berita ini?')">
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

        <?php if (empty($news)): ?>
            <div class="text-center py-4">
                <p class="text-muted">Belum ada berita.</p>
            </div>
        <?php endif; ?>
    </div>
</div>