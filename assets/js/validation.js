/* Validasi ringan di browser untuk form yang memakai atribut data-validate.
   Ini hanya pengalaman pengguna. Validasi wajib di server (PHP) dikerjakan di Milestone 5. */

(function () {
    'use strict';

    function ambilGrup(form, nama) {
        return form.querySelectorAll('[name="' + nama + '"]');
    }

    function pesanKosong(el) {
        var nama = el.dataset.nama || el.name;
        var dipilih = el.tagName === 'SELECT' || el.type === 'radio';
        return nama + (dipilih ? ' wajib dipilih.' : ' wajib diisi.');
    }

    // Mengembalikan teks error, atau string kosong kalau field valid.
    function cekField(form, el) {
        if (el.type === 'radio') {
            var terpilih = Array.prototype.some.call(ambilGrup(form, el.name), function (r) {
                return r.checked;
            });
            return el.required && !terpilih ? pesanKosong(el) : '';
        }

        if (el.value.trim() === '') {
            return el.required ? pesanKosong(el) : '';
        }

        return cekUrutanTanggal(form, el);
    }

    // Field dengan data-tidak-sebelum="nama_field_lain" tidak boleh bertanggal lebih awal dari field itu.
    function cekUrutanTanggal(form, el) {
        var acuan = el.dataset.tidakSebelum && form.elements[el.dataset.tidakSebelum];

        if (!acuan || acuan.value === '') {
            return '';
        }

        if (new Date(el.value) < new Date(acuan.value)) {
            var namaAcuan = (acuan.dataset.nama || acuan.name).toLowerCase();
            return (el.dataset.nama || el.name) + ' tidak boleh sebelum ' + namaAcuan + '.';
        }

        return '';
    }

    function tampilkanError(form, el, pesan) {
        var kotak = form.querySelector('#' + el.name + '-error');
        var pembungkus = el.closest('.field');
        var grup = el.type === 'radio' ? ambilGrup(form, el.name) : [el];

        if (kotak) {
            kotak.textContent = pesan;
        }
        if (pembungkus) {
            pembungkus.classList.toggle('has-error', pesan !== '');
        }
        Array.prototype.forEach.call(grup, function (item) {
            item.setAttribute('aria-invalid', pesan !== '' ? 'true' : 'false');
        });
    }

    function periksaSemua(form) {
        var sudahDicek = {};
        var salah = [];

        Array.prototype.forEach.call(form.elements, function (el) {
            if (!el.name || sudahDicek[el.name]) {
                return;
            }
            sudahDicek[el.name] = true;

            var pesan = cekField(form, el);
            tampilkanError(form, el, pesan);
            if (pesan !== '') {
                salah.push(el);
            }
        });

        return salah;
    }

    function pasangValidasi(form) {
        var ringkasan = form.querySelector('.form-summary');

        form.addEventListener('submit', function (event) {
            var salah = periksaSemua(form);

            if (salah.length === 0) {
                if (ringkasan) {
                    ringkasan.hidden = true;
                }
                return;
            }

            event.preventDefault();

            if (ringkasan) {
                ringkasan.textContent = salah.length + ' kolom belum benar. Perbaiki kolom yang ditandai merah.';
                ringkasan.hidden = false;
            }
            salah[0].focus();
        });

        // Error hilang begitu pengguna memperbaiki isi kolomnya.
        function bersihkanSaatDiubah(event) {
            var el = event.target;
            if (!el.name) {
                return;
            }
            tampilkanError(form, el, cekField(form, el));

            // Mengubah tanggal pinjam bisa membuat tanggal kembali yang sudah terisi jadi valid atau tidak.
            form.querySelectorAll('[data-tidak-sebelum="' + el.name + '"]').forEach(function (turunan) {
                if (turunan.value !== '') {
                    tampilkanError(form, turunan, cekField(form, turunan));
                }
            });
        }

        form.addEventListener('input', bersihkanSaatDiubah);
        form.addEventListener('change', bersihkanSaatDiubah);
    }

    document.querySelectorAll('form[data-validate]').forEach(pasangValidasi);
})();

