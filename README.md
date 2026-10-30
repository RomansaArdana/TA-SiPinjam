# SIPINJAM - Sistem Peminjaman Inventaris

![PHP](https://img.shields.io/badge/PHP-Native-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL%2FMariaDB-Database-4479A1?logo=mysql&logoColor=white)
![jQuery](https://img.shields.io/badge/jQuery-AJAX-0769AD?logo=jquery&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-Markup-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-Styling-1572B6?logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Logic-F7DF1E?logo=javascript&logoColor=black)

---

## Deskripsi

**SIPINJAM** merupakan aplikasi berbasis web yang digunakan untuk membantu organisasi, instansi, dan perusahaan dalam mengelola barang inventaris serta proses peminjaman barang secara lebih terstruktur.

Aplikasi ini memungkinkan admin untuk mengelola data kategori barang, data inventaris, dan data peminjaman. Selain itu, admin dapat memantau ketersediaan barang, status peminjaman, serta riwayat peminjaman melalui satu sistem.

Pada versi awal, **admin atau petugas inventaris menjadi pengguna utama sistem**. Peminjam tidak perlu memiliki akun untuk menggunakan aplikasi. Data peminjam akan dicatat pada saat proses peminjaman dilakukan.

### Alur Utama

```
Login Admin → Dashboard → Kelola Kategori → Kelola Barang → Kelola Peminjaman → Memantau Status → Melihat Riwayat
```

---

## Latar Belakang

Peminjaman barang inventaris masih sering dilakukan secara manual sehingga pencatatan data peminjaman kurang rapi dan sulit untuk dipantau. Selain itu, ketersediaan barang dan riwayat peminjaman juga menjadi lebih sulit untuk diketahui.

Oleh karena itu, direncanakan sebuah sistem peminjaman inventaris berbasis web yang dapat membantu admin dalam mengelola data barang, memantau status peminjaman, serta menyimpan riwayat peminjaman dengan lebih teratur.

### Permasalahan

1. Pencatatan peminjaman barang masih dilakukan secara manual sehingga data kurang terorganisir.
2. Admin kesulitan mengetahui barang yang tersedia dan barang yang sedang dipinjam.
3. Riwayat peminjaman sulit ditelusuri kembali karena belum tersimpan secara terstruktur.
4. Data barang dan kategori membutuhkan pengelolaan yang lebih teratur.
5. Pemantauan status peminjaman menjadi kurang efektif apabila dilakukan secara manual.

### Tujuan

1. Membantu organisasi, instansi, dan perusahaan dalam mengelola data barang inventaris.
2. Mempermudah admin dalam mengelola kategori dan data barang.
3. Mempermudah proses pencatatan dan pengelolaan peminjaman barang.
4. Membantu admin mengetahui ketersediaan dan status barang.
5. Menyimpan riwayat peminjaman agar mudah ditelusuri kembali.
6. Mengurangi ketergantungan pada pencatatan peminjaman secara manual.
7. Menerapkan konsep pemrograman berbasis web seperti HTML, CSS, JavaScript, PHP, MySQL/MariaDB, CRUD, session, dan jQuery AJAX.

---

## Target Pengguna

Target penggunaan SIPINJAM adalah **organisasi, instansi, dan perusahaan** yang membutuhkan sistem untuk membantu mengelola barang inventaris dan peminjamannya.

- **Organisasi** — Mengelola peminjaman peralatan organisasi seperti kamera, proyektor, laptop, dan perlengkapan kegiatan.
- **Instansi** — Mengelola inventaris dan peminjaman fasilitas yang digunakan oleh pegawai atau anggota.
- **Perusahaan** — Mengelola peminjaman barang kerja seperti laptop, kamera, proyektor, dan perangkat pendukung.

---

## Fitur Utama

Berikut adalah fitur-fitur utama yang direncanakan untuk SIPINJAM:

### Login dan Logout

- Admin dapat masuk ke sistem menggunakan username dan password.
- Admin dapat keluar dari sistem dan session akan dihapus.
- Halaman pengelolaan data hanya dapat diakses oleh pengguna yang sudah login (proteksi halaman).

### Dashboard

- Total barang inventaris.
- Jumlah barang tersedia.
- Jumlah barang sedang dipinjam.
- Total transaksi peminjaman.
- Tanggal dan waktu saat ini (ditampilkan menggunakan JavaScript).

### Kategori Barang

- Menampilkan daftar kategori.
- Menambahkan kategori baru.
- Mengedit kategori.
- Menghapus kategori (dengan konfirmasi).

### List Barang

- Menampilkan daftar seluruh barang inventaris (nama, kategori, kondisi, lokasi, status).
- Menambahkan barang baru.
- Mengedit data barang.
- Menghapus data barang (dengan konfirmasi).
- **Pencarian** berdasarkan nama barang.
- **Pagination** menggunakan jQuery AJAX (tanpa reload halaman).

### Peminjaman Barang

- Menampilkan daftar peminjaman.
- Menambahkan transaksi peminjaman baru melalui form.
- Mengedit data peminjaman.
- Melihat detail peminjaman.
- Menghapus data peminjaman (dengan konfirmasi).
- **Filter** berdasarkan status peminjaman (Menunggu, Dipinjam, Dikembalikan, Dibatalkan).

### Form Peminjaman

Form digunakan untuk mencatat transaksi peminjaman baru dengan data:

- Nama peminjam.
- Identitas peminjam (NIM/NIP/ID).
- Pilihan barang.
- Tanggal peminjaman.
- Tanggal rencana pengembalian.
- Keterangan.

Form akan melakukan validasi input agar data yang dimasukkan sesuai.

### Fitur Teknis

- **CRUD** lengkap (Create, Read, Update, Delete) untuk kategori, barang, dan peminjaman.
- **Pagination** dengan jQuery AJAX pada halaman daftar barang.
- **Pencarian** nama barang pada halaman daftar barang.
- **Filter** status pada halaman peminjaman.
- **JavaScript** untuk tanggal/waktu, validasi form, dan konfirmasi sebelum menghapus data.
- **Responsive design**.

### Rencana Pengembangan Lanjutan

Fitur-fitur berikut direncanakan sebagai pengembangan lanjutan setelah fitur utama selesai:

- Upload foto barang.
- Cetak bukti peminjaman.
- Filter berdasarkan rentang tanggal.
- Peringatan barang terlambat dikembalikan.
- Riwayat aktivitas pengguna.

---

## Teknologi yang Digunakan

| Teknologi | Fungsi |
| --- | --- |
| **HTML5** | Struktur halaman |
| **CSS3** | Styling dan layout responsif |
| **JavaScript** | Interaksi, validasi form, tanggal/waktu |
| **jQuery** | AJAX pagination dan interaksi DOM |
| **PHP Native** | Server-side logic dan session management |
| **MySQL / MariaDB** | Database |

---

## Struktur Folder

Berikut adalah rancangan struktur folder proyek SIPINJAM:

```
SIPINJAM/
├── assets/
│   ├── css/                    # File stylesheet
│   ├── js/                     # File JavaScript
│   └── img/                    # Gambar dan logo
├── config/                     # Konfigurasi (koneksi database, dsb.)
├── database/                   # File SQL untuk pembuatan database
├── includes/                   # Komponen reusable (header, footer, auth)
├── pages/
│   ├── auth/                   # Halaman login dan logout
│   ├── dashboard/              # Halaman dashboard
│   ├── kategori/               # Halaman kelola kategori
│   ├── barang/                 # Halaman kelola barang
│   └── peminjaman/             # Halaman kelola peminjaman
├── README.md                   # Dokumentasi proyek
└── index.php                   # Entry point aplikasi
```

> **Catatan:** Struktur ini merupakan rancangan awal. File-file di dalam setiap folder akan dibuat secara bertahap pada milestone berikutnya.

---

## Halaman yang Direncanakan

Berikut adalah daftar halaman yang direncanakan untuk SIPINJAM:

| No | Halaman | Keterangan |
| --- | --- | --- |
| 1 | **Login** | Form login admin dengan username dan password. |
| 2 | **Dashboard** | Ringkasan informasi inventaris: total barang, barang tersedia, barang dipinjam, total peminjaman, serta tanggal dan waktu. |
| 3 | **Kategori Barang** | Menampilkan daftar kategori barang dengan aksi tambah, edit, dan hapus. |
| 4 | **Tambah / Edit Kategori** | Form untuk menambahkan atau mengubah data kategori. |
| 5 | **List Barang** | Menampilkan daftar inventaris dengan pencarian nama barang dan pagination AJAX. |
| 6 | **Tambah / Edit Barang** | Form untuk menambahkan atau mengubah data barang (nama, kategori, kondisi, lokasi, status). |
| 7 | **List Peminjaman** | Menampilkan daftar peminjaman dengan filter berdasarkan status. |
| 8 | **Form / Edit Peminjaman** | Form untuk menambahkan atau mengubah transaksi peminjaman. |
| 9 | **Detail Peminjaman** | Menampilkan informasi lengkap dari satu transaksi peminjaman. |
| 10 | **Logout** | Mengakhiri session dan mengembalikan admin ke halaman login. |

---

## Wireframe Milestone 1

Pada tahap Milestone 1, wireframe yang dibuat meliputi:

1. **Login** — Tampilan halaman login admin.
2. **Dashboard** — Tampilan ringkasan informasi inventaris dan peminjaman.
3. **Daftar Barang** — Tampilan daftar barang dengan pencarian dan pagination.
4. **Form Peminjaman** — Tampilan form untuk mencatat transaksi peminjaman baru.

Wireframe disimpan di dalam folder `wireframe/` dan digunakan sebagai acuan pengembangan antarmuka pada tahap berikutnya.

---

## Ruang Lingkup Milestone 1

Milestone 1 berfokus pada **perencanaan dan perancangan proyek**. Tahap ini mencakup:

- Identitas dan konsep aplikasi.
- Latar belakang dan permasalahan.
- Tujuan aplikasi.
- Target pengguna.
- Fitur utama yang direncanakan.
- Rancangan halaman.
- Wireframe.
- Struktur folder awal.
- Repository Git.
- README.

> **Catatan:** Implementasi kode (PHP, CSS, JavaScript) dan pembuatan database akan dilakukan pada milestone berikutnya secara bertahap.

---

## Struktur Navigasi

```
Login
  │
  ▼
Dashboard
  ├── Dashboard
  ├── Kategori Barang
  │     ├── Daftar Kategori
  │     ├── Tambah Kategori
  │     └── Edit Kategori
  ├── Data Barang
  │     ├── Daftar Barang
  │     ├── Tambah Barang
  │     └── Edit Barang
  ├── Peminjaman
  │     ├── Daftar Peminjaman
  │     ├── Tambah Peminjaman
  │     ├── Detail Peminjaman
  │     └── Edit Peminjaman
  └── Logout
```
