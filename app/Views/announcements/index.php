<div class="container my-5">
    <!-- Page Title -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-success fw-bold">
                <i class="fas fa-bullhorn me-2" style="color: #D4AF37;"></i>
                Pengumuman & Agenda Sekolah
            </h1>
        </div>
    </div>

    <!-- Tabs Navigation -->
    <div class="row mb-4">
        <div class="col-12">
            <ul class="nav nav-tabs" id="announcementTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="announcements-tab" data-bs-toggle="tab" data-bs-target="#announcements" type="button" role="tab" aria-controls="announcements" aria-selected="true">
                        <i class="fas fa-bullhorn me-2"></i>Pengumuman
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="events-tab" data-bs-toggle="tab" data-bs-target="#events" type="button" role="tab" aria-controls="events" aria-selected="false">
                        <i class="fas fa-calendar-alt me-2"></i>Agenda & Event
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <!-- Tab Content -->
    <div class="tab-content" id="announcementTabsContent">
        <!-- Announcements Tab -->
        <div class="tab-pane fade show active" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
            <div class="row">
                <?php if (!empty($announcements)): ?>
                    <?php foreach ($announcements as $announcement): ?>
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow-sm" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                                <div class="card-body" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <h5 class="card-title mb-0" style="color: #0F3D3E;"><?= $announcement['title'] ?></h5>
                                        <small class="text-muted">
                                            <i class="fas fa-calendar-alt me-1"></i>
                                            <?= date('d F Y', strtotime($announcement['created_at'])) ?>
                                        </small>
                                    </div>
                                    <p class="card-text" style="color: #495057; line-height: 1.6;">
                                        <?= substr(strip_tags($announcement['content']), 0, 200) ?>...
                                    </p>
                                    <a href="/announcements/<?= $announcement['id'] ?>" class="btn" style="background: linear-gradient(135deg, #D4AF37, #f4c430); color: #0F3D3E; border: none;">
                                        <i class="fas fa-eye me-2"></i>Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <div class="text-center py-5">
                            <div style="color: #0F3D3E;">
                                <i class="fas fa-bullhorn fa-3x mb-3" style="color: #D4AF37;"></i>
                                <h4>Tidak ada pengumuman</h4>
                                <p>Belum ada pengumuman yang tersedia saat ini.</p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Events Tab -->
        <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
            <div class="row">
                <?php if (!empty($events)): ?>
                    <?php foreach ($events as $event): ?>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow-sm h-100" style="border: 2px solid rgba(212, 175, 55, 0.2); border-radius: 15px; overflow: hidden;">
                                <div class="card-body" style="background: linear-gradient(135deg, rgba(15, 61, 62, 0.05), rgba(26, 74, 74, 0.05));">
                                    <div class="d-flex align-items-start mb-3">
                                        <div class="me-3">
                                            <div class="text-center">
                                                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-1" style="color: #0F3D3E;"><?= $event['title'] ?></h5>
                                            <small class="text-muted">
                                                <i class="fas fa-clock me-1"></i>
                                                <?= date('d F Y H:i', strtotime($event['start_date'])) ?>
                                                <?php if ($event['end_date']): ?>
                                                    - <?= date('d F Y H:i', strtotime($event['end_date'])) ?>
                                                <?php endif; ?>
                                            </small>
                                        </div>
                                    </div>
                                    <?php if ($event['description']): ?>
                                        <p class="card-text" style="color: #495057; line-height: 1.6;">
                                            <?= substr(strip_tags($event['description']), 0, 150) ?>...
                                        </p>
                                    <?php endif; ?>
                                    <div class="mt-auto">
                                        <span class="badge" style="background: linear-gradient(135deg, #D4AF37, #f4c430); color: #0F3D3E;">
                                            <i class="fas fa-calendar-check me-1"></i>Agenda Sekolah
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <div class="text-center py-5">
                            <div style="color: #0F3D3E;">
                                <i class="fas fa-calendar-alt fa-3x mb-3" style="color: #D4AF37;"></i>
                                <h4>Tidak ada agenda</h4>
                                <p>Belum ada agenda atau event yang tersedia saat ini.</p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>