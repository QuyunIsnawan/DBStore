<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Edit Pelanggan</h2>
        <?php
        // Panggil file koneksi.php untuk melakukan koneksi ke database
        require_once('../koneksi.php');

        // Tangkap ID Pelanggan yang akan diedit
        $id_pelanggan = $_GET['id_pelanggan'];

        // Query untuk mengambil data pelanggan berdasarkan ID_Pelanggan
        $query = "SELECT * FROM pelanggan WHERE ID_Pelanggan = '$id_pelanggan'";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="proses_edit_pelanggan.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_pelanggan" value="<?php echo $row['ID_Pelanggan']; ?>">
            
            <label>Nama Pelanggan:</label><br>
            <input type="text" name="nama_pelanggan" value="<?php echo $row['Nama_Pelanggan']; ?>"><br>    
            
            <label>Email:</label><br>
            <input type="text" name="email" value="<?php echo $row['Email']; ?>"><br>
            
            <label>Telepon:</label><br>
            <input type="text" name="telepon" value="<?php echo $row['Telepon']; ?>"><br>

            <label>Alamat:</label><br>
            <textarea name="alamat"><?php echo $row['Alamat']; ?></textarea><br>

            <input type="submit" value="Simpan Perubahan">
        </form>
        <?php
        } else {
            echo "Pelanggan tidak ditemukan.";
        }

        // Tutup koneksi database
        $koneksi->close();
        ?>
    </div>
</body>
</html>
