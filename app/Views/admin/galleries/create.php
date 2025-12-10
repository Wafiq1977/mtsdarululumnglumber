<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Tambah Galeri</h2>
    <a href="/admin/galleries" class="btn btn-secondary">Kembali</a>
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
        <form action="/admin/galleries/store" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Galeri *</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= old('title') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3"><?= old('description') ?></textarea>
                    </div>

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
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Upload Gambar *</label>
                        <div id="dropzone" class="border border-2 border-dashed rounded p-4 text-center">
                            <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                            <p class="mb-0">Drag & drop gambar di sini atau klik untuk memilih</p>
                            <input type="file" name="images[]" multiple accept="image/*" style="display: none;">
                        </div>
                        <div class="form-text">Format: JPG, PNG. Maksimal 2MB per gambar.</div>
                    </div>

                    <div id="preview" class="row g-2"></div>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/admin/galleries" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

<link href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script>
Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    url: "/admin/galleries/store", // This will be handled by the form
    autoProcessQueue: false,
    addRemoveLinks: true,
    dictRemoveFile: "Hapus",
    acceptedFiles: "image/*",
    maxFilesize: 2, // MB
    parallelUploads: 10,
    uploadMultiple: true,
    init: function() {
        this.on("addedfile", function(file) {
            // Create preview
            const preview = document.createElement('div');
            preview.className = 'col-md-3 position-relative';
            preview.innerHTML = `
                <img src="${URL.createObjectURL(file)}" class="img-fluid rounded" style="height: 100px; object-fit: cover;">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0" onclick="removeFile(this)">
                    <i class="fas fa-times"></i>
                </button>
            `;
            document.getElementById('preview').appendChild(preview);
        });

        this.on("removedfile", function(file) {
            // Remove from preview
            const previews = document.querySelectorAll('#preview .col-md-3');
            if (previews.length > 0) {
                previews[previews.length - 1].remove();
            }
        });
    }
});

function removeFile(button) {
    const col = button.closest('.col-md-3');
    col.remove();
    // Remove from Dropzone
    const files = dropzone.files;
    if (files.length > 0) {
        dropzone.removeFile(files[files.length - 1]);
    }
}

// Handle form submission
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();

    // Add files to form data
    const formData = new FormData(this);
    const files = dropzone.files;

    // Clear existing images input
    const existingImages = formData.getAll('images[]');
    existingImages.forEach(() => formData.delete('images[]'));

    // Add files from dropzone
    files.forEach(file => {
        formData.append('images[]', file);
    });

    // Submit form
    fetch(this.action, {
        method: 'POST',
        body: formData
    }).then(response => {
        if (response.ok) {
            window.location.href = '/admin/galleries';
        } else {
            alert('Terjadi kesalahan saat menyimpan galeri.');
        }
    });
});
</script>