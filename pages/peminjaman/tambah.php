<?php
$pageTitle  = 'Catat Peminjaman';
$activeMenu = 'peminjaman';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>
<link rel="stylesheet" href="../../assets/css/form.css">
<script src="../../assets/js/validation.js" defer></script>

<a class="back-link" href="index.php">Kembali ke daftar peminjaman</a>

<div class="page-header">
    <div>
        <h1 class="page-title">Catat peminjaman</h1>
        <p class="page-intro">Isi data peminjam dan barang yang dipinjam. Kolom bertanda * wajib diisi.</p>
    </div>
</div>

<p class="note">
    Tombol Simpan belum menyimpan ke database, itu dikerjakan di Milestone 5.
    Pilihan barang di bawah masih contoh.
</p>

<!-- TODO Milestone 5: arahkan action ke file proses simpan peminjaman. -->
<form class="form" action="index.php" method="post" novalidate data-validate>
    <p class="form-summary" id="form-summary" role="alert" hidden></p>

    <div class="form-grid">
        <div class="field">
            <label for="nama_peminjam">Nama peminjam *</label>
            <input type="text" id="nama_peminjam" name="nama_peminjam"
                   placeholder="Nama lengkap peminjam" autocomplete="off"
                   required data-nama="Nama peminjam" aria-describedby="nama_peminjam-error">
            <p class="field-error" id="nama_peminjam-error"></p>
        </div>

        <div class="field">
            <label for="identitas">Identitas (NIM/NIP/ID) *</label>
            <input type="text" id="identitas" name="identitas"
                   placeholder="NIM, NIP, atau nomor ID" autocomplete="off"
                   required data-nama="Identitas" aria-describedby="identitas-error">
            <p class="field-error" id="identitas-error"></p>
        </div>

        <div class="field field-full">
            <label for="barang">Barang yang dipinjam *</label>
            <select id="barang" name="barang"
                    required data-nama="Barang" aria-describedby="barang-error">
                <option value="">Pilih barang</option>
                <!-- TODO Milestone 4: isi pilihan dari tabel barang yang berstatus tersedia. -->
                <option value="proyektor">Proyektor</option>
                <option value="laptop">Laptop</option>
                <option value="kamera">Kamera</option>
            </select>
            <p class="field-error" id="barang-error"></p>
        </div>

        <div class="field">
            <label for="tanggal_pinjam">Tanggal pinjam *</label>
            <input type="date" id="tanggal_pinjam" name="tanggal_pinjam"
                   required data-nama="Tanggal pinjam" aria-describedby="tanggal_pinjam-error">
            <p class="field-error" id="tanggal_pinjam-error"></p>
        </div>

        <div class="field">
            <label for="tanggal_kembali">Tanggal rencana kembali *</label>
            <input type="date" id="tanggal_kembali" name="tanggal_kembali"
                   required data-nama="Tanggal rencana kembali"
                   data-tidak-sebelum="tanggal_pinjam"
                   aria-describedby="tanggal_kembali-error">
            <p class="field-error" id="tanggal_kembali-error"></p>
        </div>

        <div class="field field-full">
            <label for="keterangan">Keterangan</label>
            <textarea id="keterangan" name="keterangan"
                      placeholder="Keperluan peminjaman (boleh dikosongkan)"
                      data-nama="Keterangan"></textarea>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Simpan peminjaman</button>
        <a class="btn btn-secondary" href="index.php">Batal</a>
    </div>
</form>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
