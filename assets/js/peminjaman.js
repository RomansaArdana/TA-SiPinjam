/* Filter status pada tabel peminjaman. Menyaring baris yang sudah ada di halaman,
   tanpa reload. Penyaringan dari database dikerjakan di milestone berikutnya. */

(function () {
    'use strict';

    var pilihan = document.getElementById('filter-status');
    var baris = document.querySelectorAll('#peminjaman-body tr');
    var jumlah = document.getElementById('result-count');
    var kosong = document.getElementById('empty-state');
    var tabel = document.querySelector('.table-wrap');

    if (!pilihan || baris.length === 0) {
        return;
    }

    function terapkanFilter() {
        var status = pilihan.value;
        var tampil = 0;

        baris.forEach(function (tr) {
            var cocok = status === 'semua' || tr.dataset.status === status;
            tr.hidden = !cocok;
            if (cocok) {
                tampil++;
            }
        });

        jumlah.textContent = 'Menampilkan ' + tampil + ' dari ' + baris.length + ' peminjaman';
        kosong.hidden = tampil !== 0;
        tabel.hidden = tampil === 0;
    }

    pilihan.addEventListener('change', terapkanFilter);
    terapkanFilter();
})();

