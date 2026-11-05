<?php
$pageTitle  = 'Dashboard';
$activeMenu = 'dashboard';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>

<!-- Header Dashboard: Judul & Jam Realtime -->
<div class="page-header">
    <div>
        <h1 class="page-title">Dashboard</h1>
        <p class="text-muted">Ringkasan aktivitas inventaris dan peminjaman barang saat ini.</p>
    </div>
    
</div>

<!-- ========================================================
     KARTU METRIK DASHBOARD (3 KOLOM x 2 BARIS SESUAI WIREFRAME)
     Baris 1: Total Barang, Barang Tersedia, Sedang Dipinjam
     Baris 2: Total Peminjaman, Barang Baik, Barang Rusak
======================================================== -->
<div class="stats-grid">
    <div class="stat-card stat-navy">
        <div class="stat-title">Total Barang</div>
        <div class="stat-value">120</div>
        <p class="stat-desc">Total inventaris</p>
    </div>

    <div class="stat-card stat-success">
        <div class="stat-title">Barang Tersedia</div>
        <div class="stat-value">98</div>
        <p class="stat-desc">Siap dipinjam</p>
    </div>

    <div class="stat-card stat-warning">
        <div class="stat-title">Sedang Dipinjam</div>
        <div class="stat-value">22</div>
        <p class="stat-desc">Dalam masa pinjam</p>
    </div>

    <div class="stat-card stat-info">
        <div class="stat-title">Total Peminjaman</div>
        <div class="stat-value">145</div>
        <p class="stat-desc">Total transaksi riwayat</p>
    </div>

    <div class="stat-card stat-success">
        <div class="stat-title">Barang Baik</div>
        <div class="stat-value">115</div>
        <p class="stat-desc">Kondisi prima & layak</p>
    </div>

    <div class="stat-card stat-danger">
        <div class="stat-title">Barang Rusak</div>
        <div class="stat-value">5</div>
        <p class="stat-desc">Perlu perbaikan</p>
    </div>
</div>


<div class="card">
    <div class="d-flex justify-between align-center mb-3">
        <h2 class="card-title" style="margin-bottom: 0;">Peminjaman Terbaru</h2>
        <a href="/TA-SiPinjam/pages/peminjaman/index.php" class="btn btn-sm btn-secondary">
            Lihat Semua Transaksi &rarr;
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-dark-header">
            <thead>
                <tr>
                    <th>Peminjam</th>
                    <th>Barang</th>
                    <th>Tgl Pinjam</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Slamet met</strong></td>
                    <td>Kelas dekk</td>
                    <td>21/12/2077</td>
                    <td><span class="badge badge-warning">Dipinjam</span></td>
                </tr>
                <tr>
                    <td><strong>Rina A.</strong></td>
                    <td>Laptop</td>
                    <td>19/01/2067</td>
                    <td><span class="badge badge-danger">Terlambat</span></td>
                </tr>
                <tr>
                    <td><strong>PrabroTreduy</strong></td>
                    <td>Spiker</td>
                    <td>19/08/1945</td>
                    <td><span class="badge badge-warning">Dipinjam</span></td>
                </tr>
                <tr>
                    <td><strong>Ahmad F.</strong></td>
                    <td>Kamera DSLR</td>
                    <td>02/11/2026</td>
                    <td><span class="badge badge-success">Kembali</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
