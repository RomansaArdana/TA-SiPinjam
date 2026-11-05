<?php
$pageTitle  = 'Tambah Barang';
$activeMenu = 'barang';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>
<link rel="stylesheet" href="../../assets/css/form.css">
<script src="../../assets/js/validation.js" defer></script>

<a class="back-link" href="index.php">Kembali ke daftar barang</a>

<div class="page-header">
    <div>
        <h1 class="page-title">Tambah barang</h1>
        <p class="page-intro">Isi data barang inventaris. Kolom bertanda * wajib diisi.</p>
    </div>
</div>

<!-- TODO Milestone 5: arahkan action ke file proses simpan barang. -->
<form class="form" action="index.php" method="post" novalidate data-validate>
    <p class="form-summary" id="form-summary" role="alert" hidden></p>

    <div class="form-grid">
        <div class="field">
            <label for="kode_barang">Kode barang *</label>
            <input type="text" id="kode_barang" name="kode_barang"
                   placeholder="Contoh: BRG-001" autocomplete="off"
                   required data-nama="Kode barang" aria-describedby="kode_barang-error">
            <p class="field-error" id="kode_barang-error"></p>
        </div>

        <div class="field">
            <label for="nama_barang">Nama barang *</label>
            <input type="text" id="nama_barang" name="nama_barang"
                   placeholder="Contoh: Proyektor Epson" autocomplete="off"
                   required data-nama="Nama barang" aria-describedby="nama_barang-error">
            <p class="field-error" id="nama_barang-error"></p>
        </div>

        <div class="field">
            <label for="kategori">Kategori *</label>
            <select id="kategori" name="kategori"
                    required data-nama="Kategori" aria-describedby="kategori-error">
                <option value="">Pilih kategori</option>
                <!-- TODO Milestone 4: isi pilihan dari tabel kategori. -->
                <option value="elektronik">Elektronik</option>
                <option value="peralatan">Peralatan</option>
                <option value="aksesoris">Aksesoris</option>
                <option value="furniture">Furniture</option>
                <option value="perlengkapan-kegiatan">Perlengkapan Kegiatan</option>
            </select>
            <p class="field-error" id="kategori-error"></p>
        </div>

        <div class="field">
            <label for="lokasi">Lokasi penyimpanan *</label>
            <input type="text" id="lokasi" name="lokasi"
                   placeholder="Contoh: Lemari B, ruang sekretariat" autocomplete="off"
                   required data-nama="Lokasi penyimpanan" aria-describedby="lokasi-error">
            <p class="field-error" id="lokasi-error"></p>
        </div>

        <div class="field">
            <fieldset aria-describedby="kondisi-error">
                <legend>Kondisi *</legend>
                <div class="choice-row">
                    <label class="choice" for="kondisi-baik">
                        <input type="radio" id="kondisi-baik" name="kondisi" value="baik"
                               required data-nama="Kondisi">
                        Baik
                    </label>
                    <label class="choice" for="kondisi-rusak">
                        <input type="radio" id="kondisi-rusak" name="kondisi" value="rusak"
                               required data-nama="Kondisi">
                        Rusak
                    </label>
                </div>
            </fieldset>
            <p class="field-error" id="kondisi-error"></p>
        </div>

        <div class="field">
            <label for="status">Status *</label>
            <select id="status" name="status"
                    required data-nama="Status" aria-describedby="status-error">
                <option value="">Pilih status</option>
                <option value="tersedia">Tersedia</option>
                <option value="dipinjam">Dipinjam</option>
                <option value="perbaikan">Dalam perbaikan</option>
            </select>
            <p class="field-error" id="status-error"></p>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Simpan barang</button>
        <a class="btn btn-secondary" href="index.php">Batal</a>
    </div>
</form>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
