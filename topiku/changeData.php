<?php
require 'function.php';

$idBarang = $_GET["Id"];

$brg = query("SELECT * FROM tugas_crud_hilmy WHERE no = $no")[0];

if (isset($_POST["submit"])){
    if (ubah($_POST)> 0){
        echo "
            <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data Barang Topiku</title>
    </head>
    <body>
        <h1>Ubah Data Barang Topiku</h1>
        <form action="" method="post">
            <input type="hidden" name="Id" value="<?=$brg['Id'];?>">
            <ul>
                <li>
                    <label for="Id">Id Barang</label>
                    <input type="text" name="Id" id="Id" required value = <?= $brg["Id"];?>>
                </li>
                <li>
                    <label for="gambar_topi">Gambar Topi</label>
                    <input type="text" name="gambar_topi" id="gambar_topi" required value = <?= $brg["gambar_topi"];?>>
                </li>
                <li>
                    <label for="Nama_topi">Nama Topi</label>
                    <input type="text" name="Nama_topi" id="Nama_topi" required value = <?= $brg["Nama_topi"];?>>
                </li>
                <li>
                    <label for="jenis_topi">Jenis Topi</label>
                    <input type="text" name="jenis_topi" id="jenis_topi" required value = <?= $brg["jenis_topi"];?>>
                </li>
                <li>
                    <label for="warna_topi">Warna Topi</label>
                    <input type="text" name="warna_topi" id="warna_topi" required value = <?= $brg["warna_topi"];?>>
                </li>
                <li>
                    <button type="submit" name="submit">Change Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>