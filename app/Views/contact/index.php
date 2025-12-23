<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-success">
                    <i class="fas fa-envelope me-2" style="color: #D4AF37;"></i>Hubungi Kami
                </h1>
                <p class="lead" style="color: #0F3D3E;">Kami siap membantu Anda. Kirim pesan dan kami akan segera merespons.</p>
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
                            <h3 class="card-title mb-4" style="color: #0F3D3E;">
                                <i class="fas fa-envelope me-2" style="color: #D4AF37;"></i>Kirim Pesan
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

                                <button type="submit" class="btn btn-lg" style="background: linear-gradient(135deg, #FFD700, #FFA500); color: #0F3D3E; border: none;">
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
                                <i class="fas fa-map-marker-alt fa-2x" style="color: #D4AF37;"></i>
                            </div>
                            <h5 style="color: #0F3D3E;">Alamat</h5>
                            <p style="color: #495057;">Jalan Raya Kepohbaru, Desa Nglumber,<br>Kecamatan Kepohbaru, Bojonegoro, Jawa Timur</p>
                        </div>

                        <div class="info-item mb-4">
                            <div class="info-icon mb-3">
                                <i class="fas fa-phone fa-2x" style="color: #D4AF37;"></i>
                            </div>
                            <h5 style="color: #0F3D3E;">Telepon</h5>
                            <p style="color: #495057;">+62 852 5893 2028</p>
                        </div>

                        <div class="info-item mb-4">
                            <div class="info-icon mb-3">
                                <i class="fas fa-envelope fa-2x" style="color: #D4AF37;"></i>
                            </div>
                            <h5 style="color: #0F3D3E;">Email</h5>
                            <p style="color: #495057;">mtsdunglumber@gmail.com</p>
                        </div>

                        <div class="info-item">
                            <div class="info-icon mb-3">
                                <i class="fas fa-clock fa-2x" style="color: #D4AF37;"></i>
                            </div>
                            <h5 style="color: #0F3D3E;">Jam Operasional</h5>
                            <p style="color: #495057; margin-bottom: 0.25rem;"><strong>Senin - Jumat:</strong> 07:00 - 15:00</p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-4">
                        <h5 style="color: #0F3D3E;">Ikuti Kami</h5>
                        <div class="social-links d-flex flex-column gap-2">
                            <a href="#" class="btn btn-sm" style="background: linear-gradient(135deg, #FFD700, #FFA500); color: #0F3D3E; border: none; text-align: left;">
                                <i class="fab fa-facebook-f me-2"></i>lpm-NU Darul Ulum Kepohbaru
                            </a>
                            <a href="#" class="btn btn-sm" style="background: linear-gradient(135deg, #FFD700, #FFA500); color: #0F3D3E; border: none; text-align: left;">
                                <i class="fab fa-instagram me-2"></i>lpmnudarululum.kepohbaru
                            </a>
                            <a href="#" class="btn btn-sm" style="background: linear-gradient(135deg, #FFD700, #FFA500); color: #0F3D3E; border: none; text-align: left;">
                                <i class="fab fa-youtube me-2"></i>Darul Ulum Kepohbaru
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
    background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));
    border: 2px solid rgba(212, 175, 55, 0.2);
    border-radius: 15px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.contact-info .info-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.2);
    border-color: rgba(212, 175, 55, 0.4);
}

.social-links .btn {
    border-radius: 25px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.social-links .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(255, 215, 0, 0.3);
}

.card {
    border: 2px solid rgba(212, 175, 55, 0.2);
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.form-control {
    border: 2px solid rgba(212, 175, 55, 0.3);
    border-radius: 10px;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #D4AF37;
    box-shadow: 0 0 0 0.2rem rgba(212, 175, 55, 0.25);
}

@media (max-width: 768px) {
    .contact-info .info-item {
        margin-bottom: 20px;
    }

    .row.g-5 > div {
        margin-bottom: 2rem;
    }
}
</style>