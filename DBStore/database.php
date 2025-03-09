<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include "koneksi.php";?>

    <div class="database-container">
        <a href="kategori.php" class="database-item" style="background-image: url('images/kategori.jpg');"></a>

        <a href="pelanggan.php" class="database-item" style="background-image: url('images/pelanggan.jpg');"></a>

        <a href="pembayaran.php" class="database-item" style="background-image: url('images/pembayaran.jpg');"></a>

        <a href="pengiriman.php" class="database-item" style="background-image: url('images/pengiriman.jpg');"></a>

        <a href="pesanan.php" class="database-item" style="background-image: url('images/pesanan.jpg');"></a>
        
        <a href="produk.php" class="database-item" style="background-image: url('images/produk.jpg');"></a>
    </div>
</body>
</html>
