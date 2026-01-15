<div class="container my-5">
    <!-- Page Title -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-success fw-bold">
                <i class="fas fa-newspaper me-2" style="color: #D4AF37;"></i>
                Berita
            </h1>
            <div class="mt-3">
                <a href="#api-news" class="btn btn-outline-success">Berita Kementerian</a>
            </div>
        </div>
    </div>




</div>

<!-- API News Sections -->
<section id="api-news" class="py-5 bg-light">
    <div class="container">
        <!-- National News -->
        <div class="mb-5">
            <h3 class="text-center mb-4 text-success">
                <i class="fas fa-mosque me-2" style="color: #D4AF37;"></i>
                Berita Kementerian Agama RI
            </h3>
            <div class="row">
                <?php if (!empty($kemenagNews)): ?>
                    <?php foreach (array_slice($kemenagNews, 0, 3) as $index => $news):
                        $localImages = ['agama 1.jpg', 'agama 2.jpg', 'agama 3.jpg'];
                        $imageSrc = base_url('uploads/' . ($localImages[$index] ?? 'agama 1.jpg'));
                    ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                                <img src="<?= $imageSrc ?>" class="card-img-top" alt="<?= $news['title'] ?? 'Tanpa Judul' ?>" style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                                     <h5 class="card-title" style="color: #0F3D3E;"><?= $news['title'] ?? 'Tanpa Judul' ?></h5>
                                     <p class="card-text flex-grow-1" style="color: #495057;"><?= substr($news['description'] ?? 'Deskripsi tidak tersedia', 0, 100) ?>...</p>
                                     <div class="mt-auto">
                                         <small class="text-muted">
                                             <i class="fas fa-mosque me-1"></i>
                                             <?= $news['source']['name'] ?? 'Kemenag.go.id' ?>
                                         </small>
                                         <a href="<?= $news['url'] ?? '#' ?>" target="_blank" class="btn btn-sm" style="background: linear-gradient(135deg, #D4AF37, #f4c430); color: #0F3D3E; border: none;">Baca Selengkapnya</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p class="text-muted">Berita Kementerian Agama sedang dimuat...</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Kemendikbud News -->
        <div>
            <h3 class="text-center mb-4 text-success">
                <i class="fas fa-graduation-cap me-2" style="color: #D4AF37;"></i>
                Berita Kementerian Pendidikan RI
            </h3>
            <div class="row">
                <?php if (!empty($kemendikbudNews)): ?>
                    <?php foreach (array_slice($kemendikbudNews, 0, 3) as $index => $news):
                        $localImages = ['pendidikan 1.jpg', 'pendidikan 2.jpeg', 'pendidikan 3.png'];
                        $imageSrc = base_url('uploads/' . ($localImages[$index] ?? 'pendidikan 1.jpg'));
                    ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                                <img src="<?= $imageSrc ?>" class="card-img-top" alt="<?= $news['title'] ?? 'Tanpa Judul' ?>" style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                                     <h5 class="card-title" style="color: #0F3D3E;"><?= $news['title'] ?? 'Tanpa Judul' ?></h5>
                                     <p class="card-text flex-grow-1" style="color: #495057;"><?= substr($news['description'] ?? 'Deskripsi tidak tersedia', 0, 100) ?>...</p>
                                     <div class="mt-auto">
                                         <small class="text-muted">
                                             <i class="fas fa-graduation-cap me-1"></i>
                                             <?= $news['source']['name'] ?? 'Kemendikbud.go.id' ?>
                                         </small>
                                         <a href="<?= $news['url'] ?? '#' ?>" target="_blank" class="btn btn-sm" style="background: linear-gradient(135deg, #D4AF37, #f4c430); color: #0F3D3E; border: none;">Baca Selengkapnya</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p class="text-muted">Berita Kementerian Pendidikan sedang dimuat...</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>