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
$id_pengiriman = $_POST['id_pengiriman'];
$id_pesanan = $_POST['id_pesanan'];
$id_pelanggan = $_POST['id_pelanggan'];
$tanggal_pengiriman = $_POST['tanggal_pengiriman'];
$metode_pengiriman = $_POST['metode_pengiriman'];
$nomor_lacak = $_POST['nomor_lacak'];
$status_pengiriman = $_POST['status_pengiriman'];
    
$query = "UPDATE pengiriman SET ID_Pesanan='$id_pesanan', ID_Pelanggan='$id_pelanggan', Tanggal_Pengiriman='$tanggal_pengiriman', Metode_Pengiriman='$metode_pengiriman', Nomor_Lacak='$nomor_lacak', Status_Pengiriman='$status_pengiriman' WHERE ID_Pengiriman='$id_pengiriman'";

if ($koneksi->query($query) === TRUE) {
    echo "Pengiriman berhasil diperbarui.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../index.php'>Kembali ke Pengiriman</a>