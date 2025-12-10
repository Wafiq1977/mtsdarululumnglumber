<div class="row">
    <div class="col-md-3">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Berita</h5>
                <h2><?= $stats['totalNews'] ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Guru</h5>
                <h2><?= $stats['totalTeachers'] ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-warning mb-3">
            <div class="card-body">
                <h5 class="card-title">Total User</h5>
                <h2><?= $stats['totalUsers'] ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-danger mb-3">
            <div class="card-body">
                <h5 class="card-title">Kontak Belum Dibaca</h5>
                <h2><?= $stats['unreadContacts'] ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Menu Admin
            </div>
            <div class="card-body">
                <a href="/admin/news" class="btn btn-primary m-1">Kelola Berita</a>
                <a href="/admin/teachers" class="btn btn-primary m-1">Kelola Guru</a>
                <a href="/admin/galleries" class="btn btn-primary m-1">Kelola Galeri</a>
                <a href="/admin/contacts" class="btn btn-primary m-1">Kelola Kontak</a>
                <a href="/admin/announcements" class="btn btn-primary m-1">Kelola Pengumuman</a>
                <a href="/admin/events" class="btn btn-primary m-1">Kelola Agenda</a>
                <a href="/admin/users" class="btn btn-primary m-1">Kelola User</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Aktivitas Terbaru
            </div>
            <div class="card-body">
                <p>Belum ada aktivitas terbaru.</p>
            </div>
        </div>
    </div>
</div>