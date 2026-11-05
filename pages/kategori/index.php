<?php
$pageTitle  = 'Kategori Barang';
$activeMenu = 'kategori';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>

<div class="page-header">
    <div>
        <h1 class="page-title">Kategori Barang</h1>
        <p class="text-muted">Kategori daftar barang inventaris.</p>
    </div>
</div>

<div class="d-flex justify-between align-center mb-3">
    <a href="/TA-SiPinjam/pages/peminjaman/index.php" class="btn btn-sm btn-primary">
        Tambah Kategori
    </a>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-dark-header">
            <thead>
                <tr>
                    <th>No Barang</th>
                    <th>Barang</th>
                    <th>Kategori</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>01</strong></td>
                    <td>Kelas dekk</td>
                    <td>Mboh opo ki</td>
                    <td><span class="badge badge-warning">Dipinjam</span></td>
                </tr>
                <tr>
                    <td><strong>02</strong></td>
                    <td>Laptop</td>
                    <td>Elektronik</td>
                    <td><span class="badge badge-danger">Terlambat</span></td>
                </tr>
                <tr>
                    <td><strong>03</strong></td>
                    <td>Spiker</td>
                    <td>Elektronik</td>
                    <td><span class="badge badge-warning">Dipinjam</span></td>
                </tr>
                <tr>
                    <td><strong>04</strong></td>
                    <td>Kursi</td>
                    <td>Mebel?</td>
                    <td><span class="badge badge-success">Kembali</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
