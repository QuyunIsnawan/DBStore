<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap ID Pelanggan yang akan dihapus
$id_pelanggan = $_GET['id_pelanggan'];

// Query SQL untuk menghapus data produk berdasarkan ID_Pelanggan
$query = "DELETE FROM pelanggan WHERE ID_Pelanggan = '$id_pelanggan'";

if ($koneksi->query($query) === TRUE) {
    echo "Pelanggan berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>
<a href='../index.php'>Kembali ke Pelanggan</a>