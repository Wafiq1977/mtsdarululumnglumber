</main>

<!-- ===== FOOTER ===== -->
<footer class="footer-gradient text-white mt-5 py-5 position-relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="footer-pattern"></div>

    <div class="container position-relative">
        <div class="row g-4">
            <!-- School Info -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <div class="school-logo mb-3">
                        <i class="fas fa-graduation-cap fa-2x text-warning mb-2"></i>
                        <h5 class="fw-bold text-white mb-3">MTS Darul Ulum Nglumber</h5>
                    </div>
                    <p class="mb-4 opacity-75">Madrasah Tsanawiyah yang berkomitmen memberikan pendidikan Islam terpadu berkualitas tinggi untuk mencetak generasi unggul bangsa.</p>
                    <div class="social-links">
                        <a href="#" class="social-link facebook" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link instagram" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link youtube" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="social-link whatsapp" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-section">
                    <h6 class="fw-bold text-warning mb-3">
                        <i class="fas fa-link me-2"></i>Link Cepat
                    </h6>
                    <ul class="list-unstyled footer-links">
                        <li><a href="/profile" class="footer-link"><i class="fas fa-angle-right me-2"></i>Profil Sekolah</a></li>
                        <li><a href="/news" class="footer-link"><i class="fas fa-angle-right me-2"></i>Berita</a></li>
                        <li><a href="/teachers" class="footer-link"><i class="fas fa-angle-right me-2"></i>Guru & Staff</a></li>
                        <li><a href="/gallery" class="footer-link"><i class="fas fa-angle-right me-2"></i>Galeri</a></li>
                        <li><a href="/contact" class="footer-link"><i class="fas fa-angle-right me-2"></i>Kontak</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h6 class="fw-bold text-warning mb-3">
                        <i class="fas fa-address-book me-2"></i>Kontak Kami
                    </h6>
                    <ul class="list-unstyled contact-info">
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt text-warning me-2"></i>
                            <span>Jl. Raya Nglumber, Lumajang</span>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone text-warning me-2"></i>
                            <span>+62 952 5893 2028</span>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-envelope text-warning me-2"></i>
                            <span>mtsdunglumber@gmail.com</span>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-clock text-warning me-2"></i>
                            <span>Senin - Jumat: 07:00 - 15:00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter/Stats -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h6 class="fw-bold text-warning mb-3">
                        <i class="fas fa-chart-line me-2"></i>Statistik Sekolah
                    </h6>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number text-warning">100+</div>
                            <div class="stat-label">Siswa</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number text-warning">20+</div>
                            <div class="stat-label">Guru</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number text-warning">10+</div>
                            <div class="stat-label">Tahun</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number text-warning">A</div>
                            <div class="stat-label">Akreditasi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom mt-5 pt-4 border-top border-warning border-opacity-25">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 opacity-75">
                        <i class="fas fa-copyright text-warning me-1"></i>
                        2024 MTS Darul Ulum Nglumber. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 opacity-75">
                        <i class="fas fa-code text-warning me-1"></i>
                        Dibuat dengan <i class="fas fa-heart text-danger mx-1"></i> untuk pendidikan
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Splash Screen JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const splashScreen = document.getElementById('splash-screen');
    
    // Hide splash screen on initial load
    if (splashScreen) {
        setTimeout(() => {
            splashScreen.classList.add('hidden');
        }, 100); // Small delay to ensure it renders first
    }

    // Show splash screen when navigating away
    const links = document.querySelectorAll('a');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = link.getAttribute('href');
            const target = link.getAttribute('target');

            // Check if it's a navigational link that opens in the same tab
            if (href && !href.startsWith('#') && !href.startsWith('javascript:') && target !== '_blank' && !link.hasAttribute('data-bs-toggle')) {
                if (splashScreen) {
                   splashScreen.classList.remove('hidden');
                }
            }
        });
    });

    // Handle back/forward button navigation
    window.addEventListener('pageshow', function(event) {
        // The pageshow event is fired every time the page is displayed, including for back/forward navigation.
        // event.persisted is true if the page is being loaded from the cache (bfcache).
        const splashScreen = document.getElementById('splash-screen');
        if (splashScreen) {
            // Always hide splash screen on page show to handle bfcache
            splashScreen.classList.add('hidden');
        }
    });
});
</script>
</body>
</html>