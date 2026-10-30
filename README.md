# 🔬 SIPINJAM — Sistem Peminjaman Inventaris Laboratorium

![Status](https://img.shields.io/badge/status-in%20development-yellow)
![PHP](https://img.shields.io/badge/PHP-native-blue)
![MySQL](https://img.shields.io/badge/database-MySQL-orange)

## 📌 Deskripsi

**SIPINJAM** adalah aplikasi web sederhana untuk mengelola peminjaman peralatan inventaris laboratorium kampus. Aplikasi ini dibangun sebagai proyek **Project Based Learning (PjBL)** pada mata kuliah Pemrograman Berbasis Web, Semester 3.

## 🎯 Permasalahan yang Diselesaikan

- Pencatatan peminjaman peralatan lab masih dilakukan secara manual
- Status ketersediaan barang sulit dipantau secara real-time
- Riwayat peminjaman tidak terdokumentasi dengan baik
- Mahasiswa harus datang langsung ke lab untuk mengecek dan meminjam peralatan

## 👥 Target Pengguna

| Peran | Deskripsi |
|-------|-----------|
| **Admin** | Pengelola lab — mengelola data barang, kategori, pengguna, dan peminjaman |
| **Peminjam** | Mahasiswa/dosen — melihat barang, mengajukan peminjaman, melihat riwayat |

## ✨ Fitur Utama

- Login, logout, dan session management
- Dashboard dengan ringkasan statistik
- Kelola kategori barang (CRUD)
- Kelola data barang/inventaris (CRUD)
- Kelola data pengguna (CRUD)
- Kelola data peminjaman (ubah status)
- Pengajuan peminjaman oleh peminjam
- Status peminjaman: Menunggu, Dipinjam, Dikembalikan, Ditolak
- Tabel data dengan pagination (jQuery AJAX)
- Pencarian/filter data
- Tampilan tanggal & waktu real-time (JavaScript)
- Hapus data dengan konfirmasi

## 🛠️ Teknologi

| Komponen | Teknologi |
|----------|-----------|
| Struktur | HTML5 |
| Tampilan | CSS3 |
| Interaksi | JavaScript |
| Backend | PHP Native |
| Database | MySQL / MariaDB |
| Pagination | jQuery + AJAX |
| Version Control | Git + GitHub |

## 📁 Struktur Folder

```
SIPINJAM/
├── assets/
│   ├── css/           # File stylesheet
│   ├── js/            # File JavaScript
│   └── img/           # Gambar dan ikon
├── config/            # Konfigurasi database
├── includes/          # File reusable (header, sidebar, footer, auth)
├── pages/
│   ├── admin/         # Halaman khusus admin
│   └── peminjam/      # Halaman khusus peminjam
├── ajax/              # Endpoint AJAX untuk pagination
├── wireframe/         # Wireframe halaman (dokumentasi)
├── index.php          # Entry point (redirect ke login)
├── login.php          # Halaman login
├── logout.php         # Proses logout
├── dashboard.php      # Dashboard (routing by role)
└── README.md          # Dokumentasi proyek
```

## 🗓️ Progress Milestone

- [x] **Milestone 1** — Perencanaan & Persiapan (Minggu 1–2)
- [ ] **Milestone 2** — HTML & CSS (akan datang)
- [ ] **Milestone 3** — JavaScript (akan datang)
- [ ] **Milestone 4** — Autentikasi PHP (akan datang)
- [ ] **Milestone 5** — CRUD & Database (akan datang)
- [ ] **Milestone 6** — Pagination AJAX (akan datang)
- [ ] **Milestone 7** — Git & Hosting (akan datang)

## 👤 Penulis

- Nama: *(isi nama kamu)*
- NIM: *(isi NIM kamu)*
- Kelas: *(isi kelas kamu)*
- Mata Kuliah: Pemrograman Berbasis Web — Semester 3
