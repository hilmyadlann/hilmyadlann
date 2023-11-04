<?php
require 'function.php';
$barang = query("SELECT * FROM topiku")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hilmy Adlan</title>
    </head>
    <body>
        <h1>Welcome,<br>
        This is Toko Topiku
        </h1>

        <a href="addTopi.php">Tambah Data Barang Toko Abadi</a>
        <br><br>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Id Topi</th>
                <th>Gambar</th>
                <th>Nama Topi</th>
                <th>Jenis Topi</th>
                <th>Warna Topi</th>
                <th>Action</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $row) : ?> 
            
            <tr>
                <td><?= $row["Id"]; ?></td>
                <td><img src="img/<?= $row['gambar_topi']; ?>" width="50"></td>
                <td><?= $row["Nama_topi"]; ?></td>
                <td><?= $row["jenis_topi"]; ?></td>
                <td><?= $row["warna_topi"]; ?></td>
                <td>
                    <a href="changeData.php?no=<?= $row['Id']; ?>">Ubah</a>
                    <br>
                    <a href="hapus.php?no= <?= $row["Id"];?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?');">Hapus</a>
                </td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>