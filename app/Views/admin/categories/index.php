<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Kelola Kategori</h2>
    <a href="/admin/categories/create" class="btn btn-primary">Tambah Kategori</a>
</div>

<!-- Type Filter -->
<div class="mb-4">
    <div class="btn-group" role="group">
        <a href="/admin/categories?type=news" class="btn <?= $selectedType == 'news' ? 'btn-primary' : 'btn-outline-primary' ?>">
            Kategori Berita
        </a>
        <a href="/admin/categories?type=gallery" class="btn <?= $selectedType == 'gallery' ? 'btn-primary' : 'btn-outline-primary' ?>">
            Kategori Galeri
        </a>
    </div>
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
                        <th>Nama Kategori</th>
                        <th>Tipe</th>
                        <th>Jumlah Item</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?= $category['name'] ?></td>
                            <td>
                                <span class="badge bg-<?= $category['type'] == 'news' ? 'primary' : 'success' ?>">
                                    <?= ucfirst($category['type']) ?>
                                </span>
                            </td>
                            <td>
                                <?php
                                // Count items in this category
                                $newsModel = new \App\Models\NewsModel();
                                $galleryModel = new \App\Models\GalleryModel();
                                if ($category['type'] == 'news') {
                                    echo $newsModel->where('category_id', $category['id'])->countAllResults();
                                } else {
                                    echo $galleryModel->where('category_id', $category['id'])->countAllResults();
                                }
                                ?> item
                            </td>
                            <td>
                                <a href="/admin/categories/edit/<?= $category['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/categories/delete/<?= $category['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus kategori ini?')">
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

        <?php if (empty($categories)): ?>
            <div class="text-center py-4">
                <p class="text-muted">Belum ada kategori untuk tipe ini.</p>
            </div>
        <?php endif; ?>
    </div>
</div>