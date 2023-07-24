<?php
$host = "localhost";
$user = "root";
$database = "penjualan_barang";

$conn = mysqli_connect($host, $user, '', $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>