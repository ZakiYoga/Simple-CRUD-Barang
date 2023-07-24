<!DOCTYPE html>
<html>

<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <h1>Tambah Barang</h1>
    <form action="../controllers/proses_tambah.php" method="POST">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" required>

        <label>Harga</label>
        <input type="number" name="harga" required>

        <label>Stok</label>
        <input type="number" name="stok" required>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>