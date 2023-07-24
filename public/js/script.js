function konfirmasiHapus(id) {
    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        window.location.href = `./app/controllers/proses_hapus.php?id=${id}`;
    }
}