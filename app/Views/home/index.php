<!-- Home Page Identifier -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.body.classList.add('home-page');
    });
</script>

<!-- ===== HERO SECTION WITH PHOTO SLIDES ===== -->
<section class="hero-section">
    <!-- Logo Box in Top Left Corner -->
    <div class="hero-logo-box">
        <a href="/" class="logo-blob">
            <img src="/uploads/logo.png" alt="Logo" class="logo-img-blob">
            <div class="logo-text-blob">
                <span class="logo-main-blob">MTS Darul Ulum</span>
                <span class="logo-sub-blob">Nglumber</span>
            </div>
        </a>
    </div>

        <div class="hero-slide" style="background-image: url('/uploads/fotohero.jpg');">

            <div class="hero-content">

                <div class="container">

                    <div class="row align-items-center min-vh-100">

                        <div class="col-lg-8">

                        </div>

                        <div class="col-lg-4 d-none d-lg-block">

                            <div class="hero-visual">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
</section>

<!-- ===== SCHOOL PROFILE TOOL SECTION ===== -->
<section class="school-profile-section py-2">
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
            <a href="/profile/identity" class="tool-item-link">
                <div class="tool-item">
                    <i class="fas fa-award"></i>
                    <span>Akreditasi: A</span>
                </div>
            </a>
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
            <ul class="navbar-menu">
                <li class="nav-item">
                    <a href="/" class="nav-link-custom">
                        <i class="fas fa-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link-custom">
                        <i class="fas fa-info-circle"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#news" class="nav-link-custom">
                        <i class="fas fa-newspaper"></i>
                        <span>Berita</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/teachers" class="nav-link-custom">
                        <i class="fas fa-users"></i>
                        <span>Guru</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/gallery" class="nav-link-custom">
                        <i class="fas fa-images"></i>
                        <span>Galeri</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link-custom">
                        <i class="fas fa-envelope"></i>
                        <span>Kontak</span>
                    </a>
                </li>
            </ul>

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

<!-- Sambutan Kepala Sekolah Section -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <img src="<?= base_url('uploads/kepalasekolah.jpg') ?>"
                      alt="Foto Kepala Sekolah" class="img-kepala-sekolah shadow">
            </div>
            <div class="col-lg-7">
                <h2 class="mb-4" style="color: #0F3D3E;">Sambutan Kepala Sekolah</h2>
                <div id="sambutan-text" class="sambutan-text-container">
                    <p class="text-sambutan lead">
                        Assalamualaikum Wr. Wb.
                    </p>
                    <p class="text-sambutan">
                        Puji syukur kehadirat Allah SWT yang telah melimpahkan rahmat dan hidayah-Nya kepada kita semua. Selamat datang di website resmi MTS Darul Ulum Nglumber. Website ini kami hadirkan sebagai media informasi dan komunikasi bagi seluruh civitas akademika, alumni, serta masyarakat luas.
                    </p>
                    <div class="sambutan-full-text">
                        <p class="text-sambutan">
                            Kami berharap, melalui website ini, Anda dapat mengenal lebih dekat profil sekolah kami, program-program unggulan, serta berbagai prestasi yang telah kami raih. MTS Darul Ulum Nglumber berkomitmen untuk mencetak generasi yang tidak hanya unggul dalam bidang akademik, tetapi juga berakhlak mulia dan berwawasan Islam yang kuat. Mari bersama-sama kita majukan pendidikan untuk masa depan generasi penerus bangsa yang lebih baik.
                        </p>
                        <p class="text-sambutan">
                            Wassalamualaikum Wr. Wb.
                        </p>
                    </div>
                </div>
                <button id="btn-baca-sambutan" class="btn btn-sambutan mt-3">
                    <i class="fas fa-chevron-down me-2"></i>Baca Selengkapnya
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section id="programs" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 text-success">Program Unggulan</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center h-100 shadow-sm program-card">
                    <div class="card-body">
                        <i class="fas fa-quran fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Kurikulum Islam</h5>
                        <p class="card-text text-muted">Penguatan program tahfidz, BTQ, dan akhlak islami</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center h-100 shadow-sm program-card">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Ekstrakurikuler</h5>
                        <p class="card-text text-muted">Berbagai kegiatan sesuai minat siswa</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center h-100 shadow-sm program-card">
                    <div class="card-body">
                        <i class="fas fa-laptop fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Teknologi Digital</h5>
                        <p class="card-text text-muted">Pembelajaran dengan teknologi modern</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section id="news" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 text-success">Berita Terbaru</h2>
        <div class="row">
            <?php if (!empty($latestNews)): ?>
                <?php foreach (array_slice($latestNews, 0, 3) as $news): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm news-card">
                            <img src="<?= $news['image'] ? base_url('uploads/' . $news['image']) : 'https://via.placeholder.com/400x250' ?>"
                                 class="card-img-top" alt="<?= $news['title'] ?>" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title text-success"><?= $news['title'] ?></h5>
                                <p class="card-text text-muted"><?= substr(strip_tags($news['content']), 0, 100) ?>...</p>
                                <a href="/news/<?= $news['slug'] ?>" class="btn btn-success">
                                    <i class="fas fa-arrow-right me-2"></i>Baca Selengkapnya
                                </a>
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
            <a href="/news" class="btn btn-outline-success">
                <i class="fas fa-list me-2"></i>Lihat Semua Berita
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 text-success">Hubungi Kami</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow contact-card">
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
                                <button type="submit" class="btn btn-success btn-lg px-5">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                const href = this.getAttribute('href');

                // If it's an anchor link (starts with #), do smooth scrolling
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    const targetId = href;
                    const targetSection = document.querySelector(targetId);

                    if (targetSection) {
                        // On home page, no header offset needed since header is hidden
                        const offsetTop = targetSection.offsetTop - 20;

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
                }
                // For page navigation links, let them work normally (no preventDefault)
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

            navItems.forEach((item) => {
                const href = item.getAttribute('href');
                // Check if href is an anchor link and matches current section
                if (href && href.startsWith('#') && href.substring(1) === currentSection) {
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

        // Enhanced Intersection Observer for Section Animations
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    // Add staggered animation for child elements
                    const children = entry.target.querySelectorAll('.animate-on-scroll');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('animated');
                        }, index * 100);
                    });
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe all sections for fade-in effect
        document.querySelectorAll('section[id]').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            sectionObserver.observe(section);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"], a[href*="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');

                // Check if it's an anchor link (contains #)
                if (href.includes('#')) {
                    e.preventDefault();
                    const targetId = href.split('#')[1];
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const headerOffset = 80; // Account for fixed header
                        const elementPosition = targetElement.offsetTop;
                        const offsetPosition = elementPosition - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });

                        // Close mobile menu if open
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                                hide: true
                            });
                        }
                    }
                }
            });
        });

        // Enhanced form animations
        const formInputs = document.querySelectorAll('.form-input');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });

        // Button loading animation
        const contactForm = document.querySelector('.contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('.btn-contact-submit');
                const btnText = submitBtn.querySelector('.btn-text');
                const btnLoading = submitBtn.querySelector('.btn-loading');

                btnText.style.display = 'none';
                btnLoading.style.display = 'flex';
                submitBtn.disabled = true;

                // Simulate form submission (remove this in production)
                setTimeout(() => {
                    btnText.style.display = 'flex';
                    btnLoading.style.display = 'none';
                    submitBtn.disabled = false;
                }, 2000);
            });
        }

        // Sambutan Kepala Sekolah Read More
        const btnBacaSambutan = document.getElementById('btn-baca-sambutan');
        const sambutanText = document.getElementById('sambutan-text');

        if (btnBacaSambutan && sambutanText) {
            btnBacaSambutan.addEventListener('click', function() {
                sambutanText.classList.toggle('expanded');
                if (sambutanText.classList.contains('expanded')) {
                    this.innerHTML = '<i class="fas fa-chevron-up me-2"></i>Tutup';
                } else {
                    this.innerHTML = '<i class="fas fa-chevron-down me-2"></i>Baca Selengkapnya';
                }
            });
        }

        // Manual dropdown toggle for home navbar
        const profileDropdownHome = document.getElementById('profileDropdownHome');
        const profileDropdownMenu = document.querySelector('#profileDropdownHome + .dropdown-menu') || document.querySelector('[aria-labelledby="profileDropdownHome"]');

        if (profileDropdownHome && profileDropdownMenu) {
            profileDropdownHome.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Close other dropdowns
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    if (menu !== profileDropdownMenu) {
                        menu.classList.remove('show');
                    }
                });

                // Toggle current dropdown
                profileDropdownMenu.classList.toggle('show');
                this.setAttribute('aria-expanded', profileDropdownMenu.classList.contains('show'));
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!profileDropdownHome.contains(e.target) && !profileDropdownMenu.contains(e.target)) {
                    profileDropdownMenu.classList.remove('show');
                    profileDropdownHome.setAttribute('aria-expanded', 'false');
                }
            });

            // Handle dropdown item clicks - allow navigation
            profileDropdownMenu.addEventListener('click', function(e) {
                // Only prevent default if clicking on non-link elements
                if (!e.target.closest('.dropdown-item')) {
                    e.stopPropagation();
                }
                // Let dropdown items handle their own navigation
            });
        }



        // Enhanced card hover effects
        const programCards = document.querySelectorAll('.program-card');
        programCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.02) rotate(1deg)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1) rotate(0deg)';
            });
        });

        // Smooth parallax effect for about section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const aboutImage = document.querySelector('.about-main-image');
            if (aboutImage) {
                const rate = scrolled * -0.3;
                aboutImage.style.transform = `translateY(${rate}px) scale(${1 + scrolled * 0.0001})`;
            }
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

/* Logo Box in Top Left Corner */
.hero-logo-box {
    position: absolute;
    top: 4rem;
    left: 2rem;
    z-index: 10;
}

.logo-blob {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(248, 249, 250, 0.9));
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 50% 20% 50% 20%;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    border: 3px solid rgba(212, 175, 55, 0.3);
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    animation: blob-float 6s ease-in-out infinite;
    text-decoration: none;
}

.logo-blob:hover {
    transform: scale(1.05) rotate(5deg);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
    border-color: #D4AF37;
}

.logo-icon-blob {
    font-size: 2.5rem;
    color: #D4AF37;
    background: rgba(212, 175, 55, 0.1);
    padding: 0.75rem;
    border-radius: 50%;
    border: 2px solid rgba(212, 175, 55, 0.2);
}

.logo-img-blob {
    height: 3.5rem;
    width: auto;
}

.logo-text-blob {
    display: flex;
    flex-direction: column;
}

.logo-main-blob {
    font-size: 1.1rem;
    font-weight: 700;
    color: #0F3D3E;
    line-height: 1.2;
}

.logo-sub-blob {
    font-size: 0.8rem;
    font-weight: 500;
    color: #D4AF37;
    text-transform: uppercase;
    letter-spacing: 1px;
}

@keyframes blob-float {
    0%, 100% {
        transform: rotate(0deg);
    }
    33% {
        transform: rotate(2deg);
    }
    66% {
        transform: rotate(-1deg);
    }
}



/* Hide header navbar on home page only */
body.home-page .premium-header {
    display: none !important;
}

body.home-page {
    padding-top: 0 !important;
}

/* Sambutan Kepala Sekolah Section */
.img-kepala-sekolah {
    width: 300px;
    height: 300px;
    object-fit: cover;
    border-radius: 50%;
    border: 8px solid white;
    box-shadow: 0 10px 40px rgba(15, 61, 62, 0.2);
}

.text-sambutan {
    color: #0F3D3E; /* Green theme color */
}

.sambutan-text-container {
    max-height: 170px; /* Initial height for the preview */
    overflow: hidden;
    position: relative;
    transition: max-height 0.7s ease-in-out;
}

.sambutan-text-container::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;
    background: linear-gradient(to top, rgba(248, 249, 250, 1), rgba(248, 249, 250, 0));
    pointer-events: none; /* Allows clicking through the gradient */
}

.sambutan-text-container.expanded {
    max-height: 1000px; /* Large enough to show all content */
}

.sambutan-text-container.expanded::after {
    display: none;
}

.btn-sambutan {
    background-color: #0F3D3E;
    border-color: #0F3D3E;
    color: white;
    transition: all 0.3s ease;
}

.btn-sambutan:hover {
    background-color: #D4AF37; /* Gold color from theme for hover */
    border-color: #D4AF37;
    color: #0F3D3E;
    transform: translateY(-2px);
}

/* ===== PREMIUM MAIN NAVBAR (ABOVE ABOUT SECTION) ===== */
.premium-main-navbar {
    background: linear-gradient(135deg, rgba(0, 77, 64, 0.95), rgba(0, 105, 92, 0.95));
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-top: 3px solid rgba(255, 215, 0, 0.6);
    border-bottom: 3px solid rgba(255, 215, 0, 0.4);
    box-shadow: 0 12px 40px rgba(0, 77, 64, 0.3), 0 0 0 1px rgba(255, 215, 0, 0.1);
    animation: slide-up 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    margin-bottom: 2rem;
    margin-top: 1rem;
    position: relative;
    z-index: 1000;
    border-radius: 15px;
    margin-left: 1rem;
    margin-right: 1rem;
}

.premium-main-navbar::before {
    content: '';
    position: absolute;
    top: -3px;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, #FFD700, #FFA500, #FFD700, transparent);
    border-radius: 15px 15px 0 0;
}

.premium-main-navbar::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, #FFD700, #FFA500, #FFD700, transparent);
    border-radius: 0 0 15px 15px;
}

.navbar-content {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem 1.5rem;
    max-width: 1200px;
    margin: 0 auto;
}

.navbar-brand-section {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.brand-icon {
    font-size: 1.8rem;
    color: #FFD700;
    background: rgba(255, 215, 0, 0.1);
    padding: 0.75rem;
    border-radius: 50%;
    border: 3px solid rgba(255, 215, 0, 0.4);
    box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
    transition: all 0.3s ease;
}

.brand-icon:hover {
    transform: scale(1.1) rotate(5deg);
    background: rgba(255, 215, 0, 0.2);
    border-color: #FFD700;
}

.brand-text {
    color: white;
    font-weight: 700;
    font-size: 1rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.navbar-menu {
    display: flex;
    gap: 2rem;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: rgba(255, 255, 255, 0.9);
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    padding: 0.5rem 0.75rem;
    border-radius: 15px;
    position: relative;
    overflow: hidden;
    border: 2px solid transparent;
    min-height: 50px;
}

.nav-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 215, 0, 0.2), transparent);
    transition: left 0.5s ease;
}

.nav-item:hover::before {
    left: 100%;
}

.nav-item:hover,
.nav-item.active {
    color: #FFD700;
    transform: translateY(-5px);
    background: rgba(255, 215, 0, 0.1);
    border-color: rgba(255, 215, 0, 0.3);
    box-shadow: 0 8px 25px rgba(255, 215, 0, 0.3);
}

.nav-item.active {
    background: rgba(255, 215, 0, 0.15);
    border-color: rgba(255, 215, 0, 0.5);
}

.nav-item i {
    font-size: 1.3rem;
    margin-bottom: 0.25rem;
    transition: transform 0.3s ease;
}

.nav-item:hover i {
    transform: scale(1.2) rotate(5deg);
}

.nav-item span {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.premium-main-navbar .nav-link-custom {
    color: rgba(255, 255, 255, 0.9) !important;
    font-weight: 500;
    padding: 0.75rem 1.5rem !important;
    margin: 0 0.25rem;
    border-radius: 25px;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    position: relative;
    overflow: hidden;
    border: 2px solid transparent;
    text-decoration: none;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    width: 100% !important;
    height: auto !important;
}

.premium-main-navbar .nav-link-custom::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.2), transparent);
    transition: left 0.5s ease;
}

.premium-main-navbar .nav-link-custom:hover::before {
    left: 100%;
}

.premium-main-navbar .nav-link-custom:hover {
    color: #D4AF37 !important;
    background: rgba(212, 175, 55, 0.1);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(212, 175, 55, 0.3);
}

.premium-main-navbar .nav-link.dropdown-toggle::after {
    margin-left: 0.5rem;
    transition: transform 0.3s ease;
}

.premium-main-navbar .nav-link.dropdown-toggle[aria-expanded="true"]::after {
    transform: rotate(180deg);
}

.premium-main-navbar .nav-item.dropdown {
    position: relative;
}

.premium-main-navbar .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: rgba(15, 61, 62, 0.99) !important;
    backdrop-filter: blur(20px);
    border: 2px solid rgba(212, 175, 55, 0.4) !important;
    border-radius: 15px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4), 0 0 0 1px rgba(212, 175, 55, 0.2);
    margin-top: 15px;
    padding: 0.75rem 0;
    min-width: 220px;
    z-index: 1300 !important;
    width: max-content;
    max-width: 300px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.premium-main-navbar .dropdown-menu.show {
    opacity: 1 !important;
    visibility: visible !important;
    transform: translateY(0);
}

.premium-main-navbar .dropdown-item {
    color: rgba(255, 255, 255, 0.95) !important;
    font-weight: 500;
    padding: 0.875rem 1.5rem;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    border-radius: 8px;
    margin: 0.125rem 0.5rem;
    position: relative;
    overflow: hidden;
    background: transparent !important;
    text-decoration: none;
    display: block;
    z-index: 2;
}

.premium-main-navbar .dropdown-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.15), transparent);
    transition: left 0.4s ease;
}

.premium-main-navbar .dropdown-item:hover::before {
    left: 100%;
}

.premium-main-navbar .dropdown-item:hover {
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.25), rgba(15, 61, 62, 0.9));
    color: #D4AF37;
    transform: translateX(8px) scale(1.02);
    box-shadow: 0 4px 15px rgba(212, 175, 55, 0.2);
}

.premium-main-navbar .dropdown-item i {
    width: 18px;
    text-align: center;
    margin-right: 0.75rem;
    transition: all 0.3s ease;
}

.premium-main-navbar .dropdown-item:hover i {
    color: #FFD700;
    transform: scale(1.1);
}



.navbar-actions {
    display: flex;
    gap: 1rem;
}

.btn-nav-primary,
.btn-nav-secondary {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1.25rem;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    border: 2px solid transparent;
    position: relative;
    overflow: hidden;
}

.btn-nav-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.btn-nav-primary:hover::before {
    left: 100%;
}

.btn-nav-primary {
    background: linear-gradient(135deg, #FFD700, #FFA500);
    color: #004D40;
    box-shadow: 0 6px 20px rgba(255, 215, 0, 0.4);
    border-color: rgba(255, 215, 0, 0.5);
}

.btn-nav-primary:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 12px 30px rgba(255, 215, 0, 0.6);
    background: linear-gradient(135deg, #FFA500, #FFD700);
    color: #004D40;
}

.btn-nav-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border-color: rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(10px);
}

.btn-nav-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.6);
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
    color: white;
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
    transition: opacity 1.5s ease-in-out;
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
    font-size: clamp(2rem, 4vw, 3rem);
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
    font-size: 1rem;
    line-height: 1.6;
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

    .hero-logo-box {
        top: 1rem;
        left: 1rem;
    }

    .logo-blob {
        padding: 1rem;
        gap: 0.75rem;
    }

    .logo-icon-blob {
        font-size: 2rem;
        padding: 0.5rem;
    }

    .logo-main-blob {
        font-size: 0.9rem;
    }

    .logo-sub-blob {
        font-size: 0.7rem;
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

    .navbar-content {
        flex-direction: column;
        gap: 1rem;
        padding: 0.75rem;
    }

    .navbar-menu {
        gap: 1.5rem;
        justify-content: center;
        flex-wrap: wrap;
        padding: 0.5rem;
    }

    .nav-item {
        min-height: 45px;
        padding: 0.4rem 0.6rem;
    }

    .navbar-actions {
        flex-direction: column;
        width: 100%;
    }

    .btn-nav-primary,
    .btn-nav-secondary {
        justify-content: center;
        width: 100%;
        margin: 0.25rem 0;
    }

    .premium-main-navbar {
        margin-bottom: 1rem;
        margin-left: 0.5rem;
        margin-right: 0.5rem;
    }
}

@media (max-width: 576px) {
    .hero-logo-box {
        top: 0.75rem;
        left: 0.75rem;
    }

    .logo-blob {
        padding: 0.75rem;
        gap: 0.5rem;
    }

    .logo-icon-blob {
        font-size: 1.5rem;
        padding: 0.4rem;
    }

    .logo-main-blob {
        font-size: 0.8rem;
    }

    .logo-sub-blob {
        font-size: 0.6rem;
    }

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

    .navbar-menu {
        display: none;
    }

    .navbar-brand-section {
        font-size: 0.9rem;
    }

    .premium-main-navbar {
        margin-bottom: 2rem;
    }

    .navbar-content {
        padding: 0.5rem;
    }

    .navbar-actions {
        flex-direction: column;
        gap: 0.5rem;
    }

    .btn-nav-primary,
    .btn-nav-secondary {
        padding: 0.4rem 0.8rem;
        font-size: 0.75rem;
    }

    .premium-main-navbar .nav-item.dropdown {
        position: relative;
    }

    .premium-main-navbar .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        min-width: 200px;
        margin-top: 10px;
        padding: 0.5rem 0;
        z-index: 1300;
        max-width: 280px;
    }

    .premium-main-navbar .dropdown-item {
        padding: 0.75rem 1rem;
        font-size: 0.9rem;
    }

    .premium-main-navbar .dropdown-item i {
        width: 16px;
        margin-right: 0.5rem;
    }
}

@media (max-width: 480px) {
    .hero-logo-box {
        top: 0.5rem;
        left: 0.5rem;
    }

    .logo-blob {
        padding: 0.6rem;
        gap: 0.4rem;
    }

    .logo-icon-blob {
        font-size: 1.2rem;
        padding: 0.3rem;
    }

    .logo-main-blob {
        font-size: 0.75rem;
    }

    .logo-sub-blob {
        font-size: 0.55rem;
    }

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

    .premium-main-navbar {
        margin-left: 0.25rem;
        margin-right: 0.25rem;
    }

    .navbar-content {
        padding: 0.5rem;
    }

    .brand-text {
        font-size: 1rem;
    }

    .brand-icon {
        font-size: 1.5rem;
        padding: 0.5rem;
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

/* ===== PROGRAMS SECTION ENHANCEMENTS ===== */
.program-card {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 2px solid transparent;
    cursor: pointer;
}

.program-card:hover,
.program-card:active {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 35px rgba(40, 167, 69, 0.2);
    border-color: #28a745;
}

.program-card .card-body {
    transition: all 0.3s ease;
}

.program-card:hover .card-body {
    transform: translateY(-2px);
}

.program-card i {
    transition: all 0.3s ease;
}

.program-card:hover i {
    transform: scale(1.1) rotate(5deg);
    color: #28a745 !important;
}

/* ===== NEWS SECTION ENHANCEMENTS ===== */
.news-card {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 2px solid transparent;
    cursor: pointer;
}

.news-card:hover,
.news-card:active {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 35px rgba(40, 167, 69, 0.2);
    border-color: #28a745;
}

.news-card .card-body {
    transition: all 0.3s ease;
}

.news-card:hover .card-body,
.news-card:active .card-body {
    transform: translateY(-2px);
}

.news-card .card-title {
    transition: all 0.3s ease;
}

.news-card:hover .card-title,
.news-card:active .card-title {
    color: #155724 !important;
}

.news-card .btn {
    transition: all 0.3s ease;
}

.news-card:hover .btn,
.news-card:active .btn {
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
}

/* ===== CONTACT SECTION ENHANCEMENTS ===== */
.contact-card {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 2px solid transparent;
    cursor: pointer;
}

/* ===== ENHANCED ABOUT SECTION ===== */
.about-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
    overflow: hidden;
}

.about-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23e2e8f0' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    opacity: 0.5;
}

.about-image-container {
    position: relative;
    margin-bottom: 2rem;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.about-image-container:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.25);
}

.about-main-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: all 0.5s ease;
}

.about-image-container:hover .about-main-image {
    transform: scale(1.1);
}

.image-overlay {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background: linear-gradient(135deg, var(--primary-color), #1a4a4a);
    color: white;
    padding: 1rem 1.5rem;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
    animation: overlay-float 3s ease-in-out infinite;
}

.image-overlay:hover {
    transform: translateY(-5px) scale(1.05);
}

.overlay-content {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin: 0;
}

.overlay-content i {
    font-size: 1.5rem;
    color: var(--secondary-color);
    animation: icon-pulse 2s ease-in-out infinite;
}

.about-content {
    padding-left: 2rem;
    position: relative;
    z-index: 2;
}

.about-description {
    font-size: 1.1rem;
    line-height: 1.7;
    color: var(--text-light);
    margin-bottom: 1.5rem;
    opacity: 0;
    transform: translateY(30px);
    animation: fade-in-up 0.8s ease-out 0.4s forwards;
}

.about-description-secondary {
    opacity: 0;
    transform: translateY(30px);
    animation: fade-in-up 0.8s ease-out 0.6s forwards;
}

.btn-about-primary {
    background: linear-gradient(135deg, var(--primary-color), #1a4a4a);
    color: white;
    border: 2px solid var(--primary-color);
    padding: 14px 32px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateY(30px);
    animation: fade-in-up 0.8s ease-out 0.8s forwards;
}

.btn-about-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.btn-about-primary:hover::before {
    left: 100%;
}

.btn-about-primary:hover {
    background: linear-gradient(135deg, #1a4a4a, var(--primary-color));
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 15px 40px rgba(15, 61, 62, 0.4);
    text-decoration: none;
    color: white;
}

/* ===== ENHANCED PROGRAMS SECTION ===== */
.programs-section {
    padding: 80px 0;
    background: white;
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.program-card {
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
    opacity: 0;
    transform: translateY(30px);
    animation: fade-in-up 0.8s ease-out forwards;
}

.program-card:nth-child(1) { animation-delay: 0.1s; }
.program-card:nth-child(2) { animation-delay: 0.3s; }
.program-card:nth-child(3) { animation-delay: 0.5s; }

.program-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border-color: var(--secondary-color);
}

.program-card-inner {
    position: relative;
    z-index: 2;
}

.program-icon-wrapper {
    position: relative;
    margin-bottom: 1.5rem;
}

.program-icon {
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
    background: linear-gradient(135deg, var(--primary-color), #1a4a4a);
}

.program-card:hover .program-icon {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.icon-glow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(212, 175, 55, 0.3) 0%, transparent 70%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.program-card:hover .icon-glow {
    opacity: 1;
}

.program-content {
    position: relative;
    z-index: 2;
}

.program-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 1rem;
}

.program-description {
    color: var(--text-light);
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

.card-hover-effect {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.05), rgba(118, 75, 162, 0.05));
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 20px;
    z-index: 1;
}

.program-card:hover .card-hover-effect {
    opacity: 1;
}

/* ===== ENHANCED NEWS SECTION ===== */
.news-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.news-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    height: 100%;
    opacity: 0;
    transform: translateY(30px);
    animation: fade-in-up 0.8s ease-out forwards;
}

.news-card:nth-child(1) { animation-delay: 0.1s; }
.news-card:nth-child(2) { animation-delay: 0.3s; }
.news-card:nth-child(3) { animation-delay: 0.5s; }

.news-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.news-image-container {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.news-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.5s ease;
}

.news-card:hover .news-image {
    transform: scale(1.1);
}

.news-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.8), rgba(118, 75, 162, 0.8));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    opacity: 0;
    transition: all 0.4s ease;
    backdrop-filter: blur(5px);
}

.news-card:hover .news-overlay {
    opacity: 1;
}

.overlay-content {
    text-align: center;
    transform: translateY(20px);
    transition: transform 0.4s ease;
}

.news-card:hover .overlay-content {
    transform: translateY(0);
}

.overlay-content i {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
    color: var(--secondary-color);
}

.news-content {
    padding: 1.5rem;
}

.news-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.75rem;
    line-height: 1.4;
}

.news-excerpt {
    color: var(--text-light);
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.btn-news-readmore {
    background: linear-gradient(135deg, var(--primary-color), #1a4a4a);
    color: white;
    border: 2px solid var(--primary-color);
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.btn-news-readmore:hover {
    background: linear-gradient(135deg, #1a4a4a, var(--primary-color));
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(15, 61, 62, 0.3);
    text-decoration: none;
    color: white;
}

.btn-view-all {
    background: linear-gradient(135deg, var(--primary-color), #1a4a4a);
    color: white;
    border: 2px solid var(--primary-color);
    padding: 14px 32px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
}

.btn-view-all::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.btn-view-all:hover::before {
    left: 100%;
}

.btn-view-all:hover {
    background: linear-gradient(135deg, #1a4a4a, var(--primary-color));
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 15px 40px rgba(15, 61, 62, 0.4);
    text-decoration: none;
    color: white;
}

.card-hover-glow {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, var(--secondary-color), #f4c430, var(--primary-color), var(--secondary-color));
    border-radius: 17px;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: -1;
}

.news-card:hover .card-hover-glow {
    opacity: 0.8;
}

/* ===== ENHANCED CONTACT SECTION ===== */
.contact-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.contact-card {
    position: relative;
    background: white;
    border-radius: 20px;
    padding: 3rem 2rem;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    opacity: 0;
    transform: translateY(30px);
    animation: fade-in-up 0.8s ease-out 0.2s forwards;
}

.contact-card-inner {
    position: relative;
    z-index: 2;
}

.contact-header {
    text-align: center;
    margin-bottom: 2rem;
}

.contact-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color), #1a4a4a);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: white;
    font-size: 2rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    animation: icon-pulse 2s ease-in-out infinite;
}

.contact-header h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.contact-header p {
    color: var(--text-light);
    font-size: 1rem;
}

.contact-form {
    max-width: 600px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
    display: block;
    font-size: 0.95rem;
}

.input-wrapper {
    position: relative;
}

.form-input {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
    color: var(--text-dark);
}

.form-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(15, 61, 62, 0.1);
    transform: translateY(-2px);
}

.input-focus-line {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    transition: width 0.3s ease;
}

.form-input:focus + .input-focus-line {
    width: 100%;
}

.btn-contact-submit {
    background: linear-gradient(135deg, var(--primary-color), #1a4a4a);
    color: white;
    border: 2px solid var(--primary-color);
    padding: 16px 40px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.1rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    cursor: pointer;
    width: 100%;
    justify-content: center;
}

.btn-contact-submit:hover {
    background: linear-gradient(135deg, #1a4a4a, var(--primary-color));
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 15px 40px rgba(15, 61, 62, 0.4);
    text-decoration: none;
    color: white;
}

.btn-text {
    position: relative;
    z-index: 2;
}

.btn-loading {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.card-glow-effect {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, var(--secondary-color), #f4c430, var(--primary-color), var(--secondary-color));
    border-radius: 22px;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
}

.contact-card:hover .card-glow-effect {
    opacity: 0.8;
}

/* ===== ADDITIONAL ANIMATIONS ===== */
@keyframes overlay-float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-5px) rotate(2deg);
    }
}

@keyframes icon-pulse {
    0%, 100% {
        transform: scale(1);
        opacity: 0.8;
    }
    50% {
        transform: scale(1.1);
        opacity: 1;
    }
}

/* ===== FORM ENHANCEMENTS ===== */
.input-wrapper.focused .form-input {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(15, 61, 62, 0.1);
    transform: translateY(-2px);
}

.input-wrapper.focused .input-focus-line {
    width: 100%;
}

/* ===== RESPONSIVE ENHANCEMENTS ===== */
@media (max-width: 768px) {
    .about-section {
        padding: 60px 0;
    }

    .about-image-container {
        margin-bottom: 2rem;
    }

    .about-main-image {
        height: 300px;
    }

    .about-content {
        padding-left: 0;
        text-align: center;
    }

    .programs-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .news-grid {
        grid-template-columns: 1fr;
    }

    .contact-card {
        padding: 2rem 1.5rem;
    }

    .contact-header h3 {
        font-size: 1.5rem;
    }

    .btn-contact-submit {
        padding: 14px 30px;
        font-size: 1rem;
    }
}

@media (max-width: 576px) {
    .about-section {
        padding: 40px 0;
    }

    .about-main-image {
        height: 250px;
    }

    .program-card {
        padding: 1.5rem 1rem;
    }

    .program-icon {
        width: 70px;
        height: 70px;
        font-size: 1.8rem;
    }

    .news-card {
        margin-bottom: 1.5rem;
    }

    .contact-card {
        padding: 1.5rem 1rem;
    }

    .contact-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }

    .form-input {
        padding: 12px 16px;
    }
}

/* ===== ACCESSIBILITY IMPROVEMENTS ===== */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* ===== PRINT STYLES ===== */
@media print {
    .about-section,
    .programs-section,
    .news-section,
    .contact-section {
        break-inside: avoid;
    }

    .program-card,
    .news-card {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #ddd;
    }
}
</style>