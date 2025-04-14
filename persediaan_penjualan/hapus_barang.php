<?php
include 'includes/db.php';

// Ambil ID barang dari parameter URL
$id_barang = $_GET['id'];

// Query DELETE
$sql = "DELETE FROM Barang WHERE id_barang = $id_barang";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Barang berhasil dihapus!');</script>";
    echo "<script>window.location.href='barang.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>