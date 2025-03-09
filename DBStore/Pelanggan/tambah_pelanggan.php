<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan Baru</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Tambah Pelanggan Baru</h2>
        <form action="proses_tambah_pelanggan.php" method="POST" enctype="multipart/form-data">
            <label>ID Pelanggan:</label><br>
            <input type="text" name="id_pelanggan"><br>
            
            <label>Nama Pelanggan:</label><br>
            <input type="text" name="nama_pelanggan"><br>
            
            <label>Email:</label><br>
            <input type="text" name="email"><br>
            
            <label>Telepon:</label><br>
            <input type="text" name="telepon"><br>
            
            <label>Alamat:</label><br>
            <textarea name="alamat"></textarea><br>
            
            <input type="submit" value="Tambah Pelanggan">
        </form>
    </div>
</body>
</html>
