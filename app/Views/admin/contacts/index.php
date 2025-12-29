<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Kelola Pesan Kontak</h2>
        <p class="text-muted mb-0">Pantau dan kelola pesan dari pengunjung website</p>
    </div>
    <div class="d-flex gap-2">
        <button class="btn btn-outline-primary" onclick="refreshPage()">
            <i class="fas fa-sync-alt me-2"></i>Refresh
        </button>
    </div>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card stats-card border-primary">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-envelope fa-2x text-primary"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-primary">
                    <?= $stats['total'] ?>
                </div>
                <div class="stats-label">Total Pesan</div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stats-card border-warning">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-envelope-open fa-2x text-warning"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-warning">
                    <?= $stats['unread'] ?>
                </div>
                <div class="stats-label">Belum Dibaca</div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stats-card border-success">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-reply fa-2x text-success"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-success">
                    <?= $stats['replied'] ?>
                </div>
                <div class="stats-label">Sudah Dibalas</div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stats-card border-info">
            <div class="card-body text-center">
                <div class="stats-icon mb-2">
                    <i class="fas fa-clock fa-2x text-info"></i>
                </div>
                <div class="stats-number display-6 fw-bold text-info">
                    <?php
                    $todayMessages = 0;
                    foreach ($contacts as $contact) {
                        if (date('Y-m-d', strtotime($contact['created_at'])) === date('Y-m-d')) {
                            $todayMessages++;
                        }
                    }
                    echo $todayMessages;
                    ?>
                </div>
                <div class="stats-label">Pesan Hari Ini</div>
            </div>
        </div>
    </div>
</div>

<!-- Filters and Search -->
<div class="card mb-4">
    <div class="card-body">
        <div class="row g-3 align-items-end">
            <div class="col-md-4">
                <label for="statusFilter" class="form-label fw-semibold">Filter Status</label>
                <select class="form-select" id="statusFilter" onchange="filterByStatus(this.value)">
                    <option value="">Semua Status</option>
                    <option value="unread" <?= $selectedStatus === 'unread' ? 'selected' : '' ?>>Belum Dibaca</option>
                    <option value="replied" <?= $selectedStatus === 'replied' ? 'selected' : '' ?>>Sudah Dibalas</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="searchInput" class="form-label fw-semibold">Pencarian</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="searchInput" placeholder="Cari nama, email, atau subjek..."
                           value="<?= esc($searchQuery ?? '') ?>">
                    <button class="btn btn-outline-secondary" type="button" onclick="searchContacts()">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <div class="col-md-2">
                <button class="btn btn-outline-danger w-100" onclick="clearFilters()">
                    <i class="fas fa-times me-1"></i>Hapus Filter
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Messages Table -->
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">
            <i class="fas fa-list me-2"></i>Daftar Pesan Kontak
        </h5>
    </div>
    <div class="card-body">
        <?php if (!empty($contacts)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="50">Status</th>
                            <th>Pengirim</th>
                            <th>Subjek</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact): ?>
                            <tr class="<?= $contact['status'] === 'unread' ? 'table-warning' : '' ?>">
                                <td class="text-center">
                                    <?php if ($contact['status'] === 'unread'): ?>
                                        <span class="badge bg-warning">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-success">
                                            <i class="fas fa-reply"></i>
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="fw-semibold"><?= $contact['name'] ?></div>
                                    <small class="text-muted">
                                        <i class="fas fa-envelope me-1"></i><?= $contact['email'] ?>
                                    </small>
                                </td>
                                <td>
                                    <div class="fw-medium"><?= $contact['subject'] ?></div>
                                </td>
                                <td>
                                    <div class="message-preview">
                                        <?= substr($contact['message'], 0, 100) ?>...
                                    </div>
                                </td>
                                <td>
                                    <div class="small text-muted">
                                        <?= date('d/m/Y', strtotime($contact['created_at'])) ?>
                                    </div>
                                    <div class="small text-muted">
                                        <?= date('H:i', strtotime($contact['created_at'])) ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm btn-outline-info"
                                                onclick="viewMessage(<?= $contact['id'] ?>)"
                                                title="Lihat Detail">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <?php if ($contact['status'] === 'unread'): ?>
                                            <a href="/admin/contacts/mark-replied/<?= $contact['id'] ?>"
                                               class="btn btn-sm btn-outline-success"
                                               title="Tandai Sudah Dibalas"
                                               onclick="return confirm('Tandai pesan ini sebagai sudah dibalas?')">
                                                <i class="fas fa-reply"></i>
                                            </a>
                                        <?php endif; ?>

                                        <button type="button" class="btn btn-sm btn-outline-danger"
                                                onclick="confirmDelete(<?= $contact['id'] ?>, '<?= addslashes($contact['name']) ?>')"
                                                title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <div class="empty-state">
                    <i class="fas fa-envelope fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted mb-2">
                        <?php if ($selectedStatus || $searchQuery): ?>
                            Tidak ada pesan yang sesuai filter
                        <?php else: ?>
                            Belum ada pesan kontak
                        <?php endif; ?>
                    </h4>
                    <p class="text-muted mb-4">
                        <?php if ($selectedStatus || $searchQuery): ?>
                            Coba ubah filter pencarian atau <a href="/admin/contacts" class="text-primary">tampilkan semua pesan</a>
                        <?php else: ?>
                            Pesan dari pengunjung website akan muncul di sini
                        <?php endif; ?>
                    </p>

                    <?php if ($selectedStatus || $searchQuery): ?>
                        <button class="btn btn-primary" onclick="clearFilters()">
                            <i class="fas fa-times me-2"></i>Hapus Filter
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Message Detail Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Detail Pesan Kontak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="messageContent">
                <!-- Content will be loaded here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <div id="messageActions">
                    <!-- Action buttons will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">
                    <i class="fas fa-exclamation-triangle text-warning me-2"></i>Konfirmasi Hapus
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus pesan dari <strong id="deleteContactName"></strong>?</p>
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Perhatian:</strong> Pesan yang dihapus tidak dapat dikembalikan.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="post" style="display: inline;">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash me-2"></i>Ya, Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.stats-card {
    border-left: 4px solid;
    transition: transform 0.3s ease;
}

.stats-card:hover {
    transform: translateY(-5px);
}

.stats-icon {
    opacity: 0.8;
}

.stats-number {
    line-height: 1;
}

.stats-label {
    font-size: 0.9rem;
    opacity: 0.8;
    margin-top: 5px;
}

.table th {
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.message-preview {
    max-width: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.btn-group .btn {
    border-radius: 6px !important;
    margin: 0 1px;
}

.empty-state {
    background: #f8f9fa;
    border-radius: 15px;
    padding: 60px 40px;
}

.table-warning {
    background-color: rgba(255, 193, 7, 0.1) !important;
}
</style>

<script>
function viewMessage(contactId) {
    // Load message details via AJAX (simplified - in real implementation, use fetch API)
    fetch(`/admin/contacts/view/${contactId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('messageContent').innerHTML = `
                <div class="message-details">
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <strong>Nama:</strong> ${data.name}
                        </div>
                        <div class="col-sm-6">
                            <strong>Email:</strong> ${data.email}
                        </div>
                    </div>
                    <div class="mb-3">
                        <strong>Subjek:</strong> ${data.subject}
                    </div>
                    <div class="mb-3">
                        <strong>Tanggal:</strong> ${new Date(data.created_at).toLocaleString('id-ID')}
                    </div>
                    <div class="mb-3">
                        <strong>Status:</strong>
                        <span class="badge ${data.status === 'unread' ? 'bg-warning' : 'bg-success'}">
                            ${data.status === 'unread' ? 'Belum Dibaca' : 'Sudah Dibalas'}
                        </span>
                    </div>
                    <hr>
                    <div>
                        <strong>Pesan:</strong>
                        <div class="mt-2 p-3 bg-light rounded">
                            ${data.message.replace(/\n/g, '<br>')}
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('messageActions').innerHTML = `
                ${data.status === 'unread' ?
                    `<a href="/admin/contacts/mark-replied/${data.id}" class="btn btn-success">
                        <i class="fas fa-reply me-2"></i>Tandai Sudah Dibalas
                    </a>` : ''}
                <button type="button" class="btn btn-danger ms-2" onclick="confirmDelete(${data.id}, '${data.name}')">
                    <i class="fas fa-trash me-2"></i>Hapus Pesan
                </button>
            `;

            const modal = new bootstrap.Modal(document.getElementById('messageModal'));
            modal.show();
        })
        .catch(error => {
            alert('Gagal memuat detail pesan');
        });
}

function confirmDelete(contactId, contactName) {
    document.getElementById('deleteContactName').textContent = contactName;
    document.getElementById('deleteForm').action = `/admin/contacts/delete/${contactId}`;

    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}

function filterByStatus(status) {
    const url = new URL(window.location);
    if (status) {
        url.searchParams.set('status', status);
    } else {
        url.searchParams.delete('status');
    }
    url.searchParams.delete('search'); // Clear search when filtering by status
    window.location.href = url.toString();
}

function searchContacts() {
    const query = document.getElementById('searchInput').value.trim();
    const url = new URL(window.location);
    if (query) {
        url.searchParams.set('search', query);
    } else {
        url.searchParams.delete('search');
    }
    window.location.href = url.toString();
}

function clearFilters() {
    window.location.href = '/admin/contacts';
}

function refreshPage() {
    window.location.reload();
}

// Enter key support for search
document.getElementById('searchInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        searchContacts();
    }
});

// Auto-hide alerts
setTimeout(function() {
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(function(alert) {
        const bsAlert = new bootstrap.Alert(alert);
        bsAlert.close();
    });
}, 5000);
</script>