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
    
// Query SQL untuk insert data
$query = "INSERT INTO pesanangiriman (ID_Pengiriman, ID_Pesanan, ID_Pelanggan, Tanggal_Pengiriman, Metode_Pengiriman, Nomor_Lacak, Status_Pengiriman ) 
          VALUES ('$id_pengiriman', '$id_pesanan'', '$id_pelanggan', '$tanggal_pengiriman', '$metode_pengiriman', '$nomor_lacak', '$status_pengiriman')";


if ($koneksi->query($query) === TRUE) {
    echo "Pengiriman berhasil diperbarui.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../index.php'>Kembali ke Home</a>