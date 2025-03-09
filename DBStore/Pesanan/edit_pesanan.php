<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="form-container">
    <h2>Form Edit Pesanan</h2>
    <?php
    // Panggil file koneksi.php untuk melakukan koneksi ke database
    require_once('../koneksi.php');

    // Tangkap ID Pesanan yang akan diedit
    $id_pesanan = $_GET['id_pesanan'];

    // Query untuk mengambil data pesanan berdasarkan ID_Pesanan
    $query = "SELECT * FROM pesanan WHERE ID_Pesanan = '$id_pesanan'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
    <form action="proses_edit_pesanan.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_pesanan" value="<?php echo $row['ID_Pesanan']; ?>">
        <input type="hidden" name="id_pelanggan" value="<?php echo $row['ID_Pelanggan']; ?>">
        <input type="hidden" name="id_produk" value="<?php echo $row['ID_Produk']; ?>">
        
        <label>Tanggal Pesanan:</label><br>
        <input type="date" name="tanggal_pesanan" value="<?php echo $row['Tanggal_Pesanan']; ?>"><br>
        
        <label>Status:</label><br>
        <input type="text" name="status" value="<?php echo $row['Status']; ?>"><br>

        <label>Total Harga:</label><br>
        <input type="text" name="total_harga" value="<?php echo $row['Total_Harga']; ?>"><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
    <?php
    } else {
        echo "Pesanan tidak ditemukan.";
    }

    // Tutup koneksi database
    $koneksi->close();
    ?>
</body>
</html>
