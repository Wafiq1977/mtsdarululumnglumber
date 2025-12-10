<div class="row">
    <div class="col-lg-8">
        <article>
            <header class="mb-4">
                <h1 class="display-4"><?= $news['title'] ?></h1>
                <p class="text-muted">Diterbitkan pada <?= date('d F Y', strtotime($news['created_at'])) ?></p>
            </header>

            <?php if ($news['image']): ?>
                <img src="<?= base_url('uploads/' . $news['image']) ?>" class="img-fluid mb-4" alt="<?= $news['title'] ?>">
            <?php endif; ?>

            <div class="content">
                <?= $news['content'] ?>
            </div>
        </article>

        <hr class="my-5">

        <div class="text-center">
            <a href="/news" class="btn btn-outline-primary">← Kembali ke Berita</a>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5>Berita Lainnya</h5>
            </div>
            <div class="card-body">
                <p>Berita lainnya akan ditampilkan di sini.</p>
            </div>
        </div>
    </div>
</div>