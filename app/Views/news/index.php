<!-- Search and Filter -->
<div class="row mb-4">
    <div class="col-md-8">
        <form method="GET" class="d-flex">
            <input type="text" name="search" class="form-control me-2" placeholder="Cari berita..." value="<?= esc($search) ?>">
            <button type="submit" class="btn btn-outline-primary">Cari</button>
            <?php if ($search): ?>
                <a href="/news" class="btn btn-outline-secondary ms-2">Reset</a>
            <?php endif; ?>
        </form>
    </div>
    <div class="col-md-4">
        <form method="GET">
            <select name="category" class="form-select" onchange="this.form.submit()">
                <option value="">Semua Kategori</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['name'] ?>" <?= $selectedCategory == $category['name'] ? 'selected' : '' ?>>
                        <?= $category['name'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>
</div>

<!-- News Grid -->
<div class="row">
    <?php foreach ($news as $item): ?>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="<?= $item['image'] ? base_url('uploads/' . $item['image']) : 'https://via.placeholder.com/400x250' ?>" class="card-img-top" alt="<?= $item['title'] ?>" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $item['title'] ?></h5>
                    <p class="card-text flex-grow-1"><?= substr(strip_tags($item['content']), 0, 120) ?>...</p>
                    <div class="mt-auto">
                        <p class="text-muted small mb-2">Diterbitkan: <?= date('d M Y', strtotime($item['created_at'])) ?></p>
                        <a href="/news/<?= $item['slug'] ?>" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Pagination -->
<?php if ($pager->getPageCount() > 1): ?>
    <nav aria-label="News pagination" class="mt-4">
        <ul class="pagination justify-content-center">
            <?php if ($pager->hasPrevious()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php foreach ($pager->links() as $link): ?>
                <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                    <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
                </li>
            <?php endforeach; ?>

            <?php if ($pager->hasNext()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?= $pager->getNextPage() ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>

<?php if (empty($news)): ?>
    <div class="text-center py-5">
        <div class="text-muted">
            <i class="fas fa-newspaper fa-3x mb-3"></i>
            <h4>Tidak ada berita ditemukan</h4>
            <p>Coba ubah kata kunci pencarian atau filter kategori.</p>
            <a href="/news" class="btn btn-primary">Tampilkan Semua Berita</a>
        </div>
    </div>
<?php endif; ?>