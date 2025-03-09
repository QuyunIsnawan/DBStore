<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap data yang dikirim dari form
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// Query SQL untuk insert data
$query = "INSERT INTO pelanggan (ID_Pelanggan, Nama_Pelanggan, Email, Telepon, Alamat) 
          VALUES ('$id_pelanggan', '$nama_pelanggan', '$email', '$telepon', '$alamat')";

if ($koneksi->query($query) === TRUE) {
    echo "Pelanggan berhasil ditambahkan.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../pelanggan.php'>Kembali ke Pelanggan</Table></a>