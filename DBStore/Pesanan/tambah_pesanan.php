<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pesanan Baru</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="form-container">
    <h2>Form Tambah Pesanan Baru</h2>
    <form action="proses_tambah_pesanan.php" method="POST" enctype="multipart/form-data">
        <label>ID Pesanan:</label><br>
        <input type="text" name="id_pesanan"><br>

        <label>ID Produk:</label><br>
        <input type="text" name="id_produk"><br>
        
        <label>ID Kategori:</label><br>
        <input type="text" name="id_kategori"><br>
        
        <label>Tanggal Pesanan:</label><br>
        <input type="date" name="tanggal_pesanan"><br>
        
        <label>Status:</label><br>
        <input type="text" name="status"><br>
        
        <label>Total Harga:</label><br>
        <input type="text" name="total_harga"><br>
        
        <input type="submit" value="Tambah Pesanan">
    </form>
</body>
</html>
