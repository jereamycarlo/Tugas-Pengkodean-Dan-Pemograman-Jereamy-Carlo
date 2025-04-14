<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "persediaan_penjualan"; // Pastikan ini adalah nama database yang benar

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>