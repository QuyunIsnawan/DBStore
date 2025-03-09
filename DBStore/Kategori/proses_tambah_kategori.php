<?php
// Panggil file koneksi.php untuk melakukan koneksi ke database
require_once('../koneksi.php');

// Tangkap data yang dikirim dari form
$ID_Kategori = $_POST['ID_Kategori'];
$Nama_Kategori = $_POST['Nama_Kategori'];

// Query SQL untuk insert data
$query = "INSERT INTO Kategori (ID_Kategori, Nama_Kategori) 
          VALUES ('$ID_Kategori', '$Nama_Kategori')";

if ($koneksi->query($query) === TRUE) {
    echo "Kategori berhasil ditambahkan.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../kategori.php'>Kembali ke Kategori</a>
