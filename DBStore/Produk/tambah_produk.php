<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk Baru</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Tambah Produk Baru</h2>
        <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data">
            <label>ID Produk:</label>
            <input type="text" name="id_produk" required>
            
            <label>ID Kategori:</label>
            <input type="text" name="id_kategori" required>
            
            <label>Nama Produk:</label>
            <input type="text" name="nama_produk" required>
            
            <label>Deskripsi:</label>
            <textarea name="deskripsi" required></textarea>
            
            <label>Harga:</label>
            <input type="text" name="harga" required>
            
            <label>Stok:</label>
            <input type="text" name="stok" required>
            
            <label>Gambar Produk:</label>
            <input type="file" name="gambar_produk" required>
            
            <input type="submit" value="Tambah Produk">
        </form>
    </div>
</body>
</html>
