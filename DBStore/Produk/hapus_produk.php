<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap ID Produk yang akan dihapus
$id_produk = $_GET['id_produk'];

// Query SQL untuk menghapus data produk berdasarkan ID_Produk
$query = "DELETE FROM produk WHERE ID_Produk = '$id_produk'";

if ($koneksi->query($query) === TRUE) {
    echo "Produk berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>
<a href='../produk.php'>Kembali ke Produk</a>