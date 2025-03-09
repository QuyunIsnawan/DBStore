<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DB Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include 'header.php'; ?>
</head>
<body>
    
    <div class="containerbanner">
        <section id="welcome">
            <div class="bannero">
                <a href="index.php"><img src="images/fashion_banner.jpg" alt="Fashion Banner"></a>
            </div>
            <h1>Selamat datang di DB Shop!</h1>
            <p>Toko Fashion Online Terlengkap dan Terpercaya!</p>
            <p>Di DB shop, kami berkomitmen untuk memenuhi segala kebutuhan fashion Anda dengan koleksi yang up-to-date, stylish, dan berkualitas tinggi. Kami menyediakan berbagai macam produk fashion mulai dari pakaian, sepatu, aksesoris, hingga tas, untuk pria, wanita, dan anak-anak.</p>
        </section>
    </div>

    <div class="product-list">
        <h2>Daftar Produk Kami</h2>
        <ul>
            <li>Pakaian Pria</li>
            <li>Pakaian Wanita</li>
            <li>Sepatu</li>
            <li>Aksesoris</li>
            <li>Tas</li>
            <li>Pakaian Anak-anak</li>
            <li>Olahraga</li>
            <li>Pakaian Formal</li>
            <li>Pakaian Santai</li>
            <li>Perhiasan</li>
        </ul>
    </div>

    <div class="image-collage">
        <h2>Galeri Produk</h2>
        <div class="collage">
            <?php
            include "koneksi.php";
            $result = mysqli_query($koneksi, "SELECT * FROM produk LIMIT 10"); // Limiting to 10 products
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="product-card">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['gambar_produk']); ?>" alt="<?php echo $row['Nama_Produk']; ?>">
                <div class="product-info">
                    <h3><?php echo $row['Nama_Produk']; ?></h3>
                    <p><?php echo $row['Deskripsi']; ?></p>
                    <p><strong>IDR <?php echo number_format($row['Harga'], 0, ',', '.'); ?></strong></p>
                    <p>Stok: <?php echo $row['Stok']; ?></p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 DB Shop. All rights reserved.</p>
        <ul class="social-media">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </footer>
</body>
</html>
