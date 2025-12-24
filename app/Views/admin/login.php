<!-- Modern Admin Login Page -->
<div class="admin-login-container">
    <div class="login-background">
        <div class="background-overlay"></div>
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
    </div>

    <div class="login-wrapper">
        <div class="login-card">
            <div class="login-header">
                <div class="logo-section">
                    <img src="/uploads/logo.png" alt="Logo" class="login-logo">
                    <h1 class="login-title">MTS Darul Ulum</h1>
                    <p class="login-subtitle">Panel Administrasi</p>
                </div>
            </div>

            <div class="login-body">
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger alert-modern">
                        <i class="fas fa-exclamation-triangle"></i>
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="alert alert-danger alert-modern">
                        <i class="fas fa-exclamation-triangle"></i>
                        <ul class="mb-0">
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <li><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="/auth/authenticate" method="post" class="login-form">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label for="username" class="form-label-modern">
                            <i class="fas fa-user"></i> Username
                        </label>
                        <div class="input-wrapper">
                            <input type="text" class="form-control-modern" id="username" name="username"
                                   value="<?= old('username') ?>" placeholder="Masukkan username" required>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label-modern">
                            <i class="fas fa-lock"></i> Password
                        </label>
                        <div class="input-wrapper">
                            <input type="password" class="form-control-modern" id="password" name="password"
                                   placeholder="Masukkan password" required>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>

                    <button type="submit" class="btn-login-modern">
                        <span class="btn-text">Masuk ke Dashboard</span>
                        <i class="fas fa-arrow-right btn-icon"></i>
                        <div class="btn-loading" style="display: none;">
                            <div class="spinner-border spinner-border-sm" role="status"></div>
                        </div>
                    </button>
                </form>

                <div class="login-footer">
                    <p class="login-info">
                        <i class="fas fa-info-circle"></i>
                        Gunakan kredensial admin untuk mengakses panel administrasi
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Modern Admin Login Styles */
.admin-login-container {
    min-height: 100vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}

.login-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
}

.background-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #0F3D3E 0%, #1a4a4a 50%, #0F3D3E 100%);
    opacity: 0.9;
}

.floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(212, 175, 55, 0.1);
    animation: float 6s ease-in-out infinite;
}

.shape-1 {
    width: 200px;
    height: 200px;
    top: 10%;
    left: 10%;
    animation-delay: 0s;
}

.shape-2 {
    width: 150px;
    height: 150px;
    top: 60%;
    right: 15%;
    animation-delay: 2s;
}

.shape-3 {
    width: 100px;
    height: 100px;
    bottom: 20%;
    left: 20%;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.3;
    }
    50% {
        transform: translateY(-20px) rotate(180deg);
        opacity: 0.6;
    }
}

.login-wrapper {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 450px;
    padding: 2rem;
}

.login-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(212, 175, 55, 0.2);
    overflow: hidden;
    animation: slideUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

@keyframes slideUp {
    from {
        transform: translateY(50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.login-header {
    background: linear-gradient(135deg, #0F3D3E, #1a4a4a);
    padding: 2rem 2rem 1.5rem;
    text-align: center;
    border-bottom: 1px solid rgba(212, 175, 55, 0.3);
}

.logo-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
}

.login-logo {
    width: 60px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.login-title {
    color: white;
    font-size: 1.8rem;
    font-weight: 700;
    margin: 0;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.login-subtitle {
    color: #D4AF37;
    font-size: 0.9rem;
    font-weight: 500;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.login-body {
    padding: 2rem;
}

.alert-modern {
    border-radius: 10px;
    border: none;
    background: linear-gradient(135deg, #dc3545, #c82333);
    color: white;
    box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    animation: shake 0.5s ease-in-out;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    75% { transform: translateX(5px); }
}

.login-form {
    margin-bottom: 2rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label-modern {
    display: block;
    color: #0F3D3E;
    font-weight: 600;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.input-wrapper {
    position: relative;
}

.form-control-modern {
    width: 100%;
    padding: 1rem 1.2rem;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    font-size: 1rem;
    background: white;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.form-control-modern:focus {
    outline: none;
    border-color: #D4AF37;
    box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
    transform: translateY(-2px);
}

.input-focus-line {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #D4AF37, #f4c430);
    border-radius: 1px;
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.form-control-modern:focus + .input-focus-line {
    width: 100%;
}

.btn-login-modern {
    width: 100%;
    padding: 1rem 2rem;
    background: linear-gradient(135deg, #D4AF37, #f4c430);
    color: #0F3D3E;
    border: none;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    box-shadow: 0 8px 25px rgba(212, 175, 55, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    position: relative;
    overflow: hidden;
}

.btn-login-modern:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.6);
    background: linear-gradient(135deg, #f4c430, #D4AF37);
}

.btn-login-modern:active {
    transform: translateY(-1px);
}

.btn-text {
    position: relative;
    z-index: 2;
}

.btn-icon {
    transition: transform 0.3s ease;
}

.btn-login-modern:hover .btn-icon {
    transform: translateX(5px);
}

.btn-loading {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.login-footer {
    text-align: center;
    padding-top: 1rem;
    border-top: 1px solid #e9ecef;
}

.login-info {
    color: #6c757d;
    font-size: 0.85rem;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

/* Responsive Design */
@media (max-width: 576px) {
    .login-wrapper {
        padding: 1rem;
    }

    .login-card {
        border-radius: 15px;
    }

    .login-header {
        padding: 1.5rem 1.5rem 1rem;
    }

    .login-body {
        padding: 1.5rem;
    }

    .login-title {
        font-size: 1.5rem;
    }

    .form-control-modern {
        padding: 0.875rem 1rem;
    }

    .btn-login-modern {
        padding: 0.875rem 1.5rem;
        font-size: 0.95rem;
    }
}

/* Loading Animation */
.login-form.submitting .btn-text,
.login-form.submitting .btn-icon {
    opacity: 0;
}

.login-form.submitting .btn-loading {
    display: flex !important;
}
</style>

<script>
// Add loading animation to form
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.login-form');
    const btn = document.querySelector('.btn-login-modern');

    form.addEventListener('submit', function() {
        form.classList.add('submitting');
        btn.disabled = true;
    });
});
</script>