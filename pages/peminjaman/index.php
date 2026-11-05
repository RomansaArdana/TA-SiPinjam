<?php
$pageTitle  = 'Daftar Peminjaman';
$activeMenu = 'peminjaman';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/sidebar.php';
?>
<link rel="stylesheet" href="../../assets/css/form.css">
<link rel="stylesheet" href="../../assets/css/peminjaman.css">
<script src="../../assets/js/peminjaman.js" defer></script>

<div class="page-header">
    <div>
        <h1 class="page-title">Daftar peminjaman</h1>
        <p class="page-intro">Pantau barang yang sedang dipinjam dan riwayat peminjaman.</p>
    </div>
    <a class="btn btn-primary" href="tambah.php">Catat peminjaman</a>
</div>

<div class="toolbar">
    <div class="field">
        <label for="filter-status">Filter status</label>
        <select id="filter-status">
            <option value="semua">Semua status</option>
            <option value="menunggu">Menunggu</option>
            <option value="dipinjam">Dipinjam</option>
            <option value="dikembalikan">Dikembalikan</option>
            <option value="dibatalkan">Dibatalkan</option>
        </select>
    </div>
    <p class="result-count" id="result-count" aria-live="polite"></p>
</div>

<div class="table-wrap" tabindex="0" role="region" aria-label="Tabel daftar peminjaman, bisa digeser ke samping">
    <table class="data-table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Peminjam</th>
                <th scope="col">Barang</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal pinjam</th>
                <th scope="col">Rencana kembali</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="peminjaman-body">
            <tr data-status="menunggu">
                <td>1</td>
                <td>Peminjam Contoh 1</td>
                <td>Proyektor</td>
                <td><span class="badge badge-menunggu">Menunggu</span></td>
                <td><time datetime="2026-11-09">9 Nov 2026</time></td>
                <td><time datetime="2026-11-10">10 Nov 2026</time></td>
                <td class="aksi">
                    <button type="button" class="btn btn-small btn-secondary" disabled>Detail</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Edit</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Hapus</button>
                </td>
            </tr>
            <tr data-status="dipinjam">
                <td>2</td>
                <td>Peminjam Contoh 2</td>
                <td>Laptop</td>
                <td><span class="badge badge-dipinjam">Dipinjam</span></td>
                <td><time datetime="2026-11-03">3 Nov 2026</time></td>
                <td><time datetime="2026-11-07">7 Nov 2026</time></td>
                <td class="aksi">
                    <button type="button" class="btn btn-small btn-secondary" disabled>Detail</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Edit</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Hapus</button>
                </td>
            </tr>
            <tr data-status="dipinjam">
                <td>3</td>
                <td>Peminjam Contoh 3</td>
                <td>Kamera</td>
                <td><span class="badge badge-dipinjam">Dipinjam</span></td>
                <td><time datetime="2026-11-04">4 Nov 2026</time></td>
                <td><time datetime="2026-11-06">6 Nov 2026</time></td>
                <td class="aksi">
                    <button type="button" class="btn btn-small btn-secondary" disabled>Detail</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Edit</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Hapus</button>
                </td>
            </tr>
            <tr data-status="dikembalikan">
                <td>4</td>
                <td>Peminjam Contoh 4</td>
                <td>Proyektor</td>
                <td><span class="badge badge-dikembalikan">Dikembalikan</span></td>
                <td><time datetime="2026-10-27">27 Okt 2026</time></td>
                <td><time datetime="2026-10-29">29 Okt 2026</time></td>
                <td class="aksi">
                    <button type="button" class="btn btn-small btn-secondary" disabled>Detail</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Edit</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Hapus</button>
                </td>
            </tr>
            <tr data-status="dikembalikan">
                <td>5</td>
                <td>Peminjam Contoh 5</td>
                <td>Laptop</td>
                <td><span class="badge badge-dikembalikan">Dikembalikan</span></td>
                <td><time datetime="2026-10-20">20 Okt 2026</time></td>
                <td><time datetime="2026-10-22">22 Okt 2026</time></td>
                <td class="aksi">
                    <button type="button" class="btn btn-small btn-secondary" disabled>Detail</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Edit</button>
                    <button type="button" class="btn btn-small btn-secondary" disabled>Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<p class="empty-state" id="empty-state" hidden>
    Tidak ada peminjaman dengan status ini. Pilih status lain pada filter, atau pilih Semua status.
</p>

<?php
include __DIR__ . '/../../includes/footer.php';
?>
