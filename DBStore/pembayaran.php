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

    <h2>Data Pembayaran</h2>
    
    <table>
        <tr>
            <th>ID Pembayaran</th>
            <th>ID Pesanan</th>
            <th>Tanggal Pembayaran</th>
            <th>Jumlah Pembayaran</th>
            <th>Metode Pembayaran</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        include "koneksi.php";
        $result = mysqli_query($koneksi,"Select * From pembayaran");
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['ID_Pembayaran'] ?></td>
            <td><?php echo $row['ID_Pesanan'] ?></td>
            <td><?php echo $row['Tanggal_Pembayaran'] ?></td>
            <td><?php echo $row['Jumlah_Pembayaran'] ?></td>
            <td><?php echo $row['Metode_Pembayaran'] ?></td>
            <td><a href='Pembayaran/hapus_pembayaran.php?id_pembayaran=<?php echo $row["ID_Pembayaran"]; ?>' onclick='return confirm("Apakah Anda yakin ingin menghapus pembayaran ini?")'>Hapus</a></td>
        <td><a href='Pembayaran/edit_pembayaran.php?id_pembayaran=<?php echo $row["ID_Pembayaran"]; ?>'>Edit</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href='Pembayaran/tambah_pembayaran.php' class="insert">Tambah Pembayaran Baru</a>

</body>
</html>
