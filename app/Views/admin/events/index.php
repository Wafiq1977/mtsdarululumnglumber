<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Kelola Agenda</h2>
    <a href="/admin/events/create" class="btn btn-primary">Tambah Agenda</a>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($events as $event): ?>
                        <tr>
                            <td><?= $event['title'] ?></td>
                            <td><?= date('d/m/Y H:i', strtotime($event['start_date'])) ?></td>
                            <td>
                                <?php if ($event['end_date']): ?>
                                    <?= date('d/m/Y H:i', strtotime($event['end_date'])) ?>
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php
                                $now = date('Y-m-d H:i:s');
                                $start = $event['start_date'];
                                $end = $event['end_date'] ?: $start;

                                if ($now > $end) {
                                    echo '<span class="badge bg-secondary">Selesai</span>';
                                } elseif ($now >= $start && $now <= $end) {
                                    echo '<span class="badge bg-success">Sedang Berlangsung</span>';
                                } else {
                                    echo '<span class="badge bg-info">Akan Datang</span>';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="/admin/events/edit/<?= $event['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/events/delete/<?= $event['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus agenda ini?')">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php if (empty($events)): ?>
            <div class="text-center py-4">
                <p class="text-muted">Belum ada agenda.</p>
            </div>
        <?php endif; ?>
    </div>
</div>