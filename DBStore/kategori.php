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
<h2>Data Kategori</h2>

<table>
    <tr>
        <th>ID Kategori</th>
        <th>Nama Kategori</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    include "koneksi.php";
    $result = mysqli_query($koneksi,"Select * From kategori");
    while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $row['ID_Kategori'] ?></td>
        <td><?php echo $row['Nama_Kategori'] ?></td>
        <td><a href='Kategori/hapus_kategori.php?id_kategori=<?php echo $row["ID_Kategori"]; ?>' onclick='return confirm("Apakah Anda yakin ingin menghapus kategori ini?")'>Hapus</a></td>
        <td><a href='Kategori/edit_kategori.php?id_kategori=<?php echo $row["ID_Kategori"]; ?>'>Edit</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href='Kategori/tambah_kategori.php' class="insert">Tambah Kategori Baru</a>

</body>
</html>
