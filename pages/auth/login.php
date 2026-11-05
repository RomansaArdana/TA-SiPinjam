<?php
/**
 * SIPINJAM - Halaman Login
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SiPinjam</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="login-page">

    <!-- Panel Kiri: slot gambar/ilustrasi (dikosongkan) -->
    <div class="login-left">
        <!-- Nanti bisa diisi dengan gambar atau ilustrasi -->
    </div>

    <!-- Panel Kanan: Form Login -->
    <div class="login-right">
        <div class="login-card">

            <!-- Logo -->
            <div class="login-logo">Si<span>Pinjam</span></div>
            <p class="login-tagline">Sistem Peminjaman Inventaris</p>

            <h2 class="login-heading">Masuk ke Akun Anda</h2>

            <!-- Alert Error (tampil jika ada error dari PHP) -->
            <?php if (!empty($error)): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($error) ?>
            </div>
            <?php endif; ?>

            <!-- Form Login -->
            <form id="loginForm" method="POST" action="">

                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        class="form-input"
                        placeholder="Masukkan username"
                        autocomplete="username"
                        required
                    >
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-input"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >
                </div>

                <div class="form-group d-flex justify-between align-center">
                    <label class="form-check">
                        <input type="checkbox" name="remember_me" id="rememberMe">
                        Ingat Saya
                    </label>
                    <a href="#" style="font-size: 13px;">Lupa Password?</a>
                </div>

                <div class="form-group">
                    <button type="submit" id="btnLogin" class="btn btn-primary btn-block">
                        Login
                    </button>
                </div>

            </form>

            <p class="login-footer-text">
                Belum punya akun? <a href="#">Hubungi Administrator</a>
            </p>

        </div>
    </div>

</div>

<script src="../../assets/js/login.js"></script>
</body>
</html>
