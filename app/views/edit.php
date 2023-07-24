<?php
include '../config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM barang WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <h1>Edit Barang</h1>
    <form action="../controllers/proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

        <label>Nama Barang</label>
        <input type="text" name="nama_barang" value="<?= $row['nama_barang']; ?>" required>

        <label>Harga</label>
        <input type="number" name="harga" value="<?= $row['harga']; ?>" required>

        <label>Stok</label>
        <input type="number" name="stok" value="<?= $row['stok']; ?>" required>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>

</html>