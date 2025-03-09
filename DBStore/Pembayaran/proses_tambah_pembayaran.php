<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap data yang dikirim dari form
$id_pembayaran = $_POST['id_pembayaran'];
$id_pesanan = $_POST['id_pesanan'];
$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
$jumlah_pembayaran = $_POST['jumlah_pembayaran'];
$metode_pembayaran = $_POST['metode_pembayaran'];
    
// Query SQL untuk insert data
$query = "INSERT INTO pembayaran (ID_Pembayaran, ID_Pesanan, Tanggal_Pembayaran, Jumlah_Pembayaran, Metode_Pembayaran ) 
          VALUES ('$id_pembayaran', '$id_pesanan'', '$tanggal_pembayaran', '$jumlah_pembayaran', '$metode_pembayaran')";

if ($koneksi->query($query) === TRUE) {
    echo "Pembayaran berhasil ditambahkan.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../index.php'>Kembali ke Home</a>