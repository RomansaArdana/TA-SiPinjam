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

## MILESTONE 2 — Front-end dan Interaksi Dasar

### Log 3: Layout Induk, Halaman Login, Dashboard, dan Jam Real-Time (Aldeo)
- **Tanggal** : 4 November 2026
- **Tujuan** : Cara membuat jam real-time pada navbar dan menyusun struktur layout header, sidebar, serta footer.
- **Prompt** : *"Bagaimana cara membuat jam dan tanggal real-time dengan JavaScript untuk ditampilkan di navbar PHP?"*
- **Bagian yang dibantu** : Fungsi format waktu pada `assets/js/script.js` dan kerangka `includes/header.php`, `includes/sidebar.php`, `includes/footer.php`.
- **Penjelasan mahasiswa** : Waktu diambil menggunakan `new Date()` di JavaScript, diformat ke bahasa Indonesia, lalu diperbarui setiap 1 detik dengan `setInterval()` ke elemen `#currentDateTime` di navbar.
- **Penyesuaian mahasiswa** : Menyesuaikan tampilan jam dengan gaya `.jam` pada navbar dan mengintegrasikan header/sidebar ke halaman dashboard serta login.
- **Hasil pengujian** : Jam dan tanggal berjalan otomatis setiap detik di navbar tanpa perlu reload halaman.

---

### Log 4: Form Tambah Barang, Form Peminjaman, dan Validasi JavaScript (Arda)
- **Tanggal** : 5 November 2026
- **Tujuan** : Membuat form tambah barang dan form peminjaman (bagian saya di tim), serta validasi di browser supaya form tidak terkirim kalau ada kolom wajib yang kosong atau tanggal kembali lebih awal dari tanggal pinjam.
- **Prompt** : *"Bantu saya mengerjakan bagian Orang 3: form tambah barang, form peminjaman, dan validasi JavaScript. Jelaskan alurnya supaya saya paham dan bisa menjawab saat code walkthrough."*
- **Bagian yang dibantu** : Draf `pages/barang/tambah.php`, `pages/peminjaman/tambah.php`, `assets/js/validation.js`, dan `assets/css/form.css`.
- **Penjelasan mahasiswa** : Form diberi atribut `novalidate` supaya pesan error bawaan browser diganti dengan pesan error yang dibuat di JavaScript. Saat tombol simpan ditekan, event `submit` ditangkap menggunakan `addEventListener`, lalu setiap field wajib diperiksa dengan `trim()` agar input yang hanya berisi spasi tetap dianggap kosong. Jika ada yang belum benar, `event.preventDefault()` menahan pengiriman form dan memunculkan pesan peringatan merah di bawah field. Untuk tanggal peminjaman, nilai tanggal dibandingkan menggunakan objek `Date` agar tanggal rencana kembali tidak boleh mendahului tanggal pinjam.
- **Penyesuaian mahasiswa** : Mengintegrasikan komponen `includes/header.php`, `includes/sidebar.php`, dan `includes/footer.php` dari branch `m2_aldeo` ke kedua halaman form, serta menyamakan palet warna di `form.css` dengan variabel `--navy` milik tim.
- **Hasil pengujian** : Diuji pada form kosong, input berisi spasi saja, tanggal kembali sebelum tanggal pinjam, dan pengisian lengkap; pesan error muncul serta hilang secara langsung saat input diperbaiki.

---

### Log 5: Halaman Daftar Peminjaman dengan Filter Status (Arda)
- **Tanggal** : 5 November 2026
- **Tujuan** : Membuat tabel daftar peminjaman dengan data contoh dan filter status, sebagai tampilan awal sebelum terhubung ke database.
- **Prompt** : *"Buatkan halaman daftar peminjaman dengan data dummy, filter status, dan tampilan yang tetap rapi di layar HP."*
- **Bagian yang dibantu** : Draf `pages/peminjaman/index.php`, `assets/css/peminjaman.css`, dan `assets/js/peminjaman.js`.
- **Penjelasan mahasiswa** : Setiap baris `<tr>` pada tabel memiliki atribut `data-status`. Saat pilihan pada dropdown filter diubah, event `change` di JavaScript menyembunyikan baris yang statusnya tidak sesuai tanpa memuat ulang halaman, serta menampilkan pesan kosong jika tidak ada baris yang cocok. Tabel juga dibungkus dengan `overflow-x: auto` supaya tetap bisa digeser ke samping dengan rapi di layar HP.
- **Penyesuaian mahasiswa** : Menyamakan warna header tabel dengan `.table-dark-header` milik tim, menghubungkan tombol tambah barang di halaman daftar barang ke `tambah.php`, serta memperbaiki penutupan `footer.php` di halaman kategori.
- **Hasil pengujian** : Filter status berfungsi menyaring baris tabel, status tanpa data memunculkan pesan kosong, dan navigasi antar halaman daftar serta form tambah berjalan tanpa error.

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
