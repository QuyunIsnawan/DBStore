<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap ID Pembayaran yang akan dihapus
$id_pembayaran = $_GET['id_pembayaran'];

// Query SQL untuk menghapus data produk berdasarkan ID_Pembayaran
$query = "DELETE FROM pembayaran WHERE ID_Pembayaran = '$id_pembayaran'";

if ($koneksi->query($query) === TRUE) {
    echo "Pembayaran berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>
<a href='../index.php'>Kembali ke Pembayaran</a>