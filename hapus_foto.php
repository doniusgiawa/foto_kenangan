<?php
include "conn.php"; // Sertakan file koneksi ke database

// Periksa apakah parameter 'id' telah diterima
if (isset($_GET['id'])) {
    $id_file = $_GET['id'];

    // Lakukan query DELETE untuk menghapus data berdasarkan id_file
    $query = "DELETE FROM foto_keluarga WHERE id_file = $id_file";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!-- Hapus Foto Sidang -->

<?php
include "conn.php"; // Sertakan file koneksi ke database

// Periksa apakah parameter 'id' telah diterima
if (isset($_GET['hapus'])) {
    $id_file = $_GET['hapus'];

    // Lakukan query DELETE untuk menghapus data berdasarkan id_file
    $query = "DELETE FROM foto_sidang WHERE id_sidang = $id_file";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<a href="tambah_gambar.php">Kembali ke Halaman Utama</a>
