
<?php
$barang = [
    [
        "kode" => "BRG001",
        "nama" => "Laptop ASUS",
        "kategori" => "Elektronik",
        "kondisi" => "Baik",
        "lokasi" => "Laboratorium 1",
        "status" => "Tersedia"
    ],
    [
        "kode" => "BRG002",
        "nama" => "Proyektor Epson",
        "kategori" => "Elektronik",
        "kondisi" => "Baik",
        "lokasi" => "Laboratorium 2",
        "status" => "Dipinjam"
    ],
    [
        "kode" => "BRG003",
        "nama" => "Kabel HDMI",
        "kategori" => "Peralatan",
        "kondisi" => "Baik",
        "lokasi" => "Gudang",
        "status" => "Tersedia"
    ],
    [
        "kode" => "BRG004",
        "nama" => "Keyboard Logitech",
        "kategori" => "Aksesoris",
        "kondisi" => "Rusak",
        "lokasi" => "Laboratorium 1",
        "status" => "Tidak Tersedia"
    ],
    [
        "kode" => "BRG005",
        "nama" => "Mouse Wireless",
        "kategori" => "Aksesoris",
        "kondisi" => "Baik",
        "lokasi" => "Laboratorium 3",
        "status" => "Tersedia"
    ]
];

$cari = $_GET['cari'] ?? '';

$dataBarang = array_filter($barang, function ($item) use ($cari) {
    return stripos($item['nama'], $cari) !== false ||
           stripos($item['kode'], $cari) !== false;
});
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang - SIPINJAM</title>

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
            background: #ffffff;
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

        /* Search and Button */
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

        .search-form button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-category {
            background: #2563eb;
            color: white;
            padding: 11px 17px;
            text-decoration: none;
            border-radius: 6px;
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
            min-width: 750px;
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

        .badge {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .tersedia {
            background: #dcfce7;
            color: #15803d;
        }

        .dipinjam {
            background: #fef3c7;
            color: #b45309;
        }

        .tidak-tersedia {
            background: #fee2e2;
            color: #b91c1c;
        }

        .baik {
            color: #15803d;
            font-weight: 500;
        }

        .rusak {
            color: #dc2626;
            font-weight: 500;
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
            <a href="../kategori/index.php">▧ Kategori</a>
            <a href="index.php" class="active">▤ Data Barang</a>
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
                <h1>Data Barang</h1>
                <p>Kelola data inventaris SIPINJAM</p>
            </div>

            <!-- Search dan Tombol Kategori -->
            <div class="toolbar">

                <form method="GET" class="search-form">
                    <input
                        type="text"
                        name="cari"
                        placeholder="Cari Barang/Kode..."
                        value="<?= htmlspecialchars($cari) ?>"
                    >
                    <button type="submit">Cari</button>
                </form>

                <a href="../kategori/index.php" class="btn-category">
                    + Kategori Barang
                </a>

            </div>

            <!-- Tabel Barang -->
            <div class="table-container">

                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (count($dataBarang) > 0): ?>

                            <?php $no = 1; ?>

                            <?php foreach ($dataBarang as $item): ?>

                                <tr>
                                    <td><?= $no++ ?></td>

                                    <td>
                                        <?= htmlspecialchars($item['kode']) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($item['nama']) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($item['kategori']) ?>
                                    </td>

                                    <td>
                                        <span class="<?= $item['kondisi'] == 'Baik' ? 'baik' : 'rusak' ?>">
                                            <?= htmlspecialchars($item['kondisi']) ?>
                                        </span>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($item['lokasi']) ?>
                                    </td>

                                    <td>
                                        <span class="badge <?= strtolower(str_replace(' ', '-', $item['status'])) ?>">
                                            <?= htmlspecialchars($item['status']) ?>
                                        </span>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>
                                <td colspan="7" class="empty">
                                    Data barang tidak ditemukan.
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
