<?php
require 'function.php';

if (isset($_POST["submit"])){   
    if (tambah($_POST)> 0){
        echo "
            <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    }
};

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Barang Topiku</title>
    </head>
    <body>
        <h1>Tambah Data Barang Topiku</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="Id">Id Barang</label>
                    <input type="text" name="Id" id="Id">
                </li>
                <li>
                    <label for="gambar_topi">Gambar Topi</label>
                    <input type="file" name="gambar_topi" id="gambar_topi">
                </li>
                <li>
                    <label for="Nama_topi">Nama Topi</label>
                    <input type="text" name="Nama_topi" id="Nama_topi">
                </li>
                <li>
                    <label for="jenis_topi">Jenis Topi</label>
                    <input type="text" name="jenis_topi" id="jenis_topi">
                </li>
                <li>
                    <label for="warna_topi">Warna Topi</label>
                    <input type="text" name="warna_topi" id="warna_topi">
                </li>
                <li>
                    <button type="submit" name="submit">Add Data Topi</button>
                </li>
            </ul>
        </form>
    </body>
</html>