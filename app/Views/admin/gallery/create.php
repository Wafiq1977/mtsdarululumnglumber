<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Tambah Galeri Baru</h2>
        <p class="text-muted mb-0">Buat koleksi foto kegiatan atau fasilitas sekolah</p>
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
                    <i class="fas fa-plus-circle me-2"></i>Informasi Galeri
                </h5>
            </div>
            <div class="card-body">
                <form action="/admin/gallery/store" method="post" enctype="multipart/form-data" id="galleryForm">
                    <?= csrf_field() ?>

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" class="form-label fw-semibold">
                                <i class="fas fa-heading me-1"></i>Judul Galeri *
                            </label>
                            <input type="text" class="form-control" id="title" name="title"
                                   value="<?= old('title') ?>" required>
                            <div class="form-text">Berikan judul yang deskriptif untuk galeri ini</div>
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label fw-semibold">
                                <i class="fas fa-align-left me-1"></i>Deskripsi
                            </label>
                            <textarea class="form-control" id="description" name="description" rows="4"
                                      placeholder="Jelaskan tentang galeri ini..."><?= old('description') ?></textarea>
                            <div class="form-text">Opsional: Berikan penjelasan singkat tentang isi galeri</div>
                        </div>

                        <div class="col-md-6">
                            <label for="category_id" class="form-label fw-semibold">
                                <i class="fas fa-tags me-1"></i>Kategori *
                            </label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <option value="">Pilih Kategori</option>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['id'] ?>" <?= old('category_id') == $category['id'] ? 'selected' : '' ?>>
                                        <i class="fas fa-tag me-1"></i><?= $category['name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-12">
                            <hr class="my-4">
                            <h5 class="mb-3">
                                <i class="fas fa-images me-2"></i>Upload Foto
                            </h5>

                            <!-- Drag & Drop Area -->
                            <div class="upload-area border-dashed border-2 border-primary rounded-3 p-4 text-center mb-3"
                                 id="uploadArea">
                                <div class="upload-content">
                                    <i class="fas fa-cloud-upload-alt fa-3x text-primary mb-3"></i>
                                    <h6>Seret & Lepas Foto Di Sini</h6>
                                    <p class="text-muted mb-3">atau klik untuk memilih file</p>
                                    <input type="file" class="d-none" id="images" name="images[]" multiple accept="image/*">
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('images').click()">
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
                                    <li>Minimal 1 foto, maksimal 20 foto</li>
                                </ul>
                            </div>

                            <!-- Image Preview Area -->
                            <div id="imagePreview" class="row g-3" style="display: none;">
                                <div class="col-12">
                                    <h6 class="text-primary">
                                        <i class="fas fa-images me-2"></i>Foto yang akan diupload:
                                        <span id="imageCount" class="badge bg-primary">0</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Simpan Galeri
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
                    <i class="fas fa-question-circle me-2"></i>Bantuan
                </h6>
            </div>
            <div class="card-body">
                <h6>Tips Membuat Galeri:</h6>
                <ul class="small mb-3">
                    <li>Gunakan judul yang jelas dan deskriptif</li>
                    <li>Pilih kategori yang sesuai</li>
                    <li>Upload foto dengan resolusi tinggi</li>
                    <li>Pastikan foto dalam format yang didukung</li>
                </ul>

                <h6>Kategori Galeri:</h6>
                <div class="mb-3">
                    <?php foreach ($categories as $category): ?>
                        <span class="badge bg-secondary me-1 mb-1">
                            <i class="fas fa-tag me-1"></i><?= $category['name'] ?>
                        </span>
                    <?php endforeach; ?>
                </div>

                <div class="alert alert-warning small">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    <strong>Catatan:</strong> Setelah galeri dibuat, Anda masih dapat menambah atau menghapus foto melalui menu edit.
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
    min-height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.upload-area:hover {
    background: #e9ecef;
    border-color: #0d6efd !important;
}

.upload-area.dragover {
    background: #e3f2fd;
    border-color: #2196f3 !important;
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

.image-preview-item .remove-image {
    position: absolute;
    top: 5px;
    right: 5px;
    background: rgba(220, 53, 69, 0.9);
    color: white;
    border: none;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.image-preview-item .remove-image:hover {
    background: rgba(220, 53, 69, 1);
    transform: scale(1.1);
}

.image-preview-item .image-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 8px;
    font-size: 11px;
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
    const imagePreview = document.getElementById('imagePreview');
    const imageCount = document.getElementById('imageCount');
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
        imageCount.textContent = selectedFiles.length;

        if (selectedFiles.length > 0) {
            imagePreview.style.display = 'block';
            imagePreview.innerHTML = `
                <div class="col-12">
                    <h6 class="text-primary">
                        <i class="fas fa-images me-2"></i>Foto yang akan diupload:
                        <span id="imageCount" class="badge bg-primary">${selectedFiles.length}</span>
                    </h6>
                </div>
            `;

            selectedFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const previewHtml = `
                        <div class="col-md-3 col-sm-4">
                            <div class="image-preview-item">
                                <img src="${e.target.result}" alt="Preview ${index + 1}">
                                <button type="button" class="remove-image" onclick="removeImage(${index})">
                                    <i class="fas fa-times"></i>
                                </button>
                                <div class="image-info">
                                    ${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)
                                </div>
                            </div>
                        </div>
                    `;
                    imagePreview.insertAdjacentHTML('beforeend', previewHtml);
                };
                reader.readAsDataURL(file);
            });
        } else {
            imagePreview.style.display = 'none';
        }
    }

    // Remove image function
    window.removeImage = function(index) {
        selectedFiles.splice(index, 1);
        updatePreview();
    };

    // Form validation
    document.getElementById('galleryForm').addEventListener('submit', function(e) {
        if (selectedFiles.length === 0) {
            e.preventDefault();
            alert('Mohon pilih minimal 1 foto untuk galeri.');
            return;
        }

        if (selectedFiles.length > 20) {
            e.preventDefault();
            alert('Maksimal 20 foto per galeri.');
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