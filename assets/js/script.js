// Menampilkan tanggal dan jam real-time pada elemen #currentDateTime di navbar.

function tampilkanWaktu() {
    const waktuSekarang = new Date();

    const daftarBulan = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    let tanggal = waktuSekarang.getDate();
    const namaBulan = daftarBulan[waktuSekarang.getMonth()];
    const tahun = waktuSekarang.getFullYear();

    let jam = waktuSekarang.getHours();
    let menit = waktuSekarang.getMinutes();
    let detik = waktuSekarang.getSeconds();

    if (tanggal < 10) tanggal = '0' + tanggal;
    if (jam < 10) jam = '0' + jam;
    if (menit < 10) menit = '0' + menit;
    if (detik < 10) detik = '0' + detik;

    const teksWaktu = `${tanggal} ${namaBulan} ${tahun} • ${jam}:${menit}:${detik} WIB`;

    const elemenJam = document.getElementById('currentDateTime');
    if (elemenJam) {
        elemenJam.innerText = teksWaktu;
    }
}

document.addEventListener('DOMContentLoaded', function () {
    tampilkanWaktu();
    setInterval(tampilkanWaktu, 1000);
});
