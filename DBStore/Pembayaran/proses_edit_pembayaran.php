<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengiriman</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="form-container">
    
<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap data yang dikirim dari form
$id_pembayaran = $_POST['id_pembayaran'];
$id_pesanan = $_POST['id_pesanan'];
$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
$jumlah_pembayaran = $_POST['jumlah_pembayaran'];
$metode_pembayaran = $_POST['metode_pembayaran'];
    
$query = "UPDATE pembayaran SET ID_Pesanan='$id_pesanan', Tanggal_Pembayaran='$tanggal_pembayaran', Jumlah_Pembayaran='$jumlah_pembayaran',Metode_Pembayaran='$metode_pembayaran' WHERE ID_Pembayaran='$id_pembayaran'";

if ($koneksi->query($query) === TRUE) {
    echo "Pembayaran berhasil diperbarui.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../index.php'>Kembali ke Pembayaran</a>