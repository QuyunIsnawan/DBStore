<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pembayaran Baru</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div class="form-container">
    <h2>Form Tambah Pembayaran Baru</h2>
    <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data">
        <label>ID Pembayaran:</label><br>
        <input type="text" name="id_pembayaran"><br>

        <label>ID Pesanan:</label><br>
        <input type="text" name="id_pesanan"><br>
        
        <label>Tanggal Pembayaran:</label><br>
        <input type="date" name="tanggal_pembayaran"><br>
        
        <label>Jumlah Pembayaran:</label><br>
        <input type="text" name="jumlah_pembayaran"><br>
        
        <label>Metode_Pembayaran:</label><br>
        <input type="text" name="Metode_Pembayaran"><br>
        
        <input type="submit" value="Tambah Pembayaran">
    </form>
</body>
</html>
