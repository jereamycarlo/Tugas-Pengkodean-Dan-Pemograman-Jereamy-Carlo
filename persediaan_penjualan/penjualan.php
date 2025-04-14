<?php
include 'includes/db.php';

// Tambah Penjualan
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tambah_penjualan'])) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal = $_POST['tanggal'];
    $total_harga = $_POST['total_harga'];

    $sql = "INSERT INTO Penjualan (id_pelanggan, tanggal, total_harga)
            VALUES ('$id_pelanggan', '$tanggal', '$total_harga')";
    $conn->query($sql);
}

// Ambil Data Penjualan
$sql = "SELECT * FROM Penjualan";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Penjualan</h1>
    </header>
    <main>
        <form method="POST">
            <h2>Tambah Penjualan Baru</h2>
            <select name="id_pelanggan">
                <?php
                $sql_pelanggan = "SELECT * FROM Pelanggan";
                $result_pelanggan = $conn->query($sql_pelanggan);
                while ($row = $result_pelanggan->fetch_assoc()) {
                    echo "<option value='" . $row['id_pelanggan'] . "'>" . $row['nama_pelanggan'] . "</option>";
                }
                ?>
            </select>
            <input type="date" name="tanggal" required>
            <input type="number" name="total_harga" placeholder="Total Harga" required>
            <button type="submit" name="tambah_penjualan">Tambah Penjualan</button>
        </form>

        <h2>Daftar Penjualan</h2>
        <table>
            <tr>
                <th>ID Penjualan</th>
                <th>Pelanggan</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id_penjualan']; ?></td>
                    <td><?php echo $row['id_pelanggan']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><?php echo $row['total_harga']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </main>
</body>
</html>