<div class="row">
    <?php foreach ($galleries as $gallery): ?>
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?= $gallery['title'] ?></h5>
                    <?php if ($gallery['description']): ?>
                        <p class="card-text"><?= $gallery['description'] ?></p>
                    <?php endif; ?>

                    <?php
                    $images = json_decode($gallery['images'], true) ?? [];
                    if (!empty($images)):
                    ?>
                        <div class="row g-2">
                            <?php foreach (array_slice($images, 0, 4) as $image): ?>
                                <div class="col-6">
                                    <img src="<?= base_url('uploads/' . $image) ?>" class="img-fluid rounded gallery-thumb" alt="Gallery image" data-bs-toggle="modal" data-bs-target="#galleryModal<?= $gallery['id'] ?>" style="cursor: pointer;">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if (count($images) > 4): ?>
                            <p class="text-muted mt-2">+<?= count($images) - 4 ?> foto lainnya</p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Modal for gallery -->
        <div class="modal fade" id="galleryModal<?= $gallery['id'] ?>" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= $gallery['title'] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div id="galleryCarousel<?= $gallery['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($images as $index => $image): ?>
                                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                        <img src="<?= base_url('uploads/' . $image) ?>" class="d-block w-100" alt="Gallery image">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php if (count($images) > 1): ?>
                                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel<?= $gallery['id'] ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel<?= $gallery['id'] ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php if (empty($galleries)): ?>
    <div class="text-center">
        <p>Belum ada galeri foto yang tersedia.</p>
    </div>
<?php endif; ?>

<style>
.gallery-thumb:hover {
    opacity: 0.8;
    transform: scale(1.05);
    transition: all 0.3s ease;
}
</style>