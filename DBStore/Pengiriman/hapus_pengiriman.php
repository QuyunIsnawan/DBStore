<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap ID Pengiriman yang akan dihapus
$id_pengiriman = $_GET['id_pengiriman'];

// Query SQL untuk menghapus data produk berdasarkan ID_Pengiriman
$query = "DELETE FROM pengiriman WHERE ID_Pengiriman = '$id_pengiriman'";

if ($koneksi->query($query) === TRUE) {
    echo "Pengiriman berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>
<a href='../index.php'>Kembali ke Pengiriman</a>