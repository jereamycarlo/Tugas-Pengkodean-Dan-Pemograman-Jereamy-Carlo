<?php
include 'includes/db.php';

// Ambil data barang dari database
$sql = "SELECT * FROM barang";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
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
        <h2>Kelola Barang</h2>
        <a href="tambah_barang.php" class="btn-add">Tambah Barang</a>

        <?php if ($result->num_rows > 0): ?>
            <table>
                <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id_barang']; ?></td>
                        <td><?php echo $row['nama_barang']; ?></td>
                        <td><?php echo $row['harga_jual']; ?></td>
                        <td><?php echo $row['stok']; ?></td>
                        <td>
                            <a href="edit_barang.php?id=<?php echo $row['id_barang']; ?>">Edit</a>
                            <a href="hapus_barang.php?id=<?php echo $row['id_barang']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>Tidak ada barang yang tersedia.</p>
        <?php endif; ?>
    </main>
</body>
</html>