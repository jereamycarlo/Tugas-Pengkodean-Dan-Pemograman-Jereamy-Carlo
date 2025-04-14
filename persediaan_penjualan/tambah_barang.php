<?php
include 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="barang.php">Kelola Barang</a></li>
                <li><a href="#">Penjualan</a></li>
                <li><a href="#">Pembelian</a></li>
                <li><a href="#">Laporan</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Tambah Barang Baru</h2>
        <form action="proses_tambah_barang.php" method="POST">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" required>

            <label for="harga_jual">Harga Jual:</label>
            <input type="number" id="harga_jual" name="harga_jual" step="0.01" required>

            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" required>

            <button type="submit">Simpan Barang</button>
        </form>
    </main>
</body>
</html>