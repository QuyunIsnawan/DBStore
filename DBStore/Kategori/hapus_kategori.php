<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap ID Kategori yang akan dihapus
$id_kategori = $_GET['id_kategori'];

// Query SQL untuk menghapus data kategori berdasarkan ID_Kategori
$query = "DELETE FROM kategori WHERE ID_Kategori = '$id_kategori'";

if ($koneksi->query($query) === TRUE) {
    echo "Kategori berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>
<a href='../kategori.php'>Kembali ke Kategori</a>
