<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-success fw-bold">
                <i class="fas fa-users me-2" style="color: #D4AF37;"></i>
                Guru & Staff
            </h1>
        </div>
    </div>

    <div class="row">
        <?php foreach ($teachers as $teacher): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                    <div class="card-body text-center" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                        <?php if ($teacher['photo']): ?>
                            <img src="<?= base_url('uploads/' . $teacher['photo']) ?>" alt="<?= $teacher['name'] ?>" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #D4AF37;">
                        <?php else: ?>
                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 120px; height: 120px; border: 3px solid #D4AF37;">
                                <i class="fas fa-user fa-3x" style="color: #D4AF37;"></i>
                            </div>
                        <?php endif; ?>

                        <h5 class="card-title" style="color: #0F3D3E;"><?= $teacher['name'] ?></h5>
                        <p class="card-text" style="color: #495057;">
                            <strong>Jabatan:</strong> <?= $teacher['position'] ?><br>
                            <?php if ($teacher['subject']): ?>
                                <strong>Mata Pelajaran:</strong> <?= $teacher['subject'] ?><br>
                            <?php endif; ?>
                            <strong>NIP:</strong> <?= $teacher['nip'] ?>
                        </p>
                        <a href="/teachers/<?= $teacher['id'] ?>" class="btn" style="background: linear-gradient(135deg, #FFD700, #FFA500); color: #0F3D3E; border: none;">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if (empty($teachers)): ?>
        <div class="text-center py-5">
            <div style="color: #0F3D3E;">
                <i class="fas fa-users fa-3x mb-3" style="color: #D4AF37;"></i>
                <h4>Belum ada data guru yang tersedia.</h4>
            </div>
        </div>
    <?php endif; ?>
</div>