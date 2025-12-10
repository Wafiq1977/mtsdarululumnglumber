<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Edit Galeri</h2>
        <p class="text-muted mb-0">Update informasi dan foto galeri</p>
    </div>
    <a href="/admin/gallery" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left me-2"></i>Kembali
    </a>
</div>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle me-2"></i>
        <strong>Mohon perbaiki kesalahan berikut:</strong>
        <ul class="mb-0 mt-2">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-edit me-2"></i>Informasi Galeri
                </h5>
            </div>
            <div class="card-body">
                <form action="/admin/gallery/update/<?= $gallery['id'] ?>" method="post" enctype="multipart/form-data" id="galleryForm">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label fw-semibold">
                                <i class="fas fa-heading me-1"></i>Judul Galeri *
                            </label>
                            <input type="text" class="form-control" id="title" name="title"
                                   value="<?= old('title', $gallery['title']) ?>" required>
                            <div class="form-text">Berikan judul yang deskriptif untuk galeri ini</div>
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label fw-semibold">
                                <i class="fas fa-align-left me-1"></i>Deskripsi
                            </label>
                            <textarea class="form-control" id="description" name="description" rows="4"
                                      placeholder="Jelaskan tentang galeri ini..."><?= old('description', $gallery['description']) ?></textarea>
                            <div class="form-text">Opsional: Berikan penjelasan singkat tentang isi galeri</div>
                        </div>

                        <div class="col-md-6">
                            <label for="category_id" class="form-label fw-semibold">
                                <i class="fas fa-tags me-1"></i>Kategori *
                            </label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <option value="">Pilih Kategori</option>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['id'] ?>" <?= old('category_id', $gallery['category_id']) == $category['id'] ? 'selected' : '' ?>>
                                        <i class="fas fa-tag me-1"></i><?= $category['name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-12">
                            <hr class="my-4">
                            <h5 class="mb-3">
                                <i class="fas fa-images me-2"></i>Kelola Foto Galeri
                            </h5>

                            <!-- Existing Images -->
                            <?php
                            $existingImages = json_decode($gallery['images'], true) ?? [];
                            if (!empty($existingImages)):
                            ?>
                                <div class="existing-images mb-4">
                                    <h6 class="text-primary mb-3">
                                        <i class="fas fa-image me-2"></i>Foto Saat Ini:
                                        <span class="badge bg-primary"><?= count($existingImages) ?> foto</span>
                                    </h6>
                                    <div class="row g-3" id="existingImages">
                                        <?php foreach ($existingImages as $index => $image): ?>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="image-preview-item position-relative">
                                                    <img src="<?= base_url('uploads/' . $image) ?>" alt="Existing image"
                                                         class="img-fluid rounded">
                                                    <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1"
                                                            onclick="removeExistingImage('<?= $image ?>', this)">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                    <input type="hidden" name="existing_images[]" value="<?= $image ?>">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Add New Images -->
                            <div class="add-new-images">
                                <h6 class="text-success mb-3">
                                    <i class="fas fa-plus-circle me-2"></i>Tambah Foto Baru:
                                </h6>

                                <!-- Drag & Drop Area -->
                                <div class="upload-area border-dashed border-2 border-success rounded-3 p-4 text-center mb-3"
                                     id="uploadArea">
                                    <div class="upload-content">
                                        <i class="fas fa-cloud-upload-alt fa-3x text-success mb-3"></i>
                                        <h6>Seret & Lepas Foto Baru Di Sini</h6>
                                        <p class="text-muted mb-3">atau klik untuk memilih file</p>
                                        <input type="file" class="d-none" id="images" name="images[]" multiple accept="image/*">
                                        <button type="button" class="btn btn-success" onclick="document.getElementById('images').click()">
                                            <i class="fas fa-folder-open me-2"></i>Pilih File
                                        </button>
                                    </div>
                                </div>

                                <!-- File Requirements -->
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Persyaratan File:</strong>
                                    <ul class="mb-0 mt-2">
                                        <li>Format: JPG, PNG, JPEG</li>
                                        <li>Ukuran maksimal: 2MB per file</li>
                                        <li>Maksimal 20 foto tambahan</li>
                                    </ul>
                                </div>

                                <!-- New Images Preview -->
                                <div id="newImagePreview" class="row g-3" style="display: none;">
                                    <div class="col-12">
                                        <h6 class="text-success">
                                            <i class="fas fa-images me-2"></i>Foto baru yang akan ditambahkan:
                                            <span id="newImageCount" class="badge bg-success">0</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Update Galeri
                        </button>
                        <a href="/admin/gallery" class="btn btn-outline-secondary btn-lg">
                            <i class="fas fa-times me-2"></i>Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Help Panel -->
        <div class="card sticky-top" style="top: 20px;">
            <div class="card-header bg-light">
                <h6 class="mb-0">
                    <i class="fas fa-question-circle me-2"></i>Bantuan Edit
                </h6>
            </div>
            <div class="card-body">
                <h6>Tips Edit Galeri:</h6>
                <ul class="small mb-3">
                    <li>Klik tombol merah (X) pada foto untuk menghapus</li>
                    <li>Foto yang dihapus akan hilang secara permanen</li>
                    <li>Tambah foto baru dengan drag & drop</li>
                    <li>Judul dan deskripsi bisa diubah kapan saja</li>
                </ul>

                <h6>Status Galeri:</h6>
                <div class="mb-3">
                    <span class="badge bg-success">
                        <i class="fas fa-check me-1"></i>Aktif
                    </span>
                    <p class="small text-muted mt-2">Galeri ini sedang aktif dan dapat dilihat publik</p>
                </div>

                <div class="alert alert-warning small">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    <strong>Penting:</strong> Pastikan semua perubahan sudah benar sebelum menyimpan. Foto yang dihapus tidak dapat dikembalikan.
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.upload-area {
    background: #f8f9fa;
    transition: all 0.3s ease;
    cursor: pointer;
    min-height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.upload-area:hover {
    background: #e9ecef;
    border-color: #198754 !important;
}

.upload-area.dragover {
    background: #e8f5e8;
    border-color: #198754 !important;
    transform: scale(1.02);
}

.image-preview-item {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    border: 2px solid #dee2e6;
}

.image-preview-item img {
    width: 100%;
    height: 120px;
    object-fit: cover;
}

.image-preview-item .btn {
    width: 25px;
    height: 25px;
    padding: 0;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
}

.existing-images .image-preview-item::after {
    content: '';
    position: absolute;
    top: 5px;
    left: 5px;
    width: 10px;
    height: 10px;
    background: #198754;
    border-radius: 50%;
    border: 2px solid white;
}

.form-text {
    font-size: 0.875rem;
    color: #6c757d;
}

.sticky-top {
    z-index: 100;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const uploadArea = document.getElementById('uploadArea');
    const fileInput = document.getElementById('images');
    const newImagePreview = document.getElementById('newImagePreview');
    const newImageCount = document.getElementById('newImageCount');
    let selectedFiles = [];

    // Drag and drop functionality
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        uploadArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        uploadArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        uploadArea.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
        uploadArea.classList.add('dragover');
    }

    function unhighlight(e) {
        uploadArea.classList.remove('dragover');
    }

    uploadArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        handleFiles(files);
    }

    // Click to select files
    uploadArea.addEventListener('click', function() {
        fileInput.click();
    });

    fileInput.addEventListener('change', function(e) {
        handleFiles(e.target.files);
    });

    function handleFiles(files) {
        [...files].forEach(file => {
            if (validateFile(file)) {
                selectedFiles.push(file);
            }
        });
        updatePreview();
    }

    function validateFile(file) {
        const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
        const maxSize = 2 * 1024 * 1024; // 2MB

        if (!allowedTypes.includes(file.type)) {
            alert(`File ${file.name} tidak didukung. Gunakan format JPG atau PNG.`);
            return false;
        }

        if (file.size > maxSize) {
            alert(`File ${file.name} terlalu besar. Maksimal 2MB.`);
            return false;
        }

        return true;
    }

    function updatePreview() {
        newImageCount.textContent = selectedFiles.length;

        if (selectedFiles.length > 0) {
            newImagePreview.style.display = 'block';
            // Clear existing new previews
            const existingNewPreviews = newImagePreview.querySelectorAll('.col-md-3, .col-sm-4');
            existingNewPreviews.forEach(preview => {
                if (!preview.querySelector('input[type="hidden"]')) {
                    preview.remove();
                }
            });

            selectedFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const previewHtml = `
                        <div class="col-md-3 col-sm-4">
                            <div class="image-preview-item">
                                <img src="${e.target.result}" alt="New preview ${index + 1}">
                                <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1"
                                        onclick="removeNewImage(${index})">
                                    <i class="fas fa-times"></i>
                                </button>
                                <div class="position-absolute bottom-0 start-0 end-0 bg-dark bg-opacity-75 text-white p-1">
                                    <small>New: ${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)</small>
                                </div>
                            </div>
                        </div>
                    `;
                    newImagePreview.insertAdjacentHTML('beforeend', previewHtml);
                };
                reader.readAsDataURL(file);
            });
        } else {
            newImagePreview.style.display = 'none';
        }
    }

    // Remove existing image
    window.removeExistingImage = function(imageName, buttonElement) {
        if (confirm('Yakin ingin menghapus foto ini? Foto akan dihapus secara permanen.')) {
            // Remove from DOM
            buttonElement.closest('.col-md-3, .col-sm-4').remove();

            // Add to removal list (we'll handle this in the controller)
            const form = document.getElementById('galleryForm');
            const removeInput = document.createElement('input');
            removeInput.type = 'hidden';
            removeInput.name = 'remove_images[]';
            removeInput.value = imageName;
            form.appendChild(removeInput);
        }
    };

    // Remove new image
    window.removeNewImage = function(index) {
        selectedFiles.splice(index, 1);
        updatePreview();
    };

    // Form validation
    document.getElementById('galleryForm').addEventListener('submit', function(e) {
        const existingImages = document.querySelectorAll('input[name="existing_images[]"]');
        const totalImages = existingImages.length + selectedFiles.length;

        if (totalImages === 0) {
            e.preventDefault();
            alert('Galeri harus memiliki minimal 1 foto.');
            return;
        }

        if (selectedFiles.length > 20) {
            e.preventDefault();
            alert('Maksimal 20 foto tambahan per galeri.');
            return;
        }

        // Update file input with selected files
        const dt = new DataTransfer();
        selectedFiles.forEach(file => dt.items.add(file));
        fileInput.files = dt.files;
    });

    // Auto-hide alerts
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
});
</script>