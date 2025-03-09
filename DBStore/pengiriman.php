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

    <h2>Data Pengiriman</h2>
    
    <table>
        <tr>
            <th>ID Pengiriman</th>
            <th>ID Pesanan</th>
            <th>ID Pelanggan</th>
            <th>Tanggal Pengiriman</th>
            <th>Metode Pengiriman</th>
            <th>Nomor Lacak</th>
            <th>Status Pengiriman</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        include "koneksi.php";
        $result = mysqli_query($koneksi,"Select * From pengiriman");
         while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['ID_Pengiriman'] ?></td>
            <td><?php echo $row['ID_Pesanan'] ?></td>
            <td><?php echo $row['ID_Pelanggan'] ?></td>
            <td><?php echo $row['Tanggal_Pengiriman'] ?></td>
            <td><?php echo $row['Metode_Pengiriman'] ?></td>
            <td><?php echo $row['Nomor_Lacak'] ?></td>
            <td><?php echo $row['Status_Pengiriman'] ?></td>

            <td><a href='Pengiriman/hapus_pengiriman.php?id_pengiriman=<?php echo $row["ID_Pengiriman"]; ?>' onclick='return confirm("Apakah Anda yakin ingin menghapus pengiriman ini?")'>Hapus</a></td>
        <td><a href='Pengiriman/edit_pengiriman.php?id_pengiriman=<?php echo $row["ID_Pengiriman"]; ?>'>Edit</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href='Pengiriman/tambah_pengiriman.php' class="insert">Tambah Pengiriman Baru</a>

</body>
</html>
