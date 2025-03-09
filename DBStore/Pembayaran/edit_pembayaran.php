<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="form-container">
    <h2>Form Edit Pembayaran</h2>
    <?php
    // Panggil file koneksi.php untuk melakukan koneksi ke database
    require_once('../koneksi.php');

    // Tangkap ID Pembayaran yang akan diedit
    $id_pembayaran = $_GET['id_pembayaran'];

    // Query untuk mengambil data pesanan berdasarkan ID_Pembayaran
    $query = "SELECT * FROM pembayaran WHERE ID_Pembayaran = '$id_pembayaran'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
    <form action="proses_edit_pembayaran.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_pembayaran" value="<?php echo $row['ID_Pembayaran']; ?>">
        <input type="hidden" name="id_pesanan" value="<?php echo $row['ID_Pesanan']; ?>">   
        
        <label>Tanggal Pembayaran:</label><br>
        <input type="date" name="tanggal_pembayaran" value="<?php echo $row['Tanggal_Pembayaran']; ?>"><br>
        
        <label>Jumlah Pembayaran:</label><br>
        <input type="text" name="jumlah_pembayaran" value="<?php echo $row['Jumlah_Pembayaran']; ?>"><br>

        <label>Metode Pembayaran:</label><br>
        <input type="text" name="metode_pembayaran" value="<?php echo $row['Metode_Pembayaran']; ?>"><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
    <?php
    } else {
        echo "Pembayaran tidak ditemukan.";
    }

    // Tutup koneksi database
    $koneksi->close();
    ?>
</body>
</html>
