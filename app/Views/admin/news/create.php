<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Tambah Berita</h2>
    <a href="/admin/news" class="btn btn-secondary">Kembali</a>
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
        <form action="/admin/news/store" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Berita *</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= old('title') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Konten *</label>
                        <textarea class="form-control" id="content" name="content" rows="10"><?= old('content') ?></textarea>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori *</label>
                        <select class="form-select" id="category_id" name="category_id" required>
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['id'] ?>" <?= old('category_id') == $category['id'] ? 'selected' : '' ?>>
                                    <?= $category['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status *</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="draft" <?= old('status', 'draft') == 'draft' ? 'selected' : '' ?>>Draft</option>
                            <option value="published" <?= old('status') == 'published' ? 'selected' : '' ?>>Published</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Utama</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        <div class="form-text">Format: JPG, PNG. Maksimal 2MB.</div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/admin/news" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>