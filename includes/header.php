<?php
/**
 * SIPINJAM - Header / Navbar
 * Dipanggil dengan: <?php include '../../includes/header.php'; ?>
 *
 * Variabel yang bisa diset sebelum include:
 *   $pageTitle    - judul halaman (untuk <title>)
 *   $activeMenu   - nama menu yang aktif (contoh: 'dashboard', 'barang')
 */

$pageTitle  = $pageTitle  ?? 'SiPinjam';
$activeMenu = $activeMenu ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> - SiPinjam</title>
    <link rel="stylesheet" href="/TA-SiPinjam/assets/css/style.css?v=<?= time() ?>">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar">
    <a href="/TA-SiPinjam/pages/dashboard/index.php" class="navbar-brand">
        Si<span>Pinjam</span>
    </a>
    <ul class="navbar-nav">
        <li>
            <div class="jam">
                <span id="currentDateTime">Memuat waktu...</span>
            </div>
        </li>
    </ul>
</nav>

<!-- ===== LAYOUT UTAMA (dibuka di sini, ditutup di footer.php) ===== -->
<div class="layout-main">
