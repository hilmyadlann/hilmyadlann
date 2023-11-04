<?php

$conn = mysqli_connect("localhost","root","","tugas_crud_hilmy");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $idBarang = $data['Id'];
    $gambarTopi = $data['gambar_topi'];
    $namaTopi = $data['Nama_topi'];
    $type = $data['jenis_topi'];
    $warnaTopi = $data['warna_topi'];
    

    $query = "INSERT INTO topikuVALUES('','$idBarang','$gambarTopi','$namaTopi','$type','$warnaTopi')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($no){
    global $conn;
    mysqli_query($conn, "DELETE FROM topiku WHERE no = $no");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $no = $data["no"];
    $idBarang = $data['Id'];
    $namaTopi = $data['Nama_Topi'];
    $type = $data['jenis_topi'];
    $warnaTopi = $data['warna_topi'];
    $gambarTopi = $data['gambar_topi'];

    $query = "UPDATE topiku SET
        kodebarang = '$idBarang',
        namabarang = '$namaTopi',
        gambar = '$gambarTopi',
        types = '$type',
        warna = '$warnaTopi'
        WHERE no = $no
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>