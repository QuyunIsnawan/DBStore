<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kategori Baru</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Tambah Kategori Baru</h2>
        <form action="proses_tambah_kategori.php" method="POST" enctype="multipart/form-data">
            <label>ID Kategori:</label><br>
            <input type="text" name="ID_Kategori"><br>
            
            <label>Nama Kategori:</label><br>
            <input type="text" name="Nama_Kategori"><br>

            <input type="submit" value="Tambah Produk">
        </form>
    </div>
</body>
</html>
