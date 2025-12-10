<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold">Hubungi Kami</h1>
                <p class="lead text-muted">Kami siap membantu Anda. Kirim pesan dan kami akan segera merespons.</p>
            </div>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    <?= session()->getFlashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

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

            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-4">
                                <i class="fas fa-envelope me-2 text-primary"></i>Kirim Pesan
                            </h3>

                            <form action="/contact" method="post">
                                <?= csrf_field() ?>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nama Lengkap *</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="<?= old('name') ?>" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="<?= old('email') ?>" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subjek *</label>
                                    <input type="text" class="form-control" id="subject" name="subject"
                                           value="<?= old('subject') ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan *</label>
                                    <textarea class="form-control" id="message" name="message" rows="6"
                                              placeholder="Tuliskan pesan Anda di sini..." required><?= old('message') ?></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4">
                    <div class="contact-info">
                        <div class="info-item mb-4">
                            <div class="info-icon mb-3">
                                <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                            </div>
                            <h5>Alamat</h5>
                            <p class="text-muted">Jl. Pendidikan No. 123<br>Kota Maju, Indonesia 12345</p>
                        </div>

                        <div class="info-item mb-4">
                            <div class="info-icon mb-3">
                                <i class="fas fa-phone fa-2x text-success"></i>
                            </div>
                            <h5>Telepon</h5>
                            <p class="text-muted">(021) 1234-5678<br>(021) 8765-4321</p>
                        </div>

                        <div class="info-item mb-4">
                            <div class="info-icon mb-3">
                                <i class="fas fa-envelope fa-2x text-warning"></i>
                            </div>
                            <h5>Email</h5>
                            <p class="text-muted">info@sekolahkami.sch.id<br>admin@sekolahkami.sch.id</p>
                        </div>

                        <div class="info-item">
                            <div class="info-icon mb-3">
                                <i class="fas fa-clock fa-2x text-info"></i>
                            </div>
                            <h5>Jam Operasional</h5>
                            <p class="text-muted mb-1"><strong>Senin - Jumat:</strong> 07:00 - 16:00</p>
                            <p class="text-muted"><strong>Sabtu:</strong> 08:00 - 12:00</p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-4">
                        <h5>Ikuti Kami</h5>
                        <div class="social-links">
                            <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2">
                                <i class="fab fa-facebook-f me-1"></i>Facebook
                            </a>
                            <a href="#" class="btn btn-outline-info btn-sm me-2 mb-2">
                                <i class="fab fa-twitter me-1"></i>Twitter
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm me-2 mb-2">
                                <i class="fab fa-instagram me-1"></i>Instagram
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm mb-2">
                                <i class="fab fa-youtube me-1"></i>YouTube
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.contact-info .info-item {
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s ease;
}

.contact-info .info-item:hover {
    transform: translateY(-5px);
}

.social-links .btn {
    border-radius: 20px;
    font-weight: 500;
}

@media (max-width: 768px) {
    .contact-info .info-item {
        margin-bottom: 20px;
    }
}
</style>