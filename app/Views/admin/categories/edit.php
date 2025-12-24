<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Edit Kategori</h2>
    <a href="/admin/categories" class="btn btn-secondary">Kembali</a>
</div>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
        <ul class="mb-0">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-body">
        <form action="/admin/categories/update/<?= $category['id'] ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT">

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Kategori *</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= old('name', $category['name']) ?>" required>
                        <div class="form-text">Masukkan nama kategori yang deskriptif</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe Kategori *</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="news" <?= old('type', $category['type']) == 'news' ? 'selected' : '' ?>>Berita</option>
                            <option value="gallery" <?= old('type', $category['type']) == 'gallery' ? 'selected' : '' ?>>Galeri</option>
                        </select>
                        <div class="form-text">Pilih tipe konten yang akan dikategorikan</div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/categories" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>