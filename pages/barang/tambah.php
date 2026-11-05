<?php
// Data contoh barang untuk mode edit statis (Milestone 2). Pengambilan data dari database dikerjakan di Milestone 5.
$daftarContohBarang = [
    'BRG001' => [
        'kode'     => 'BRG001',
        'nama'     => 'Laptop ASUS',
        'kategori' => 'elektronik',
        'lokasi'   => 'Laboratorium 1',
        'kondisi'  => 'baik',
        'status'   => 'tersedia',
    ],
    'BRG002' => [
        'kode'     => 'BRG002',
        'nama'     => 'Proyektor Epson',
        'kategori' => 'elektronik',
        'lokasi'   => 'Laboratorium 2',
        'kondisi'  => 'baik',
        'status'   => 'dipinjam',
    ],
    'BRG003' => [
        'kode'     => 'BRG003',
        'nama'     => 'Kabel HDMI',
        'kategori' => 'peralatan',
        'lokasi'   => 'Gudang',
        'kondisi'  => 'baik',
        'status'   => 'tersedia',
    ],
    'BRG004' => [
        'kode'     => 'BRG004',
        'nama'     => 'Keyboard Logitech',
        'kategori' => 'aksesoris',
        'lokasi'   => 'Laboratorium 1',
        'kondisi'  => 'rusak',
        'status'   => 'perbaikan',
    ],
    'BRG005' => [
        'kode'     => 'BRG005',
        'nama'     => 'Mouse Wireless',
        'kategori' => 'aksesoris',
        'lokasi'   => 'Laboratorium 3',
        'kondisi'  => 'baik',
        'status'   => 'tersedia',
    ],
];

$kodeEdit = trim($_GET['edit'] ?? '');
$dataEdit = $daftarContohBarang[$kodeEdit] ?? null;
$isEdit   = $dataEdit !== null;

$pageTitle  = $isEdit ? 'Edit Barang' : 'Tambah Barang';
$activeMenu = 'barang';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>
<link rel="stylesheet" href="../../assets/css/form.css">
<script src="../../assets/js/validation.js" defer></script>

<a class="back-link" href="index.php">Kembali ke daftar barang</a>

<div class="page-header">
    <div>
        <h1 class="page-title"><?= $isEdit ? 'Edit barang' : 'Tambah barang' ?></h1>
        <p class="page-intro">
            <?= $isEdit
                ? 'Ubah informasi barang inventaris. Kolom bertanda * wajib diisi.'
                : 'Isi data barang inventaris. Kolom bertanda * wajib diisi.' ?>
        </p>
    </div>
</div>

<!-- TODO Milestone 5: arahkan action ke file proses simpan/update barang. -->
<form class="form" action="index.php" method="post" novalidate data-validate>
    <p class="form-summary" id="form-summary" role="alert" hidden></p>

    <div class="form-grid">
        <div class="field">
            <label for="kode_barang">Kode barang *</label>
            <input type="text" id="kode_barang" name="kode_barang"
                   placeholder="Contoh: BRG-001" autocomplete="off"
                   value="<?= htmlspecialchars($dataEdit['kode'] ?? '') ?>"
                   required data-nama="Kode barang" aria-describedby="kode_barang-error">
            <p class="field-error" id="kode_barang-error"></p>
        </div>

        <div class="field">
            <label for="nama_barang">Nama barang *</label>
            <input type="text" id="nama_barang" name="nama_barang"
                   placeholder="Contoh: Proyektor Epson" autocomplete="off"
                   value="<?= htmlspecialchars($dataEdit['nama'] ?? '') ?>"
                   required data-nama="Nama barang" aria-describedby="nama_barang-error">
            <p class="field-error" id="nama_barang-error"></p>
        </div>

        <div class="field">
            <label for="kategori">Kategori *</label>
            <?php $katTerpilih = $dataEdit['kategori'] ?? ''; ?>
            <select id="kategori" name="kategori"
                    required data-nama="Kategori" aria-describedby="kategori-error">
                <option value="">Pilih kategori</option>
                <!-- TODO Milestone 4: isi pilihan dari tabel kategori. -->
                <option value="elektronik" <?= $katTerpilih === 'elektronik' ? 'selected' : '' ?>>Elektronik</option>
                <option value="peralatan" <?= $katTerpilih === 'peralatan' ? 'selected' : '' ?>>Peralatan</option>
                <option value="aksesoris" <?= $katTerpilih === 'aksesoris' ? 'selected' : '' ?>>Aksesoris</option>
                <option value="furniture" <?= $katTerpilih === 'furniture' ? 'selected' : '' ?>>Furniture</option>
                <option value="perlengkapan-kegiatan" <?= $katTerpilih === 'perlengkapan-kegiatan' ? 'selected' : '' ?>>Perlengkapan Kegiatan</option>
            </select>
            <p class="field-error" id="kategori-error"></p>
        </div>

        <div class="field">
            <label for="lokasi">Lokasi penyimpanan *</label>
            <input type="text" id="lokasi" name="lokasi"
                   placeholder="Contoh: Lemari B, ruang sekretariat" autocomplete="off"
                   value="<?= htmlspecialchars($dataEdit['lokasi'] ?? '') ?>"
                   required data-nama="Lokasi penyimpanan" aria-describedby="lokasi-error">
            <p class="field-error" id="lokasi-error"></p>
        </div>

        <div class="field">
            <fieldset aria-describedby="kondisi-error">
                <legend>Kondisi *</legend>
                <?php $kondisiTerpilih = $dataEdit['kondisi'] ?? ''; ?>
                <div class="choice-row">
                    <label class="choice" for="kondisi-baik">
                        <input type="radio" id="kondisi-baik" name="kondisi" value="baik"
                               <?= $kondisiTerpilih === 'baik' ? 'checked' : '' ?>
                               required data-nama="Kondisi">
                        Baik
                    </label>
                    <label class="choice" for="kondisi-rusak">
                        <input type="radio" id="kondisi-rusak" name="kondisi" value="rusak"
                               <?= $kondisiTerpilih === 'rusak' ? 'checked' : '' ?>
                               required data-nama="Kondisi">
                        Rusak
                    </label>
                </div>
            </fieldset>
            <p class="field-error" id="kondisi-error"></p>
        </div>

        <div class="field">
            <label for="status">Status *</label>
            <?php $statusTerpilih = $dataEdit['status'] ?? ''; ?>
            <select id="status" name="status"
                    required data-nama="Status" aria-describedby="status-error">
                <option value="">Pilih status</option>
                <option value="tersedia" <?= $statusTerpilih === 'tersedia' ? 'selected' : '' ?>>Tersedia</option>
                <option value="dipinjam" <?= $statusTerpilih === 'dipinjam' ? 'selected' : '' ?>>Dipinjam</option>
                <option value="perbaikan" <?= $statusTerpilih === 'perbaikan' ? 'selected' : '' ?>>Dalam perbaikan</option>
            </select>
            <p class="field-error" id="status-error"></p>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">
            <?= $isEdit ? 'Simpan perubahan' : 'Simpan barang' ?>
        </button>
        <a class="btn btn-secondary" href="index.php">Batal</a>
    </div>
</form>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
