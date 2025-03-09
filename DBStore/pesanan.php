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

<h2>Data Pesanan</h2>
    
    <table>
        <tr>
            <th>ID Pesanan</th>
            <th>ID Pelanggan</th>
            <th>ID Produk</th>
            <th>Tanggal Pesanan</th>
            <th>Status</th>
            <th>Total Harga</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        include "koneksi.php";
        $result = mysqli_query($koneksi,"Select * From pesanan");
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['ID_Pesanan'] ?></td>
            <td><?php echo $row['ID_Pelanggan'] ?></td>
            <td><?php echo $row['ID_Produk'] ?></td>
            <td><?php echo $row['Tanggal_Pesanan'] ?></td>
            <td><?php echo $row['Status'] ?></td>
            <td><?php echo $row['Total_Harga'] ?></td>
            <td><a href='Pesanan/hapus_pesanan.php?id_pesanan=<?php echo $row["ID_Pesanan"]; ?>' onclick='return confirm("Apakah Anda yakin ingin menghapus pesanan ini?")'>Hapus</a></td>
            <td><a href='Pesanan/edit_pesanan.php?id_pesanan=<?php echo $row["ID_Pesanan"]; ?>'>Edit</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href='Pesanan/tambah_pesanan.php' class="insert">Tambah Pesanan Baru</a>

</body>
</html>
