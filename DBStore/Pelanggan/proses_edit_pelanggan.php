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
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
    
$query = "UPDATE pelanggan SET Nama_Pelanggan='$nama_pelanggan', Email='$email', Telepon='$telepon', Alamat='$alamat' WHERE ID_Pelanggan='$id_pelanggan'";

if ($koneksi->query($query) === TRUE) {
    echo "Pelanggan berhasil diperbarui.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../pelanggan.php'>Kembali ke Pelanggan</a>