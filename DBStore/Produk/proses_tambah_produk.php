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

// Proses upload gambar produk
$gambar_produk = addslashes(file_get_contents($_FILES['gambar_produk']['tmp_name']));

// Query SQL untuk insert data
$query = "INSERT INTO produk (ID_Produk, ID_Kategori, Nama_Produk, Deskripsi, Harga, Stok, Gambar_Produk) 
          VALUES ('$id_produk', '$id_kategori', '$nama_produk', '$deskripsi', '$harga', '$stok', '$gambar_produk')";

if ($koneksi->query($query) === TRUE) {
    echo "Produk berhasil ditambahkan.";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>

<a href='../produk.php'>Kembali ke Produk</a>