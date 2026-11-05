<?php
// Data contoh peminjaman untuk mode edit statis (Milestone 2). Pengambilan data dari database dikerjakan di Milestone 5.
$daftarContohPeminjaman = [
    '1' => [
        'nama_peminjam'   => 'Peminjam Contoh 1',
        'identitas'       => '240101001',
        'barang'          => 'BRG002',
        'tanggal_pinjam'  => '2026-11-09',
        'tanggal_kembali' => '2026-11-10',
        'keterangan'      => 'Presentasi seminar kelas',
    ],
    '2' => [
        'nama_peminjam'   => 'Peminjam Contoh 2',
        'identitas'       => '240101002',
        'barang'          => 'BRG001',
        'tanggal_pinjam'  => '2026-11-03',
        'tanggal_kembali' => '2026-11-07',
        'keterangan'      => 'Kegiatan panitia himpunan',
    ],
    '3' => [
        'nama_peminjam'   => 'Peminjam Contoh 3',
        'identitas'       => '240101003',
        'barang'          => 'BRG003',
        'tanggal_pinjam'  => '2026-11-04',
        'tanggal_kembali' => '2026-11-06',
        'keterangan'      => 'Dokumentasi acara',
    ],
    '4' => [
        'nama_peminjam'   => 'Peminjam Contoh 4',
        'identitas'       => '240101004',
        'barang'          => 'BRG002',
        'tanggal_pinjam'  => '2026-10-27',
        'tanggal_kembali' => '2026-10-29',
        'keterangan'      => 'Praktikum laboratorium',
    ],
    '5' => [
        'nama_peminjam'   => 'Peminjam Contoh 5',
        'identitas'       => '240101005',
        'barang'          => 'BRG001',
        'tanggal_pinjam'  => '2026-10-20',
        'tanggal_kembali' => '2026-10-22',
        'keterangan'      => 'Rapat koordinasi',
    ],
];

$idEdit   = trim($_GET['edit'] ?? '');
$dataEdit = $daftarContohPeminjaman[$idEdit] ?? null;
$isEdit   = $dataEdit !== null;

$pageTitle  = $isEdit ? 'Edit Peminjaman' : 'Catat Peminjaman';
$activeMenu = 'peminjaman';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>
<link rel="stylesheet" href="../../assets/css/form.css">
<script src="../../assets/js/validation.js" defer></script>

<a class="back-link" href="index.php">Kembali ke daftar peminjaman</a>

<div class="page-header">
    <div>
        <h1 class="page-title"><?= $isEdit ? 'Edit peminjaman' : 'Catat peminjaman' ?></h1>
        <p class="page-intro">
            <?= $isEdit
                ? 'Ubah data peminjam dan jadwal pengembalian. Kolom bertanda * wajib diisi.'
                : 'Isi data peminjam dan barang yang dipinjam. Kolom bertanda * wajib diisi.' ?>
        </p>
    </div>
</div>

<!-- TODO Milestone 5: arahkan action ke file proses simpan/update peminjaman. -->
<form class="form" action="index.php" method="post" novalidate data-validate>
    <p class="form-summary" id="form-summary" role="alert" hidden></p>

    <div class="form-grid">
        <div class="field">
            <label for="nama_peminjam">Nama peminjam *</label>
            <input type="text" id="nama_peminjam" name="nama_peminjam"
                   placeholder="Nama lengkap peminjam" autocomplete="off"
                   value="<?= htmlspecialchars($dataEdit['nama_peminjam'] ?? '') ?>"
                   required data-nama="Nama peminjam" aria-describedby="nama_peminjam-error">
            <p class="field-error" id="nama_peminjam-error"></p>
        </div>

        <div class="field">
            <label for="identitas">Identitas (NIM/NIP/ID) *</label>
            <input type="text" id="identitas" name="identitas"
                   placeholder="NIM, NIP, atau nomor ID" autocomplete="off"
                   value="<?= htmlspecialchars($dataEdit['identitas'] ?? '') ?>"
                   required data-nama="Identitas" aria-describedby="identitas-error">
            <p class="field-error" id="identitas-error"></p>
        </div>

        <div class="field field-full">
            <label for="barang">Barang yang dipinjam *</label>
            <?php $barangTerpilih = $dataEdit['barang'] ?? ''; ?>
            <select id="barang" name="barang"
                    required data-nama="Barang" aria-describedby="barang-error">
                <option value="">Pilih barang</option>
                <!-- TODO Milestone 4: isi pilihan dari tabel barang yang berstatus tersedia. -->
                <option value="BRG001" <?= $barangTerpilih === 'BRG001' ? 'selected' : '' ?>>BRG001 - Laptop ASUS</option>
                <option value="BRG002" <?= $barangTerpilih === 'BRG002' ? 'selected' : '' ?>>BRG002 - Proyektor Epson</option>
                <option value="BRG003" <?= $barangTerpilih === 'BRG003' ? 'selected' : '' ?>>BRG003 - Kabel HDMI</option>
                <option value="BRG005" <?= $barangTerpilih === 'BRG005' ? 'selected' : '' ?>>BRG005 - Mouse Wireless</option>
            </select>
            <p class="field-error" id="barang-error"></p>
        </div>

        <div class="field">
            <label for="tanggal_pinjam">Tanggal pinjam *</label>
            <input type="date" id="tanggal_pinjam" name="tanggal_pinjam"
                   value="<?= htmlspecialchars($dataEdit['tanggal_pinjam'] ?? '') ?>"
                   required data-nama="Tanggal pinjam" aria-describedby="tanggal_pinjam-error">
            <p class="field-error" id="tanggal_pinjam-error"></p>
        </div>

        <div class="field">
            <label for="tanggal_kembali">Tanggal rencana kembali *</label>
            <input type="date" id="tanggal_kembali" name="tanggal_kembali"
                   value="<?= htmlspecialchars($dataEdit['tanggal_kembali'] ?? '') ?>"
                   required data-nama="Tanggal rencana kembali"
                   data-tidak-sebelum="tanggal_pinjam"
                   aria-describedby="tanggal_kembali-error">
            <p class="field-error" id="tanggal_kembali-error"></p>
        </div>

        <div class="field field-full">
            <label for="keterangan">Keterangan</label>
            <textarea id="keterangan" name="keterangan"
                      placeholder="Keperluan peminjaman (boleh dikosongkan)"
                      data-nama="Keterangan"><?= htmlspecialchars($dataEdit['keterangan'] ?? '') ?></textarea>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">
            <?= $isEdit ? 'Simpan perubahan' : 'Simpan peminjaman' ?>
        </button>
        <a class="btn btn-secondary" href="index.php">Batal</a>
    </div>
</form>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
