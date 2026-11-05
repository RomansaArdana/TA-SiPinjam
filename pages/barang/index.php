<?php
$pageTitle  = 'Daftar Barang';
$activeMenu = 'barang';

// Data contoh barang inventaris (Milestone 2). Data dari database dikerjakan di Milestone 4.
$barang = [
    [
        'kode'     => 'BRG001',
        'nama'     => 'Laptop ASUS',
        'kategori' => 'Elektronik',
        'kondisi'  => 'Baik',
        'lokasi'   => 'Laboratorium 1',
        'status'   => 'Tersedia',
    ],
    [
        'kode'     => 'BRG002',
        'nama'     => 'Proyektor Epson',
        'kategori' => 'Elektronik',
        'kondisi'  => 'Baik',
        'lokasi'   => 'Laboratorium 2',
        'status'   => 'Dipinjam',
    ],
    [
        'kode'     => 'BRG003',
        'nama'     => 'Kabel HDMI',
        'kategori' => 'Peralatan',
        'kondisi'  => 'Baik',
        'lokasi'   => 'Gudang',
        'status'   => 'Tersedia',
    ],
    [
        'kode'     => 'BRG004',
        'nama'     => 'Keyboard Logitech',
        'kategori' => 'Aksesoris',
        'kondisi'  => 'Rusak',
        'lokasi'   => 'Laboratorium 1',
        'status'   => 'Tidak Tersedia',
    ],
    [
        'kode'     => 'BRG005',
        'nama'     => 'Mouse Wireless',
        'kategori' => 'Aksesoris',
        'kondisi'  => 'Baik',
        'lokasi'   => 'Laboratorium 3',
        'status'   => 'Tersedia',
    ],
];

$cari = trim($_GET['cari'] ?? '');

$dataBarang = array_filter($barang, function ($item) use ($cari) {
    if ($cari === '') {
        return true;
    }
    return stripos($item['nama'], $cari) !== false ||
           stripos($item['kode'], $cari) !== false;
});

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>
<link rel="stylesheet" href="../../assets/css/form.css">
<link rel="stylesheet" href="../../assets/css/peminjaman.css">

<div class="page-head">
    <div>
        <h1 class="page-title">Data Barang</h1>
        <p class="page-intro">Kelola data inventaris barang SIPINJAM.</p>
    </div>
    <div class="toolbar-actions">
        <a href="../kategori/index.php" class="btn btn-secondary">Lihat Kategori</a>
        <a href="tambah.php" class="btn btn-primary">+ Tambah Barang</a>
    </div>
</div>

<p class="note">
    Baris di bawah adalah data contoh untuk tampilan Milestone 2.
    Tombol Edit, Hapus, dan perpindahan halaman AJAX dikerjakan di Milestone 5 dan 6.
</p>

<div class="toolbar">
    <form method="get" action="index.php" class="search-form">
        <label for="cari-barang" class="field-label">Cari barang</label>
        <input
            type="text"
            id="cari-barang"
            name="cari"
            placeholder="Ketik nama atau kode barang"
            value="<?= htmlspecialchars($cari) ?>"
        >
        <button type="submit" class="btn btn-primary">Cari</button>
        <?php if ($cari !== ''): ?>
            <a href="index.php" class="btn btn-secondary">Reset</a>
        <?php endif; ?>
    </form>
    <p class="result-count">
        Menampilkan <?= count($dataBarang) ?> dari <?= count($barang) ?> barang
    </p>
</div>

<div class="table-wrap" tabindex="0" role="region" aria-label="Tabel daftar barang, bisa digeser ke samping">
    <table class="data-table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($dataBarang) > 0): ?>
                <?php $no = 1; ?>
                <?php foreach ($dataBarang as $item): ?>
                    <?php
                    $kelasStatus = 'badge-' . strtolower(str_replace(' ', '-', $item['status']));
                    $kelasKondisi = $item['kondisi'] === 'Baik' ? 'kondisi-baik' : 'kondisi-rusak';
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><strong><?= htmlspecialchars($item['kode']) ?></strong></td>
                        <td><?= htmlspecialchars($item['nama']) ?></td>
                        <td><?= htmlspecialchars($item['kategori']) ?></td>
                        <td>
                            <span class="<?= $kelasKondisi ?>">
                                <?= htmlspecialchars($item['kondisi']) ?>
                            </span>
                        </td>
                        <td><?= htmlspecialchars($item['lokasi']) ?></td>
                        <td>
                            <span class="badge <?= htmlspecialchars($kelasStatus) ?>">
                                <?= htmlspecialchars($item['status']) ?>
                            </span>
                        </td>
                        <td class="aksi">
                            <button type="button" class="btn btn-small btn-secondary" disabled>Edit</button>
                            <button type="button" class="btn btn-small btn-secondary" disabled>Hapus</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">
                        Data barang dengan kata kunci "<?= htmlspecialchars($cari) ?>" tidak ditemukan.
                        Klik Reset untuk menampilkan semua barang.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- TODO Milestone 6: aktifkan pagination dengan jQuery AJAX. -->
<nav class="pagination-bar" aria-label="Navigasi halaman tabel barang">
    <span class="result-count">Halaman 1 dari 1 (pagination AJAX aktif di Milestone 6)</span>
    <div class="pagination-controls">
        <button type="button" class="btn btn-small btn-secondary" disabled>Sebelumnya</button>
        <button type="button" class="btn btn-small btn-primary" aria-current="page">1</button>
        <button type="button" class="btn btn-small btn-secondary" disabled>Selanjutnya</button>
    </div>
</nav>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
