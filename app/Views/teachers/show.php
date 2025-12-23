<div class="container my-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <?php if ($teacher['photo']): ?>
                <img src="<?= base_url('uploads/' . $teacher['photo']) ?>" alt="<?= $teacher['name'] ?>" class="img-fluid rounded mb-3" style="border: 3px solid #D4AF37; max-width: 300px;">
            <?php else: ?>
                <div class="bg-light rounded d-inline-flex align-items-center justify-content-center mb-3" style="width: 300px; height: 300px; border: 3px solid #D4AF37;">
                    <i class="fas fa-user fa-5x" style="color: #D4AF37;"></i>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-8">
            <h1 class="mb-4 text-success fw-bold">
                <i class="fas fa-user me-2" style="color: #D4AF37;"></i>
                <?= $teacher['name'] ?>
            </h1>

            <div class="row">
                <div class="col-sm-6">
                    <h5 style="color: #0F3D3E;">Informasi Pribadi</h5>
                    <table class="table table-borderless">
                        <tr>
                            <td><strong>NIP:</strong></td>
                            <td style="color: #495057;"><?= $teacher['nip'] ?></td>
                        </tr>
                        <tr>
                            <td><strong>Jabatan:</strong></td>
                            <td style="color: #495057;"><?= $teacher['position'] ?></td>
                        </tr>
                        <?php if ($teacher['subject']): ?>
                        <tr>
                            <td><strong>Mata Pelajaran:</strong></td>
                            <td style="color: #495057;"><?= $teacher['subject'] ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if ($teacher['education']): ?>
                        <tr>
                            <td><strong>Pendidikan:</strong></td>
                            <td style="color: #495057;"><?= $teacher['education'] ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if ($teacher['contact']): ?>
                        <tr>
                            <td><strong>Kontak:</strong></td>
                            <td style="color: #495057;"><?= $teacher['contact'] ?></td>
                        </tr>
                        <?php endif; ?>
                    </table>
                </div>

                <?php if ($teacher['experience']): ?>
                <div class="col-sm-6">
                    <h5 style="color: #0F3D3E;">Pengalaman Kerja</h5>
                    <p style="color: #495057;"><?= nl2br($teacher['experience']) ?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="mt-4">
                <a href="/teachers" class="btn" style="background: linear-gradient(135deg, #FFD700, #FFA500); color: #0F3D3E; border: none;">← Kembali ke Daftar Guru</a>
            </div>
        </div>
    </div>
</div>