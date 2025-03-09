<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengiriman Baru</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="form-container">
    <h2>Form Tambah Pengiriman Baru</h2>
    <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data">
        <label>ID Pengiriman:</label><br>
        <input type="text" name="id_pengiriman"><br>

        <label>ID Pesanan:</label><br>
        <input type="text" name="id_pesanan"><br>

        <label>ID Pelanggan:</label><br>
        <input type="text" name="id_pelanggan"><br>
        
        <label>Tanggal Pengiriman:</label><br>
        <input type="date" name="tanggal_pembayaran"><br>
        
        <label>Metode Pengiriman:</label><br>
        <input type="text" name="metode_pengiriman"><br>
        
        <label>Nomor Lacak:</label><br>
        <input type="text" name="nomor_lacack"><br>

        <label>Status Pengiriman:</label><br>
        <input type="text" name="status_pengiriman"><br>
        
        <input type="submit" value="Tambah Pengiriman">
    </form>
</body>
</html>
