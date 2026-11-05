/**
 * SIPINJAM - Script Halaman Login
 * Validasi form sederhana sebelum submit
 */

document.getElementById('loginForm').addEventListener('submit', function (e) {
    var username = document.getElementById('username').value.trim();
    var password = document.getElementById('password').value;

    if (username === '') {
        e.preventDefault();
        alert('Username tidak boleh kosong.');
        return;
    }

    if (password === '') {
        e.preventDefault();
        alert('Password tidak boleh kosong.');
        return;
    }

    // Jika lolos validasi, form disubmit ke server (PHP)
});
