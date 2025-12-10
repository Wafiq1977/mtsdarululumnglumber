<div class="row">
    <div class="col-md-4 text-center">
        <?php if ($teacher['photo']): ?>
            <img src="<?= base_url('uploads/' . $teacher['photo']) ?>" alt="<?= $teacher['name'] ?>" class="img-fluid rounded mb-3">
        <?php else: ?>
            <div class="bg-light rounded d-inline-flex align-items-center justify-content-center mb-3" style="width: 300px; height: 300px;">
                <i class="fas fa-user fa-5x text-secondary"></i>
            </div>
        <?php endif; ?>
    </div>

    <div class="col-md-8">
        <h1 class="mb-4"><?= $teacher['name'] ?></h1>

        <div class="row">
            <div class="col-sm-6">
                <h5>Informasi Pribadi</h5>
                <table class="table table-borderless">
                    <tr>
                        <td><strong>NIP:</strong></td>
                        <td><?= $teacher['nip'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jabatan:</strong></td>
                        <td><?= $teacher['position'] ?></td>
                    </tr>
                    <?php if ($teacher['subject']): ?>
                    <tr>
                        <td><strong>Mata Pelajaran:</strong></td>
                        <td><?= $teacher['subject'] ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($teacher['education']): ?>
                    <tr>
                        <td><strong>Pendidikan:</strong></td>
                        <td><?= $teacher['education'] ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($teacher['contact']): ?>
                    <tr>
                        <td><strong>Kontak:</strong></td>
                        <td><?= $teacher['contact'] ?></td>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>

            <?php if ($teacher['experience']): ?>
            <div class="col-sm-6">
                <h5>Pengalaman Kerja</h5>
                <p><?= nl2br($teacher['experience']) ?></p>
            </div>
            <?php endif; ?>
        </div>

        <div class="mt-4">
            <a href="/teachers" class="btn btn-outline-primary">← Kembali ke Daftar Guru</a>
        </div>
    </div>
</div>