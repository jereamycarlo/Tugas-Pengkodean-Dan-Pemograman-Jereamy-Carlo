<?php
include 'includes/db.php';

// Validasi input
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];

    // Query INSERT
    $sql = "INSERT INTO barang (nama_barang, harga_jual, stok)
            VALUES ('$nama_barang', '$harga_jual', '$stok')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Barang berhasil ditambahkan!');</script>";
        echo "<script>window.location.href='barang.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>