/**
 * SIPINJAM - Jam Real-Time Sederhana
 * Dibuat simpel agar mudah dipelajari oleh programmer pemula.
 */

function tampilkanWaktu() {
    // 1. Ambil waktu sekarang dari komputer
    const waktuSekarang = new Date();

    // 2. Daftar nama bulan dalam Bahasa Indonesia
    const daftarBulan = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    // 3. Ambil komponen tanggal (tanpa nama hari)
    let tanggal = waktuSekarang.getDate();
    const bulan = waktuSekarang.getMonth();
    const tahun = waktuSekarang.getFullYear();

    // 4. Ambil jam, menit, detik
    let jam = waktuSekarang.getHours();
    let menit = waktuSekarang.getMinutes();
    let detik = waktuSekarang.getSeconds();

    // 5. Beri angka 0 di depan jika angkanya satuan (misal 5 jadi 05)
    if (tanggal < 10) tanggal = '0' + tanggal;
    if (jam < 10) jam = '0' + jam;
    if (menit < 10) menit = '0' + menit;
    if (detik < 10) detik = '0' + detik;

    // 6. Susun kalimat lengkapnya (contoh hasil: 05 November 2026 • 00:25:10 WIB)
    const teksWaktu = `${tanggal} / ${bulan} / ${tahun} • ${jam}:${menit}:${detik} WIB`;

    // 7. Kirim teks ke elemen HTML yang id-nya 'currentDateTime'
    const elemenJam = document.getElementById('currentDateTime');
    if (elemenJam) {
        elemenJam.innerText = teksWaktu;
    }
}

// Jalankan pertama kali begitu halaman selesai dimuat
document.addEventListener('DOMContentLoaded', function () {
    tampilkanWaktu();

    // Ulangi jalankan fungsi tampilkanWaktu setiap 1 detik (1000 milidetik)
    setInterval(tampilkanWaktu, 1000);
});
