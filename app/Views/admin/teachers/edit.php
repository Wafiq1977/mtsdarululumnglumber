<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Edit Guru/Staf</h2>
    <a href="/admin/teachers" class="btn btn-secondary">Kembali</a>
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
        <form action="/admin/teachers/update/<?= $teacher['id'] ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT">

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap *</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= old('name', $teacher['name']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP *</label>
                        <input type="text" class="form-control" id="nip" name="nip" value="<?= old('nip', $teacher['nip']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Jabatan *</label>
                        <input type="text" class="form-control" id="position" name="position" value="<?= old('position', $teacher['position']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Mata Pelajaran</label>
                        <input type="text" class="form-control" id="subject" name="subject" value="<?= old('subject', $teacher['subject']) ?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="education" class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" id="education" name="education" value="<?= old('education', $teacher['education']) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="contact" class="form-label">Kontak (Email/Telp)</label>
                        <input type="text" class="form-control" id="contact" name="contact" value="<?= old('contact', $teacher['contact']) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="experience" class="form-label">Pengalaman Kerja</label>
                        <textarea class="form-control" id="experience" name="experience" rows="3"><?= old('experience', $teacher['experience']) ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto Profil</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                        <div class="form-text">Format: JPG, PNG. Maksimal 2MB. Biarkan kosong jika tidak ingin mengubah.</div>
                        <?php if ($teacher['photo']): ?>
                            <div class="mt-2">
                                <img src="<?= base_url('uploads/' . $teacher['photo']) ?>" alt="Current photo" class="img-thumbnail" style="max-width: 200px;">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/teachers" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>