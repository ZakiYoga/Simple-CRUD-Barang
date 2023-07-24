<?php
include 'db.php';

// Ambil data barang dari database
$sql = "SELECT * FROM barang";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Proyek Penjualan Barang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Daftar Barang</h1>
    <a href="tambah.php">Tambah Barang</a>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['nama_barang']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td><?= $row['stok']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                <a href="proses_hapus.php?id=<?= $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>