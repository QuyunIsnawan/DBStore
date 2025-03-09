<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="form-container">
        <h2>Form Edit Kategori</h2>
        <?php
        // Panggil file koneksi.php untuk melakukan koneksi ke database
        require_once('../koneksi.php');

        // Tangkap ID Kategori yang akan diedit
        $id_kategori = $_GET['id_kategori'];

        // Query untuk mengambil data kategori berdasarkan ID_Kategori
        $query = "SELECT * FROM kategori WHERE ID_Kategori = '$id_kategori'";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="proses_edit_kategori.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_kategori" value="<?php echo $row['ID_Kategori']; ?>">
            
            <label>Nama Kategori:</label><br>
            <input type="text" name="nama_kategori" value="<?php echo $row['Nama_Kategori']; ?>"><br>
                
            <input type="submit" value="Simpan Perubahan">
        </form>
        <?php
        } else {
            echo "Kategori tidak ditemukan.";
        }

        // Tutup koneksi database
        $koneksi->close();
        ?>
    </div>
</body>
</html>
