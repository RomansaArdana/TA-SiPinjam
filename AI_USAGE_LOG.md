# AI Usage Log - SIPINJAM

Dokumentasi ini mencatat penggunaan AI sebagai asisten belajar (copilot) dalam pengerjaan proyek mata kuliah Pemrograman Berbasis Web (PBW), sesuai dengan format pada **Panduan PjBL PBW Bagian I**.

---

## MILESTONE 1 — Perencanaan Proyek dan Persiapan Lingkungan Kerja

### Log 1: Perancangan Struktur Folder & Draf Fitur Awal
- **Tanggal** : 27 Oktober 2026
- **Tujuan** : Mencari referensi pembagian struktur folder yang rapi untuk PHP native dan merancang kerangka fitur inventaris.
- **Prompt** : *"Buatkan ide struktur folder yang rapi dan rancangan fitur dasar untuk aplikasi web peminjaman inventaris kampus menggunakan PHP native dan MySQL."*
- **Bagian yang dibantu** : Draf susunan folder (`assets`, `includes`, `pages`) dan kerangka awal daftar fitur untuk dimasukkan ke `README.md`.
- **Penjelasan mahasiswa** : Aplikasi dipecah ke beberapa folder agar kodenya tidak menumpuk di satu tempat. Bagian yang sering dipakai berulang seperti header, footer, dan sidebar ditaruh di folder `includes` supaya nanti tinggal di-include pakai PHP. Halaman fungsional dikelompokkan ke folder `pages` berdasarkan modulnya (auth, dashboard, barang, kategori, peminjaman).
- **Penyesuaian mahasiswa** : Saya menyaring saran fitur dari AI agar tidak terlalu luas, dan memfokuskannya pada fitur wajib di modul panduan (kelola kategori, data barang, peminjaman barang, serta akun admin). Penamaan folder juga disesuaikan dengan standar XAMPP yang saya pakai.
- **Hasil pengujian** : Struktur folder berhasil dibuat di VS Code, file index awal bisa dibuka di localhost/SiPinjam tanpa error, dan berhasil di-commit ke Git.

---

### Log 2: Audit Kelengkapan Berkas Sesuai Rubrik Milestone 1
- **Tanggal** : 29 Oktober 2026
- **Tujuan** : Mengecek apakah berkas dan persiapan Milestone 1 yang sudah saya buat sudah memenuhi semua kriteria penilaian dosen.
- **Prompt** : *"Tolong periksa proyek SiPinjam saya ini, sekarang posisinya di Milestone 1. Apakah dokumen dan rencananya sudah sesuai dengan rubrik penilaian di panduan PjBL PBW?"*
- **Bagian yang dibantu** : Pengecekan poin-poin rubrik Milestone 1 (identifikasi masalah, target pengguna, fitur, wireframe, dan jumlah commit Git).
- **Penjelasan mahasiswa** : Penilaian Milestone 1 fokus pada pemahaman masalah dan rencana antarmuka, bukan pada database atau kodingan rumit. Rubrik mengharuskan ada latar belakang masalah, target pengguna, daftar fitur, wireframe 4 halaman inti (login, dashboard, data, form), dan minimal 3 commit bermakna di Git.
- **Penyesuaian mahasiswa** : Saya mengecek kembali isi `README.md` untuk memastikan penjelasannya sudah lengkap, memastikan riwayat commit sudah lebih dari 3 kali, mencatat log AI ini, serta memastikan berkas wireframe siap ditunjukkan ke dosen penguji.
- **Hasil pengujian** : `git log` menunjukkan sudah ada 4 commit bertahap, dokumen perencanaan lengkap, dan proyek siap dilanjutkan ke tahap pembuatan tampilan statis di Milestone 2.

---

## MILESTONE 2 — Front-end dan Interaksi Dasar (Upcoming)
- **Tanggal** : 32 Oktober 2026
- **Tujuan** : Cara membuat Jam pada.
- **Prompt** : *"Tolong periksa proyek SiPinjam saya ini, sekarang posisinya di Milestone 1. Apakah dokumen dan rencananya sudah sesuai dengan rubrik penilaian di panduan PjBL PBW?"*
- **Bagian yang dibantu** : Pengecekan poin-poin rubrik Milestone 1 (identifikasi masalah, target pengguna, fitur, wireframe, dan jumlah commit Git).
- **Penjelasan mahasiswa** : Penilaian Milestone 1 fokus pada pemahaman masalah dan rencana antarmuka, bukan pada database atau kodingan rumit. Rubrik mengharuskan ada latar belakang masalah, target pengguna, daftar fitur, wireframe 4 halaman inti (login, dashboard, data, form), dan minimal 3 commit bermakna di Git.
- **Penyesuaian mahasiswa** : Saya mengecek kembali isi `README.md` untuk memastikan penjelasannya sudah lengkap, memastikan riwayat commit sudah lebih dari 3 kali, mencatat log AI ini, serta memastikan berkas wireframe siap ditunjukkan ke dosen penguji.
- **Hasil pengujian** : `git log` menunjukkan sudah ada 4 commit bertahap, dokumen perencanaan lengkap, dan proyek siap dilanjutkan ke tahap pembuatan tampilan statis di Milestone 2.

---

## MILESTONE 3 — Autentikasi dan Session PHP (Upcoming)
*(Akan dicatat saat pengerjaan alur form login, proteksi session, dan proses logout)*

---

## MILESTONE 4 — Database dan Fitur Read (Upcoming)
*(Akan dicatat saat pembuatan tabel MySQL, koneksi PHP, dan menampilkan data nyata di tabel serta dashboard)*

---

## MILESTONE 5 — Create dan Update Data (Upcoming)
*(Akan dicatat saat pembuatan form input, proses simpan/update ke database, dan validasi)*

---

## MILESTONE 6 — Delete, Pagination AJAX, dan Penyempurnaan (Upcoming)
*(Akan dicatat saat penerapan konfirmasi hapus data dan pagination jQuery AJAX)*

---

## MILESTONE 7 — Pengujian, Deployment, dan Presentasi (Upcoming)
*(Akan dicatat saat proses hosting web, perapian akhir, dan persiapan demo)*
