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
$id_pesanan = $_POST['id_pesanan'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_produk = $_POST['id_produk'];
$tanggal_pesanan = $_POST['tanggal_pesanan'];
$status = $_POST['status'];
$total_harga = $_POST['total_harga'];
    
$query = "UPDATE pesanan SET ID_Produk='$id_produk', ID_Kategori='$id_kategori', Tanggal_Pesanan='$tanggal_pesanan', Statuss='$status',Total_Harga='$total_harga' WHERE ID_Pesanan='$id_pesanan'";

if ($koneksi->query($query) === TRUE) {
    echo "Pesanan' berhasil diperbarui.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../index.php'>Kembali ke Pengiriman</a>