<!-- Home Page Identifier -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.body.classList.add('home-page');
    });
</script>

<!-- ===== HERO SECTION WITH PHOTO SLIDES ===== -->
<section class="hero-section">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <div class="container">
                            <div class="row align-items-center min-vh-100">
                                <div class="col-lg-8">
                                    <h1 class="hero-title animate-fade-in-up">
                                        Madrasah Tsanawiyah<br>
                                        <span class="hero-title-accent">Darul Ulum Nglumber</span>
                                    </h1>
                                    <p class="hero-description animate-fade-in-up animation-delay-1">
                                        Mencetak Generasi Berakhlak, Berprestasi, dan Berwawasan Islam
                                    </p>
                                    <div class="hero-actions animate-fade-in-up animation-delay-2">
                                        <a href="/profile" class="btn btn-light btn-lg me-3">
                                            <i class="fas fa-info-circle me-2"></i>Profil Sekolah
                                        </a>
                                        <a href="/contact" class="btn btn-outline-light btn-lg">
                                            <i class="fas fa-envelope me-2"></i>Kontak Kami
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="hero-visual animate-scale-in animation-delay-3">
                                        <div class="hero-stats">
                                            <div class="stat-item">
                                                <div class="stat-number" data-target="500">0</div>
                                                <div class="stat-label">Siswa</div>
                                            </div>
                                            <div class="stat-item">
                                                <div class="stat-number" data-target="25">0</div>
                                                <div class="stat-label">Guru</div>
                                            </div>
                                            <div class="stat-item">
                                                <div class="stat-number" data-target="15">0</div>
                                                <div class="stat-label">Tahun</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <div class="container">
                            <div class="row align-items-center min-vh-100">
                                <div class="col-lg-8">
                                    <h1 class="hero-title animate-fade-in-up">
                                        Pembelajaran<br>
                                        <span class="hero-title-accent">Modern & Interaktif</span>
                                    </h1>
                                    <p class="hero-description animate-fade-in-up animation-delay-1">
                                        Fasilitas lengkap dengan teknologi terkini untuk mendukung proses belajar mengajar
                                    </p>
                                    <div class="hero-actions animate-fade-in-up animation-delay-2">
                                        <a href="/gallery" class="btn btn-light btn-lg me-3">
                                            <i class="fas fa-images me-2"></i>Lihat Galeri
                                        </a>
                                        <a href="/teachers" class="btn btn-outline-light btn-lg">
                                            <i class="fas fa-users me-2"></i>Guru & Staff
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <div class="container">
                            <div class="row align-items-center min-vh-100">
                                <div class="col-lg-8">
                                    <h1 class="hero-title animate-fade-in-up">
                                        Prestasi &<br>
                                        <span class="hero-title-accent">Ekstrakurikuler</span>
                                    </h1>
                                    <p class="hero-description animate-fade-in-up animation-delay-1">
                                        Berbagai kegiatan ekstrakurikuler dan prestasi siswa di berbagai bidang
                                    </p>
                                    <div class="hero-actions animate-fade-in-up animation-delay-2">
                                        <a href="/news" class="btn btn-light btn-lg me-3">
                                            <i class="fas fa-trophy me-2"></i>Prestasi Siswa
                                        </a>
                                        <a href="#programs" class="btn btn-outline-light btn-lg">
                                            <i class="fas fa-star me-2"></i>Program Unggulan
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- ===== SCHOOL PROFILE TOOL SECTION ===== -->
<section class="school-profile-section py-4">
    <div class="container">
        <div class="profile-tools">
            <div class="tool-item">
                <i class="fas fa-users"></i>
                <span>Siswa: 500+</span>
            </div>
            <div class="tool-item">
                <i class="fas fa-user-graduate"></i>
                <span>Guru: 25+</span>
            </div>
            <div class="tool-item">
                <i class="fas fa-award"></i>
                <span>Akreditasi: A</span>
            </div>
            <div class="tool-item">
                <i class="fas fa-calendar-alt"></i>
                <span>Didirikan: 2010</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== PREMIUM MAIN NAVBAR (ABOVE ABOUT SECTION) ===== -->
<nav class="premium-main-navbar">
    <div class="container-fluid">
        <div class="navbar-content">
            <div class="navbar-brand-section">
                <i class="fas fa-graduation-cap brand-icon"></i>
                <span class="brand-text">MTS Darul Ulum Nglumber</span>
            </div>

            <div class="navbar-menu">
                <a href="#about" class="nav-item">
                    <i class="fas fa-info-circle"></i>
                    <span>Tentang</span>
                </a>
                <a href="#programs" class="nav-item">
                    <i class="fas fa-star"></i>
                    <span>Program</span>
                </a>
                <a href="#news" class="nav-item">
                    <i class="fas fa-newspaper"></i>
                    <span>Berita</span>
                </a>
                <a href="#contact" class="nav-item">
                    <i class="fas fa-envelope"></i>
                    <span>Kontak</span>
                </a>
            </div>

            <div class="navbar-actions">
                <a href="/news" class="btn-nav-primary">
                    <i class="fas fa-eye"></i>
                    Lihat Berita
                </a>
                <a href="/contact" class="btn-nav-secondary">
                    <i class="fas fa-paper-plane"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- About Section -->
<div id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                     alt="Kampus MTS" class="img-fluid rounded mb-4">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Tentang Kami</h2>
                <p class="lead">
                    MTS Darul Ulum Nglumber adalah lembaga pendidikan Islam yang berkomitmen
                    memberikan pendidikan berkualitas tinggi dengan mengintegrasikan nilai-nilai
                    Islam dalam setiap aspek pembelajaran.
                </p>
                <p>
                    Kami fokus pada pembentukan karakter siswa yang berakhlak mulia, berprestasi akademik,
                    dan memiliki wawasan Islam yang luas.
                </p>
                <a href="/profile" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<!-- Programs Section -->
<div id="programs" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Program Unggulan</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="fas fa-quran fa-3x text-primary mb-3"></i>
                        <h5>Kurikulum Islam</h5>
                        <p>Penguatan program tahfidz, BTQ, dan akhlak islami</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x text-success mb-3"></i>
                        <h5>Ekstrakurikuler</h5>
                        <p>Berbagai kegiatan sesuai minat siswa</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <i class="fas fa-laptop fa-3x text-info mb-3"></i>
                        <h5>Teknologi Digital</h5>
                        <p>Pembelajaran dengan teknologi modern</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News Section -->
<div id="news" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Berita Terbaru</h2>
        <div class="row">
            <?php if (!empty($latestNews)): ?>
                <?php foreach (array_slice($latestNews, 0, 3) as $news): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="<?= $news['image'] ? base_url('uploads/' . $news['image']) : 'https://via.placeholder.com/400x250' ?>"
                                 class="card-img-top" alt="<?= $news['title'] ?>" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $news['title'] ?></h5>
                                <p class="card-text"><?= substr(strip_tags($news['content']), 0, 100) ?>...</p>
                                <a href="/news/<?= $news['slug'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p class="text-muted">Belum ada berita yang tersedia.</p>
                </div>
            <?php endif; ?>
        </div>
        <div class="text-center mt-4">
            <a href="/news" class="btn btn-outline-primary">Lihat Semua Berita</a>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div id="contact" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Hubungi Kami</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <form action="/contact" method="post">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subjek</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== ADVANCED INTERACTIONS ===== -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Counter Animation for Hero Stats
        function animateCounter(element, target) {
            let current = 0;
            const duration = 2000; // 2 seconds
            const step = target / (duration / 16); // 60fps
            const start = performance.now();

            function update(currentTime) {
                const elapsed = currentTime - start;
                const progress = Math.min(elapsed / duration, 1);

                // Easing function for smooth animation
                const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                current = Math.floor(target * easeOutQuart);

                element.textContent = current;

                if (progress < 1) {
                    requestAnimationFrame(update);
                } else {
                    element.textContent = target;
                }
            }

            requestAnimationFrame(update);
        }

        // Trigger counter animation when hero section is visible
        const heroSection = document.querySelector('.hero-section');
        if (heroSection) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counters = entry.target.querySelectorAll('.stat-number');
                        counters.forEach(counter => {
                            const target = parseInt(counter.getAttribute('data-target'));
                            animateCounter(counter, target);
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            observer.observe(heroSection);
        }

        // Enhanced Smooth Scrolling for Main Navbar
        document.querySelectorAll('.premium-main-navbar .nav-item').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);

                if (targetSection) {
                    const navbarHeight = document.querySelector('.premium-main-navbar').offsetHeight;
                    const offsetTop = targetSection.offsetTop - navbarHeight - 30;

                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });

                    // Add ripple effect
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                }
            });
        });

        // Active Navigation State Based on Scroll Position
        const sections = document.querySelectorAll('#about, #programs, #news, #contact');
        const navItems = document.querySelectorAll('.premium-main-navbar .nav-item');

        function updateActiveNavItem() {
            const scrollPosition = window.scrollY + 150;
            let currentSection = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    currentSection = section.getAttribute('id');
                }
            });

            navItems.forEach((item, index) => {
                const href = item.getAttribute('href').substring(1); // Remove #
                if (href === currentSection) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavItem);
        updateActiveNavItem(); // Initial check

        // Hero Carousel Auto-play Enhancement
        const heroCarousel = document.getElementById('heroCarousel');
        if (heroCarousel) {
            // Pause on hover
            heroCarousel.addEventListener('mouseenter', function() {
                const carousel = bootstrap.Carousel.getInstance(heroCarousel);
                if (carousel) carousel.pause();
            });

            heroCarousel.addEventListener('mouseleave', function() {
                const carousel = bootstrap.Carousel.getInstance(heroCarousel);
                if (carousel) carousel.cycle();
            });

            // Add slide transition effects
            heroCarousel.addEventListener('slide.bs.carousel', function(e) {
                const activeSlide = e.relatedTarget;
                const allSlides = heroCarousel.querySelectorAll('.carousel-item');

                allSlides.forEach(slide => {
                    slide.classList.remove('animate-fade-in-up', 'animate-scale-in');
                });

                setTimeout(() => {
                    const title = activeSlide.querySelector('.hero-title');
                    const description = activeSlide.querySelector('.hero-description');
                    const actions = activeSlide.querySelector('.hero-actions');
                    const visual = activeSlide.querySelector('.hero-visual');

                    if (title) title.classList.add('animate-fade-in-up');
                    if (description) description.classList.add('animate-fade-in-up');
                    if (actions) actions.classList.add('animate-fade-in-up');
                    if (visual) visual.classList.add('animate-scale-in');
                }, 100);
            });
        }

        // School Profile Tools Hover Effects
        document.querySelectorAll('.tool-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) rotate(2deg)';
            });

            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotate(0deg)';
            });
        });

        // Intersection Observer for Section Animations
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        // Observe all sections for fade-in effect
        document.querySelectorAll('section[id]').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            sectionObserver.observe(section);
        });

        // Parallax Effect for Hero Background
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroSlides = document.querySelectorAll('.hero-slide');

            heroSlides.forEach(slide => {
                const rate = scrolled * -0.5;
                slide.style.transform = `translateY(${rate}px)`;
            });
        });

        // Touch/Swipe Support for Mobile
        let touchStartX = 0;
        let touchEndX = 0;

        heroCarousel.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });

        heroCarousel.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            const carousel = bootstrap.Carousel.getInstance(heroCarousel);
            if (!carousel) return;

            const swipeThreshold = 50;

            if (touchEndX < touchStartX - swipeThreshold) {
                carousel.next();
            } else if (touchEndX > touchStartX + swipeThreshold) {
                carousel.prev();
            }
        }

    });
</script>

<style>
/* Enhanced Hero Section Styles */
.hero-section {
    position: relative;
    min-height: 100vh;
    overflow: hidden;
}

/* Dynamic Background Slider */
.hero-background-slider {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.hero-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0;
    transition: opacity 1.5s ease-in-out;
}

.hero-slide.active {
    opacity: 1;
}

.hero-overlay-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg,
        rgba(30, 64, 175, 0.85) 0%,
        rgba(55, 48, 163, 0.9) 50%,
        rgba(118, 75, 162, 0.85) 100%);
}

/* Floating Particles */
.hero-particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.particle {
    position: absolute;
    background: rgba(255, 193, 7, 0.6);
    border-radius: 50%;
    animation: float-particle 8s ease-in-out infinite;
}

.particle-1 {
    width: 4px;
    height: 4px;
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.particle-2 {
    width: 6px;
    height: 6px;
    top: 60%;
    left: 80%;
    animation-delay: 2s;
}

.particle-3 {
    width: 3px;
    height: 3px;
    top: 40%;
    left: 60%;
    animation-delay: 4s;
}

.particle-4 {
    width: 5px;
    height: 5px;
    top: 80%;
    left: 30%;
    animation-delay: 1s;
}

.particle-5 {
    width: 4px;
    height: 4px;
    top: 30%;
    left: 90%;
    animation-delay: 3s;
}

/* Enhanced Hero Content */
.hero-content {
    position: relative;
    z-index: 3;
}

.hero-badge-container {
    perspective: 1000px;
}

.hero-badge {
    display: inline-block;
    background: linear-gradient(135deg, #ffd700, #ffb347);
    color: #1e40af;
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    box-shadow: 0 8px 25px rgba(255, 193, 7, 0.3);
    position: relative;
    overflow: hidden;
    animation: badge-enter 1s ease-out;
}

.badge-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    animation: shine 3s ease-in-out infinite;
}

.hero-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 1rem;
    animation: title-slide-in 1.2s ease-out;
}

.hero-title-main {
    color: white;
    display: block;
}

.hero-title-accent {
    background: linear-gradient(45deg, #ffd700, #ffb347, #ff8c00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
}

.hero-title-accent::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #ffd700, #ffb347);
    border-radius: 2px;
    animation: underline-expand 1.5s ease-out 0.5s both;
}

.hero-subtitle {
    color: #ffd700;
    font-weight: 300;
    font-size: clamp(1.2rem, 3vw, 1.8rem);
    display: block;
    margin-top: 0.5rem;
}

.hero-title-underline {
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2);
    border-radius: 2px;
    margin-top: 1rem;
}

.hero-description {
    font-size: 1.1rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 2rem;
    animation: fade-in-up 1s ease-out 0.3s both;
}

.highlight-text {
    color: #ffd700;
    font-weight: 600;
    position: relative;
}

.highlight-text::after {
    content: '';
    position: absolute;
    bottom: 2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: rgba(255, 193, 7, 0.5);
    border-radius: 1px;
}

/* Enhanced CTA Buttons */
.hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 3rem;
}

.btn-hero-primary,
.btn-hero-secondary {
    position: relative;
    padding: 16px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    text-decoration: none;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 2px solid transparent;
    min-width: 200px;
    text-align: center;
}

.btn-hero-primary {
    background: linear-gradient(135deg, #ffd700, #ffb347);
    color: #1e40af;
    box-shadow: 0 8px 25px rgba(255, 193, 7, 0.3);
}

.btn-hero-primary:hover {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 15px 40px rgba(255, 193, 7, 0.5);
    background: linear-gradient(135deg, #ffb347, #ff8c00);
}

.btn-hero-secondary {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    color: white;
    border-color: rgba(255, 255, 255, 0.3);
}

.btn-hero-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-5px) scale(1.05);
    border-color: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 40px rgba(255, 255, 255, 0.2);
}

.btn-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-glow {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.btn-hero-primary:hover .btn-glow,
.btn-hero-secondary:hover .btn-glow {
    opacity: 1;
}

/* Interactive Stats */
.hero-stats {
    animation: fade-in-up 1s ease-out 0.6s both;
}

.stats-container {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
}

.stat-item {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    padding: 1.5rem;
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.2);
    min-width: 140px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}

.stat-item:hover {
    transform: translateY(-8px) scale(1.05);
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 193, 7, 0.3);
    box-shadow: 0 15px 40px rgba(255, 193, 7, 0.2);
}

.stat-icon {
    font-size: 2rem;
    color: #ffd700;
    margin-bottom: 1rem;
    transition: transform 0.3s ease;
}

.stat-item:hover .stat-icon {
    transform: scale(1.2) rotate(5deg);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #ffd700;
    display: block;
    margin-bottom: 0.5rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.stat-label {
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.9rem;
    font-weight: 500;
}

.stat-sparkle {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 6px;
    height: 6px;
    background: #ffd700;
    border-radius: 50%;
    animation: sparkle 2s ease-in-out infinite;
}

/* Enhanced Hero Visual */
.hero-visual {
    position: relative;
    z-index: 3;
}

.hero-image-container {
    position: relative;
}

.hero-image-wrapper {
    position: relative;
    display: inline-block;
}

.hero-main-image {
    border-radius: 25px;
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.4);
    max-width: 100%;
    height: auto;
    transition: all 0.5s ease;
    border: 3px solid rgba(255, 193, 7, 0.3);
}

.hero-main-image:hover {
    transform: scale(1.02) rotate(1deg);
    box-shadow: 0 30px 100px rgba(0, 0, 0, 0.5);
}

/* Enhanced Achievement Cards */
.achievement-card {
    position: absolute;
    background: white;
    border-radius: 20px;
    padding: 1.5rem;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
    border: 2px solid transparent;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    animation: card-float 4s ease-in-out infinite;
}

.achievement-card:hover {
    transform: scale(1.1) rotate(5deg);
    border-color: #ffd700;
    box-shadow: 0 20px 60px rgba(255, 193, 7, 0.4);
}

.card-1 {
    top: -30px;
    right: -30px;
    animation-delay: 0s;
}

.card-2 {
    bottom: -30px;
    left: -30px;
    animation-delay: 1.5s;
}

.card-3 {
    top: 50%;
    left: -40px;
    animation-delay: 3s;
}

.card-glow {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #ffd700, #ffb347, #ff8c00, #ffd700);
    border-radius: 22px;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: -1;
}

.achievement-card:hover .card-glow {
    opacity: 0.8;
}

.card-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.achievement-card:hover .card-icon {
    transform: scale(1.2) rotate(10deg);
}

.card-value {
    font-size: 2rem;
    font-weight: 800;
    color: #667eea;
    display: block;
    margin-bottom: 0.25rem;
}

.card-label {
    font-size: 0.85rem;
    color: #666;
    font-weight: 600;
}

.card-particles {
    position: absolute;
    top: 10px;
    right: 10px;
}

.card-particles span {
    display: inline-block;
    width: 3px;
    height: 3px;
    background: #ffd700;
    border-radius: 50%;
    margin: 0 1px;
    animation: particle-float 2s ease-in-out infinite;
}

.card-particles span:nth-child(2) { animation-delay: 0.3s; }
.card-particles span:nth-child(3) { animation-delay: 0.6s; }

/* Interactive Elements */
.hero-interactive-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
}

.interactive-circle {
    position: absolute;
    border: 2px solid rgba(255, 193, 7, 0.3);
    border-radius: 50%;
    animation: orbit 8s linear infinite;
}

.circle-1 {
    width: 100px;
    height: 100px;
    top: 10%;
    right: 10%;
}

.circle-2 {
    width: 60px;
    height: 60px;
    bottom: 20%;
    left: 15%;
    animation-delay: 2s;
}

.interactive-dots {
    position: absolute;
    bottom: 15%;
    right: 20%;
}

.dot {
    display: inline-block;
    width: 8px;
    height: 8px;
    background: #ffd700;
    border-radius: 50%;
    margin: 0 3px;
    animation: blink 2s ease-in-out infinite;
}

.dot-2 { animation-delay: 0.3s; }
.dot-3 { animation-delay: 0.6s; }

/* Hero Decoration */
.hero-decoration {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
}

.decoration-ring {
    position: absolute;
    border: 1px solid rgba(255, 193, 7, 0.2);
    border-radius: 50%;
    animation: spin-slow 10s linear infinite;
}

.ring-1 {
    width: 200px;
    height: 200px;
    top: 20%;
    left: 10%;
}

.ring-2 {
    width: 150px;
    height: 150px;
    bottom: 25%;
    right: 15%;
    animation-delay: 3s;
}

.decoration-stars {
    position: absolute;
    top: 25%;
    right: 25%;
}

.decoration-stars i {
    color: #ffd700;
    font-size: 1rem;
    margin: 0 2px;
    animation: twinkle 3s ease-in-out infinite;
}

.star-2 { animation-delay: 1s; }
.star-3 { animation-delay: 2s; }

/* Enhanced Scroll Indicator */
.scroll-indicator {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 4;
    text-align: center;
    animation: bounce-gentle 3s ease-in-out infinite;
}

.scroll-mouse {
    width: 28px;
    height: 42px;
    border: 3px solid rgba(255, 255, 255, 0.8);
    border-radius: 14px;
    position: relative;
    margin: 0 auto 15px;
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(5px);
}

.scroll-wheel {
    width: 6px;
    height: 10px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 3px;
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    animation: scroll-infinite 2s ease-in-out infinite;
}

.scroll-glow {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    border-radius: 16px;
    background: linear-gradient(45deg, rgba(255, 193, 7, 0.3), transparent, rgba(255, 193, 7, 0.3));
    animation: glow-pulse 2s ease-in-out infinite;
}

.scroll-text {
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 10px;
    animation: text-pulse 3s ease-in-out infinite;
}

.scroll-arrow-container {
    animation: bounce-arrow 2s ease-in-out infinite;
}

.scroll-arrow {
    color: #ffd700;
    font-size: 1.2rem;
}

.scroll-progress {
    width: 60px;
    height: 2px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 1px;
    margin: 10px auto 0;
    overflow: hidden;
}

.progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #ffd700, #ffb347);
    border-radius: 1px;
    width: 0%;
}

/* Hero Navigation */
.hero-navigation {
    position: absolute;
    bottom: 30px;
    right: 30px;
    z-index: 4;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.nav-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 2px solid rgba(255, 255, 255, 0.5);
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
}

.nav-dot.active {
    background: #ffd700;
    border-color: #ffd700;
    transform: scale(1.2);
}

.nav-dot:hover {
    border-color: rgba(255, 255, 255, 0.8);
    transform: scale(1.1);
}

/* Features Section */
.features-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    position: relative;
}

.features-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23e2e8f0' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.feature-card {
    background: white;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 2px solid transparent;
    height: 100%;
}

.feature-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border-color: var(--primary-color);
}

.feature-icon-wrapper {
    position: relative;
    margin-bottom: 1.5rem;
}

.feature-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    margin: 0 auto;
    position: relative;
    z-index: 2;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}

.feature-card:hover .feature-icon {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.feature-icon.bg-primary { background: linear-gradient(135deg, #667eea, #764ba2); }
.feature-icon.bg-success { background: linear-gradient(135deg, #48bb78, #38a169); }
.feature-icon.bg-info { background: linear-gradient(135deg, #4299e1, #3182ce); }
.feature-icon.bg-warning { background: linear-gradient(135deg, #ed8936, #dd6b20); }

.feature-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 1rem;
}

.feature-description {
    color: #718096;
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

.feature-hover-effect {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 20px;
}

.feature-card:hover .feature-hover-effect {
    opacity: 1;
}

/* Quick Access Section */
.quick-access-section {
    position: relative;
    z-index: 2;
}

.quick-access-btn {
    display: inline-flex;
    align-items: center;
    padding: 12px 24px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    border: 2px solid transparent;
}

.quick-access-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    background: linear-gradient(135deg, #5a67d8, #6b46c1);
    border-color: rgba(255, 255, 255, 0.2);
    color: white;
    text-decoration: none;
}

.quick-access-btn:active {
    transform: translateY(-1px);
}

/* News Section */
.section-header {
    margin-bottom: 3rem;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1rem;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background: linear-gradient(45deg, #667eea, #764ba2);
    border-radius: 2px;
}

.section-subtitle {
    font-size: 1.1rem;
    color: #6c757d;
    max-width: 600px;
    margin: 0 auto;
}

.featured-news-card {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
}

.sidebar-news-item {
    transition: all 0.3s ease;
}

.sidebar-news-item:hover {
    transform: translateX(5px);
}

/* Announcements Section */
.announcements-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
}

.announcements-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.announcement-card {
    position: relative;
    z-index: 2;
    transition: transform 0.3s ease;
}

.announcement-card:hover {
    transform: translateY(-10px);
}

/* Events Section */
.event-card {
    transition: all 0.3s ease;
}

.event-card:hover {
    transform: translateY(-10px);
}

.event-date {
    position: relative;
}

.date-circle {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.date-day {
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
}

.date-month {
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: uppercase;
    margin-top: 2px;
}

.meta-item {
    display: flex;
    align-items: center;
    margin-bottom: 5px;
}

/* Gallery Preview Section */
.gallery-preview-section {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(248, 250, 252, 0.8));
    border-radius: 20px;
    padding: 2rem;
    margin-top: 3rem;
}

.gallery-preview-item {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 2px solid transparent;
}

.gallery-preview-item:hover {
    transform: scale(1.08) rotate(2deg);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.2);
    border-color: rgba(255, 193, 7, 0.3);
}

.gallery-preview-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: all 0.5s ease;
    filter: brightness(0.9);
}

.gallery-preview-item:hover .gallery-preview-img {
    transform: scale(1.15);
    filter: brightness(1.1) contrast(1.1);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    opacity: 0;
    transition: all 0.4s ease;
    backdrop-filter: blur(5px);
}

.gallery-preview-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-content {
    text-align: center;
    transform: translateY(20px);
    transition: transform 0.4s ease;
}

.gallery-preview-item:hover .gallery-content {
    transform: translateY(0);
}

.gallery-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #ffd700;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    animation: icon-bounce 0.6s ease-out;
}

.gallery-content h5 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.gallery-content p {
    font-size: 0.9rem;
    opacity: 0.9;
    margin: 0;
}

.gallery-hover-effect {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #ffd700, #ffb347, #ff8c00, #ffd700);
    border-radius: 22px;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: -1;
}

.gallery-preview-item:hover .gallery-hover-effect {
    opacity: 0.8;
}

.btn-gallery-view-all {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    border: 2px solid transparent;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    display: inline-flex;
    align-items: center;
}

.btn-gallery-view-all:hover {
    transform: translateY(-3px);
    background: linear-gradient(135deg, #5a67d8, #6b46c1);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.5);
    color: white;
    text-decoration: none;
}

/* Quick Access Section */
.quick-access-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    border-radius: 20px;
    padding: 3rem 2rem;
    margin-top: 3rem;
}

.quick-access-container {
    max-width: 1200px;
    margin: 0 auto;
}

.quick-access-card {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 15px;
    padding: 1.5rem;
    text-decoration: none;
    color: #374151;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    border: 2px solid transparent;
    min-width: 280px;
    position: relative;
    overflow: hidden;
}

.quick-access-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
    transition: left 0.6s ease;
}

.quick-access-card:hover::before {
    left: 100%;
}

.quick-access-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    border-color: rgba(102, 126, 234, 0.2);
    color: #374151;
    text-decoration: none;
}

.quick-access-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-right: 1rem;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    transition: all 0.3s ease;
    flex-shrink: 0;
}

.quick-access-card:hover .quick-access-icon {
    transform: scale(1.1) rotate(5deg);
    background: linear-gradient(135deg, #ffd700, #ffb347);
    color: #1e40af;
}

.quick-access-content {
    flex: 1;
}

.quick-access-content h6 {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
    color: #1e40af;
}

.quick-access-content p {
    font-size: 0.9rem;
    color: #6b7280;
    margin: 0;
}

.quick-access-arrow {
    font-size: 1.2rem;
    color: #9ca3af;
    transition: all 0.3s ease;
    margin-left: 1rem;
}

.quick-access-card:hover .quick-access-arrow {
    color: #667eea;
    transform: translateX(5px);
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.cta-buttons {
    position: relative;
    z-index: 2;
}

.cta-icon {
    animation: float 3s ease-in-out infinite;
}

/* Animations */
/* Enhanced Animations */
@keyframes badge-enter {
    0% {
        opacity: 0;
        transform: translateY(-20px) scale(0.8);
    }
    50% {
        opacity: 0.8;
        transform: translateY(-5px) scale(1.05);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

@keyframes shine {
    0% { left: -100%; }
    100% { left: 100%; }
}

@keyframes title-slide-in {
    0% {
        opacity: 0;
        transform: translateY(50px) rotateX(20deg);
    }
    100% {
        opacity: 1;
        transform: translateY(0) rotateX(0deg);
    }
}

@keyframes underline-expand {
    0% { width: 0%; }
    100% { width: 100%; }
}

@keyframes text-glow {
    0%, 100% {
        text-shadow: 0 0 10px rgba(255, 193, 7, 0.5);
    }
    50% {
        text-shadow: 0 0 20px rgba(255, 193, 7, 0.8), 0 0 30px rgba(255, 193, 7, 0.6);
    }
}

@keyframes fade-in-up {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slide-up {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes expand {
    0% { width: 0%; }
    100% { width: 100%; }
}

@keyframes hover-lift {
    0% {
        transform: translateY(0) scale(1);
    }
    50% {
        transform: translateY(-3px) scale(1.02);
    }
    100% {
        transform: translateY(-5px) scale(1.05);
    }
}

@keyframes count-up {
    0% {
        opacity: 0;
        transform: translateY(20px) scale(0.8);
    }
    50% {
        opacity: 0.7;
        transform: translateY(-5px) scale(1.1);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

@keyframes sparkle {
    0%, 100% {
        opacity: 0.3;
        transform: scale(1);
    }
    50% {
        opacity: 1;
        transform: scale(1.2);
    }
}

@keyframes float-particle {
    0%, 100% {
        opacity: 0;
        transform: translateY(0px) translateX(0px);
    }
    25% {
        opacity: 0.5;
        transform: translateY(-20px) translateX(10px);
    }
    50% {
        opacity: 0.8;
        transform: translateY(-40px) translateX(-10px);
    }
    75% {
        opacity: 0.5;
        transform: translateY(-20px) translateX(-5px);
    }
}

@keyframes card-float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    33% {
        transform: translateY(-10px) rotate(2deg);
    }
    66% {
        transform: translateY(-5px) rotate(-1deg);
    }
}

@keyframes scale-in {
    0% {
        opacity: 0;
        transform: scale(0.5);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes orbit {
    0% { transform: rotate(0deg) translateX(50px) rotate(0deg); }
    100% { transform: rotate(360deg) translateX(50px) rotate(-360deg); }
}

@keyframes blink {
    0%, 50% { opacity: 0.3; }
    51%, 100% { opacity: 1; }
}

@keyframes spin-slow {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes twinkle {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.2); }
}

@keyframes bounce-gentle {
    0%, 100% {
        transform: translateX(-50%) translateY(0);
    }
    50% {
        transform: translateX(-50%) translateY(-10px);
    }
}

@keyframes scroll-infinite {
    0% {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }
    50% {
        opacity: 0.5;
        transform: translateX(-50%) translateY(8px);
    }
    100% {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }
}

@keyframes glow-pulse {
    0%, 100% {
        opacity: 0.3;
        transform: scale(1);
    }
    50% {
        opacity: 0.7;
        transform: scale(1.05);
    }
}

@keyframes text-pulse {
    0%, 100% {
        opacity: 0.7;
    }
    50% {
        opacity: 1;
    }
}

@keyframes bounce-arrow {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(5px);
    }
}

@keyframes particle-float {
    0%, 100% { opacity: 0.5; transform: translateY(0); }
    50% { opacity: 1; transform: translateY(-5px); }
}

@keyframes pulse-glow {
    0%, 100% {
        box-shadow: 0 0 20px rgba(255, 193, 7, 0.3);
    }
    50% {
        box-shadow: 0 0 30px rgba(255, 193, 7, 0.6), 0 0 40px rgba(255, 193, 7, 0.4);
    }
}

/* Utility Animation Classes */
.animate-fade-in-up { animation: fade-in-up 1s ease-out; }
.animate-slide-up { animation: slide-up 1s ease-out; }
.animate-expand { animation: expand 1s ease-out; }
.animate-hover-lift { animation: hover-lift 0.3s ease-out; }
.animate-count-up { animation: count-up 1s ease-out; }
.animate-float { animation: card-float 4s ease-in-out infinite; }
.animate-scale-in { animation: scale-in 0.6s ease-out; }
.animate-orbit { animation: orbit 8s linear infinite; }
.animate-blink { animation: blink 2s ease-in-out infinite; }
.animate-spin-slow { animation: spin-slow 10s linear infinite; }
.animate-twinkle { animation: twinkle 3s ease-in-out infinite; }
.animate-pulse-glow { animation: pulse-glow 2s ease-in-out infinite; }
.animate-text-glow { animation: text-glow 2s ease-in-out infinite; }
.animate-bounce { animation: bounce-gentle 3s ease-in-out infinite; }
.animate-scroll-infinite { animation: scroll-infinite 2s ease-in-out infinite; }

.animation-delay-1 { animation-delay: 0.2s; }
.animation-delay-2 { animation-delay: 0.4s; }
.animation-delay-3 { animation-delay: 0.6s; }
.animation-delay-4 { animation-delay: 0.8s; }
.animation-delay-5 { animation-delay: 1s; }

@keyframes icon-bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

.animate-icon-bounce {
    animation: icon-bounce 1s ease-out;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }
    50% {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
    }
}

.animate-pulse {
    animation: pulse 2s ease-in-out infinite;
}

.animation-delay-1 { animation-delay: 0.2s; }
.animation-delay-2 { animation-delay: 0.4s; }
.animation-delay-3 { animation-delay: 0.6s; }
.animation-delay-4 { animation-delay: 0.8s; }
.animation-delay-5 { animation-delay: 1s; }

/* Responsive Design */
@media (max-width: 768px) {
    .hero-section {
        min-height: auto;
        padding: 100px 0 50px;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .hero-description {
        font-size: 1rem;
    }

    .hero-stats {
        margin-top: 30px;
    }

    .stat-item {
        margin-bottom: 15px;
    }

    .floating-card {
        position: static;
        margin-top: 20px;
        width: 100%;
    }

    .section-title {
        font-size: 2rem;
    }

    .featured-news-card .row > div {
        margin-bottom: 20px;
    }

    .sidebar-news {
        margin-top: 30px;
    }

    .cta-section .row > div {
        text-align: center !important;
        margin-bottom: 30px;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }

    .hero-buttons .btn {
        width: 100%;
        margin-bottom: 10px;
    }

    .features-section .col-lg-3 {
        margin-bottom: 30px;
    }

    .feature-card {
        padding: 1.5rem 1rem;
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        font-size: 1.5rem;
    }

    .feature-title {
        font-size: 1.1rem;
    }

    .quick-access-btn {
        padding: 10px 20px;
        font-size: 0.9rem;
        margin-bottom: 10px;
    }

    .gallery-preview-grid .col-lg-3 {
        margin-bottom: 20px;
    }
}

@media (max-width: 480px) {
    .hero-section {
        padding: 80px 0 40px;
    }

    .hero-title {
        font-size: 1.75rem;
    }

    .hero-description {
        font-size: 0.95rem;
    }

    .section-title {
        font-size: 1.75rem;
    }

    .feature-card {
        padding: 1.25rem 0.75rem;
    }

    .quick-access-section .col-auto {
        width: 100%;
        margin-bottom: 10px;
    }

    .quick-access-btn {
        justify-content: center;
        width: 100%;
    }
}

/* Utility Classes */
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.min-vh-75 {
    min-height: 75vh;
}

.empty-state {
    background: #f8f9fa;
    border-radius: 15px;
    padding: 60px 40px;
}
</style>