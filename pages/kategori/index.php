<?php
$pageTitle  = 'Data Kategori';
$activeMenu = 'kategori';

// Data contoh kategori (Milestone 2). Data dari database dikerjakan di Milestone 4.
$kategori = [
    [
        'id'        => 'KTG001',
        'nama'      => 'Elektronik',
        'deskripsi' => 'Peralatan elektronik untuk kegiatan dan pembelajaran',
        'jumlah'    => 2,
    ],
    [
        'id'        => 'KTG002',
        'nama'      => 'Peralatan',
        'deskripsi' => 'Peralatan pendukung kegiatan sehari-hari',
        'jumlah'    => 1,
    ],
    [
        'id'        => 'KTG003',
        'nama'      => 'Aksesoris',
        'deskripsi' => 'Perlengkapan tambahan komputer dan perangkat lainnya',
        'jumlah'    => 2,
    ],
    [
        'id'        => 'KTG004',
        'nama'      => 'Furniture',
        'deskripsi' => 'Perabotan dan perlengkapan ruangan',
        'jumlah'    => 0,
    ],
    [
        'id'        => 'KTG005',
        'nama'      => 'Perlengkapan Kegiatan',
        'deskripsi' => 'Barang untuk mendukung kegiatan organisasi',
        'jumlah'    => 0,
    ],
];

$cari = trim($_GET['cari'] ?? '');

$dataKategori = array_filter($kategori, function ($item) use ($cari) {
    if ($cari === '') {
        return true;
    }
    return stripos($item['nama'], $cari) !== false ||
           stripos($item['id'], $cari) !== false;
});

$totalKategori = count($kategori);
$totalBarang   = array_sum(array_column($kategori, 'jumlah'));

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>
<link rel="stylesheet" href="../../assets/css/form.css">
<link rel="stylesheet" href="../../assets/css/peminjaman.css">

<div class="page-head">
    <div>
        <h1 class="page-title">Data Kategori</h1>
        <p class="page-intro">Kelola kategori barang inventaris SIPINJAM.</p>
    </div>
    <button type="button" class="btn btn-secondary" disabled>+ Tambah Kategori (Milestone 5)</button>
</div>

<div class="summary-row">
    <div class="summary-box">
        <p>Total Kategori (Contoh)</p>
        <strong><?= $totalKategori ?></strong>
    </div>
    <div class="summary-box">
        <p>Total Barang Terdata (Contoh)</p>
        <strong><?= $totalBarang ?></strong>
    </div>
</div>

<div class="toolbar">
    <form method="get" action="index.php" class="search-form">
        <label for="cari-kategori" class="field-label">Cari kategori</label>
        <input
            type="text"
            id="cari-kategori"
            name="cari"
            placeholder="Ketik nama atau kode kategori"
            value="<?= htmlspecialchars($cari) ?>"
        >
        <button type="submit" class="btn btn-primary">Cari</button>
        <?php if ($cari !== ''): ?>
            <a href="index.php" class="btn btn-secondary">Reset</a>
        <?php endif; ?>
    </form>
    <p class="result-count">
        Menampilkan <?= count($dataKategori) ?> dari <?= $totalKategori ?> kategori
    </p>
</div>

<div class="table-wrap" tabindex="0" role="region" aria-label="Tabel daftar kategori, bisa digeser ke samping">
    <table class="data-table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Kategori</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($dataKategori) > 0): ?>
                <?php $no = 1; ?>
                <?php foreach ($dataKategori as $item): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><strong><?= htmlspecialchars($item['id']) ?></strong></td>
                        <td><?= htmlspecialchars($item['nama']) ?></td>
                        <td><?= htmlspecialchars($item['deskripsi']) ?></td>
                        <td>
                            <span class="badge badge-dipinjam">
                                <?= (int) $item['jumlah'] ?> Barang
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
                    <td colspan="6">
                        Kategori dengan kata kunci "<?= htmlspecialchars($cari) ?>" tidak ditemukan.
                        Klik Reset untuk menampilkan semua kategori.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
