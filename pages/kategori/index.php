
<?php
// Data contoh kategori
$kategori = [
    [
        "id" => "KTG001",
        "nama" => "Elektronik",
        "deskripsi" => "Peralatan elektronik untuk kegiatan dan pembelajaran",
        "jumlah" => 2
    ],
    [
        "id" => "KTG002",
        "nama" => "Peralatan",
        "deskripsi" => "Peralatan pendukung kegiatan sehari-hari",
        "jumlah" => 1
    ],
    [
        "id" => "KTG003",
        "nama" => "Aksesoris",
        "deskripsi" => "Perlengkapan tambahan komputer dan perangkat lainnya",
        "jumlah" => 2
    ],
    [
        "id" => "KTG004",
        "nama" => "Furniture",
        "deskripsi" => "Perabotan dan perlengkapan ruangan",
        "jumlah" => 0
    ],
    [
        "id" => "KTG005",
        "nama" => "Perlengkapan Kegiatan",
        "deskripsi" => "Barang untuk mendukung kegiatan organisasi",
        "jumlah" => 0
    ]
];

// Fitur pencarian kategori
$cari = $_GET['cari'] ?? '';

$dataKategori = array_filter($kategori, function ($item) use ($cari) {
    return stripos($item['nama'], $cari) !== false ||
           stripos($item['id'], $cari) !== false;
});

$totalKategori = count($kategori);
$totalBarang = array_sum(array_column($kategori, 'jumlah'));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Kategori - SIPINJAM</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f4f6f9;
            color: #333;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 230px;
            background: white;
            border-right: 1px solid #ddd;
            padding: 25px 15px;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .logo {
            font-size: 23px;
            font-weight: bold;
            color: #2563eb;
            padding: 0 12px 30px;
        }

        .menu a {
            display: block;
            padding: 13px 15px;
            margin-bottom: 8px;
            text-decoration: none;
            color: #555;
            border-radius: 7px;
            font-size: 14px;
        }

        .menu a:hover,
        .menu a.active {
            background: #e8efff;
            color: #2563eb;
        }

        .logout {
            margin-top: auto;
            padding: 13px 15px;
            color: #dc2626;
            text-decoration: none;
            font-size: 14px;
        }

        /* Main Content */
        .main {
            flex: 1;
            min-width: 0;
        }

        .topbar {
            height: 65px;
            background: white;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 35px;
        }

        .admin {
            font-size: 14px;
            color: #555;
        }

        .content {
            padding: 35px;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .page-title h1 {
            margin: 0 0 8px;
            font-size: 27px;
        }

        .page-title p {
            margin: 0;
            color: #777;
            font-size: 14px;
        }

        /* Summary */
        .summary {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .summary-card {
            background: white;
            padding: 20px;
            border-radius: 9px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .summary-card p {
            margin: 0 0 10px;
            color: #777;
            font-size: 14px;
        }

        .summary-card h2 {
            margin: 0;
            font-size: 26px;
        }

        /* Toolbar */
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 18px;
        }

        .search-form {
            display: flex;
            gap: 8px;
        }

        .search-form input {
            width: 250px;
            padding: 11px 13px;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
        }

        .search-form button,
        .btn-add {
            background: #2563eb;
            color: white;
            border: none;
            padding: 11px 17px;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: 13px;
        }

        /* Table */
        .table-container {
            background: white;
            border-radius: 9px;
            padding: 20px;
            overflow-x: auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }

        th, td {
            padding: 15px 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        th {
            background: #f5f7fa;
            color: #444;
            font-weight: 600;
        }

        tr:hover {
            background: #fafafa;
        }

        .jumlah {
            display: inline-block;
            background: #e8efff;
            color: #2563eb;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 12px;
        }

        .action {
            display: flex;
            gap: 7px;
        }

        .btn-edit {
            background: #fef3c7;
            color: #b45309;
            padding: 7px 11px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 12px;
        }

        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
            padding: 7px 11px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 12px;
        }

        .empty {
            text-align: center;
            color: #888;
            padding: 25px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 165px;
                padding: 20px 8px;
            }

            .content {
                padding: 20px 12px;
            }

            .topbar {
                padding: 0 15px;
            }

            .search-form input {
                width: 160px;
            }
        }

        @media (max-width: 500px) {
            .layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .menu {
                display: flex;
                flex-wrap: wrap;
            }

            .menu a {
                padding: 10px;
            }

            .logout {
                margin-top: 10px;
            }

            .summary {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- Sidebar -->
    <aside class="sidebar">

        <div class="logo">SIPINJAM</div>

        <nav class="menu">
            <a href="../dashboard/index.php">▣ Dashboard</a>
            <a href="index.php" class="active">▧ Kategori</a>
            <a href="../barang/index.php">▤ Data Barang</a>
            <a href="../peminjaman/index.php">▣ Peminjaman</a>
        </nav>

        <a href="../../index.php" class="logout">↪ Logout</a>

    </aside>

    <!-- Main Content -->
    <main class="main">

        <header class="topbar">
            <div class="admin">♙ &nbsp; Admin</div>
        </header>

        <section class="content">

            <div class="page-title">
                <h1>Data Kategori</h1>
                <p>Kelola kategori barang inventaris SIPINJAM</p>
            </div>

            <!-- Ringkasan -->
            <div class="summary">

                <div class="summary-card">
                    <p>Total Kategori</p>
                    <h2><?= $totalKategori ?></h2>
                </div>

                <div class="summary-card">
                    <p>Total Barang dalam Kategori</p>
                    <h2><?= $totalBarang ?></h2>
                </div>

            </div>

            <!-- Pencarian dan Tambah -->
            <div class="toolbar">

                <form method="GET" class="search-form">
                    <input
                        type="text"
                        name="cari"
                        placeholder="Cari Kategori..."
                        value="<?= htmlspecialchars($cari) ?>"
                    >

                    <button type="submit">Cari</button>
                </form>

                <a href="#" class="btn-add">
                    + Tambah Kategori
                </a>

            </div>

            <!-- Tabel Kategori -->
            <div class="table-container">

                <table>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th>Jumlah Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (count($dataKategori) > 0): ?>

                            <?php $no = 1; ?>

                            <?php foreach ($dataKategori as $item): ?>

                                <tr>
                                    <td><?= $no++ ?></td>

                                    <td>
                                        <?= htmlspecialchars($item['id']) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($item['nama']) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($item['deskripsi']) ?>
                                    </td>

                                    <td>
                                        <span class="jumlah">
                                            <?= $item['jumlah'] ?> Barang
                                        </span>
                                    </td>

                                    <td>
                                        <div class="action">
                                            <a href="#" class="btn-edit">
                                                Edit
                                            </a>

                                            <a href="#" class="btn-delete">
                                                Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>
                                <td colspan="6" class="empty">
                                    Kategori tidak ditemukan.
                                </td>
                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </section>

    </main>

</div>

</body>
</html>
