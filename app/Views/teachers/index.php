<div class="row">
    <?php foreach ($teachers as $teacher): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <?php if ($teacher['photo']): ?>
                        <img src="<?= base_url('uploads/' . $teacher['photo']) ?>" alt="<?= $teacher['name'] ?>" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                    <?php else: ?>
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 120px; height: 120px;">
                            <i class="fas fa-user fa-3x text-secondary"></i>
                        </div>
                    <?php endif; ?>

                    <h5 class="card-title"><?= $teacher['name'] ?></h5>
                    <p class="card-text">
                        <strong>Jabatan:</strong> <?= $teacher['position'] ?><br>
                        <?php if ($teacher['subject']): ?>
                            <strong>Mata Pelajaran:</strong> <?= $teacher['subject'] ?><br>
                        <?php endif; ?>
                        <strong>NIP:</strong> <?= $teacher['nip'] ?>
                    </p>
                    <a href="/teachers/<?= $teacher['id'] ?>" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php if (empty($teachers)): ?>
    <div class="text-center">
        <p>Belum ada data guru yang tersedia.</p>
    </div>
<?php endif; ?>