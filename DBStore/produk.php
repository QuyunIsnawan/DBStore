<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'header.php'; ?>
</head>
<body>
<h2>Data Produk</h2>

    <table>
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Email</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <th>Gambar Produk</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        include "koneksi.php";
        $result = mysqli_query($koneksi,"Select * From produk");
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['ID_Produk'] ?></td>
            <td><?php echo $row['Nama_Produk'] ?></td>
            <td><?php echo $row['Deskripsi'] ?></td>
            <td><?php echo $row['Harga'] ?></td>
            <td><?php echo $row['Stok'] ?></td>
            <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['gambar_produk']); ?>" width="100" /></td>
            <td><a href='Produk/hapus_produk.php?id_produk=<?php echo $row["ID_Produk"]; ?>' onclick='return confirm("Apakah Anda yakin ingin menghapus produk ini?")'>Hapus</a></td>
            <td><a href='Produk/edit_produk.php?id_produk=<?php echo $row["ID_Produk"]; ?>'>Edit</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
<a href='Produk/tambah_produk.php' class="insert">Tambah Produk Baru</a>
</body>
</html>
