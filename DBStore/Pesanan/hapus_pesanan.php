<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap ID Pesanan yang akan dihapus
$id_pelanggan = $_GET['id_pesaanan'];

// Query SQL untuk menghapus data produk berdasarkan ID_Pesanan
$query = "DELETE FROM pesanan WHERE ID_Pesanan = '$id_pesanan'";

if ($koneksi->query($query) === TRUE) {
    echo "Pelanggan berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>
<a href='../index.php'>Kembali ke Pengiriman</a>