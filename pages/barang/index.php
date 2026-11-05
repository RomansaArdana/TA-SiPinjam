<?php
$pageTitle  = 'Daftar Barang';
$activeMenu = 'barang';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>

<div class="page-header">
    <div>
        <h1 class="page-title">Daftar Barang</h1>
        <p class="text-muted">Kelola data inventaris barang secara teratur.</p>
    </div>
</div>

<div class="d-flex justify-between align-center mb-3">
    <a href="tambah.php" class="btn btn-sm btn-primary">
        + Tambah Barang
    </a>

    <div style="width: 280px;">
        <input 
            type="text" 
            class="form-input" 
            placeholder="Cari nama barang..."
            style="padding: 8px 12px; font-size: 13px;"
        >
    </div>
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
                    <td>Mebel</td>
                    <td><span class="badge badge-success">Kembali</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
