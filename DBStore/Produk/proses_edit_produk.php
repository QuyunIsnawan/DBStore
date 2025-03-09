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
$id_produk = $_POST['id_produk'];
$id_kategori = $_POST['id_kategori'];
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// Proses upload gambar produk jika ada perubahan gambar
if ($_FILES['gambar_produk']['size'] > 0) {
    $gambar_produk = addslashes(file_get_contents($_FILES['gambar_produk']['tmp_name']));
    $query = "UPDATE produk SET ID_Kategori='$id_kategori', Nama_Produk='$nama_produk', Deskripsi='$deskripsi', Harga='$harga', Stok='$stok', Gambar_Produk='$gambar_produk' WHERE ID_Produk='$id_produk'";
} else {
    // Jika tidak ada perubahan gambar, update data produk tanpa mengubah gambar
    $query = "UPDATE produk SET ID_Kategori='$id_kategori', Nama_Produk='$nama_produk', Deskripsi='$deskripsi', Harga='$harga', Stok='$stok' WHERE ID_Produk='$id_produk'";
}

if ($koneksi->query($query) === TRUE) {
    echo "Produk berhasil diperbarui.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../produk.php'>Kembali ke Produk</a>