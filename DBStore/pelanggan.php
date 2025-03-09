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
<h2>Data Pelanggan</h2>

<table>
    <tr>
        <th>ID Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    include "koneksi.php";
    $result = mysqli_query($koneksi,"Select * From pelanggan");
    while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $row['ID_Pelanggan'] ?></td>
        <td><?php echo $row['Nama_Pelanggan'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Telepon'] ?></td>
        <td><?php echo $row['Alamat'] ?></td>
        <td><a href='Pelanggan/hapus_pelanggan.php?id_pelanggan=<?php echo $row["ID_Pelanggan"]; ?>' onclick='return confirm("Apakah Anda yakin ingin menghapus pelanggan ini?")'>Hapus</a></td>
        <td><a href='Pelanggan/edit_pelanggan.php?id_pelanggan=<?php echo $row["ID_Pelanggan"]; ?>'>Edit</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href='Pelanggan/tambah_pelanggan.php' class="insert">Tambah Pelanggan Baru</a>

</body>
</html>
