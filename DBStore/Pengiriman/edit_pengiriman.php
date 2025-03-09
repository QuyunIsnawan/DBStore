<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengiriman</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="form-container">
    <h2>Form Edit Pengiriman</h2>
    <?php
    // Panggil file koneksi.php untuk melakukan koneksi ke database
    require_once('../koneksi.php');

    // Tangkap ID Pengiriman yang akan diedit
    $id_pengiriman = $_GET['id_pengiriman'];

    // Query untuk mengambil data pesanan berdasarkan ID_Pengiriman
    $query = "SELECT * FROM pengiriman WHERE ID_Pengiriman = '$id_pengiriman'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
    <form action="proses_edit_pembayaran.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_pengiriman" value="<?php echo $row['ID_Pengiriman']; ?>">
        <input type="hidden" name="id_pesanan" value="<?php echo $row['ID_Pesanan']; ?>">
        <input type="hidden" name="id_pelanggan" value="<?php echo $row['ID_Pelanggan']; ?>">  
        
        <label>Tanggal Pengiriman:</label><br>
        <input type="date" name="tanggal_pembayaran" value="<?php echo $row['Tanggal_Pengiriman']; ?>"><br>
        
        <label>Metode Pengiriman:</label><br>
        <input type="text" name="metode_pengiriman" value="<?php echo $row['Metode_Pengiriman']; ?>"><br>

        <label>Nomor Lacak:</label><br>
        <input type="text" name="nomor_lacack" value="<?php echo $row['Nomor_Lacak']; ?>"><br>

        <label>Status Pengiriman:</label><br>
        <input type="text" name="status_pengiriman" value="<?php echo $row['Status_Pengiriman']; ?>"><br>


        <input type="submit" value="Simpan Perubahan">
    </form>
    <?php
    } else {
        echo "Pengiriman tidak ditemukan.";
    }

    // Tutup koneksi database
    $koneksi->close();
    ?>
</body>
</html>
