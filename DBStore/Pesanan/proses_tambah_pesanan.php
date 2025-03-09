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
    
// Query SQL untuk insert data
$query = "INSERT INTO pesanan (ID_Pesanan, ID_Produk, ID_Kategori, Tanggal_Pesanan, Status, Total_Harga) 
          VALUES ('$id_pesanan', '$id_produk', '$id_kategori', '$tanggal_pesanan', '$status', '$total_harga')";

if ($koneksi->query($query) === TRUE) {
    echo "Pesanan berhasil ditambahkan.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../index.php'>Kembali ke Home</a>