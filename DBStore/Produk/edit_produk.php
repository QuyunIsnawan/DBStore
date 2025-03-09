<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Edit Produk</h2>
        <?php
        // Panggil file koneksi.php untuk melakukan koneksi ke database
        require_once('../koneksi.php');

        // Tangkap ID Produk yang akan diedit
        $id_produk = $_GET['id_produk'];

        // Query untuk mengambil data produk berdasarkan ID_Produk
        $query = "SELECT * FROM produk WHERE ID_Produk = '$id_produk'";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="proses_edit_produk.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?php echo $row['ID_Produk']; ?>">
            
            <label>ID Kategori:</label><br>
            <input type="text" name="id_kategori" value="<?php echo $row['ID_Kategori']; ?>"><br>
            
            <label>Nama Produk:</label><br>
            <input type="text" name="nama_produk" value="<?php echo $row['Nama_Produk']; ?>"><br>
            
            <label>Deskripsi:</label><br>
            <textarea name="deskripsi"><?php echo $row['Deskripsi']; ?></textarea><br>
            
            <label>Harga:</label><br>
            <input type="text" name="harga" value="<?php echo $row['Harga']; ?>"><br>
            
            <label>Stok:</label><br>
            <input type="text" name="stok" value="<?php echo $row['Stok']; ?>"><br>
            
            <label>Gambar Produk:</label><br>
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['gambar_produk']); ?>" /><br>
            <input type="file" name="gambar_produk"><br>
            
            <input type="submit" value="Simpan Perubahan">
        </form>
        <?php
        } else {
            echo "Produk tidak ditemukan.";
        }

        // Tutup koneksi database
        $koneksi->close();
        ?>
    </div>
</body>
</html>
