<?php
include("../../config/database.php");

$kode_old = mysqli_real_escape_string($conn, $_POST['kode_barang_old']);
$kode     = mysqli_real_escape_string($conn, $_POST['kode_barang']);
$nama     = mysqli_real_escape_string($conn, $_POST['nama_barang']);
$merek    = mysqli_real_escape_string($conn, $_POST['merek_barang']);
$jenis    = mysqli_real_escape_string($conn, $_POST['jenis_barang']);
$harga_r  = mysqli_real_escape_string($conn, $_POST['harga_barang']);
$harga_j  = mysqli_real_escape_string($conn, $_POST['harga_jual_barang']);
$harga_b  = mysqli_real_escape_string($conn, $_POST['harga_beli_barang']);

$sql = "UPDATE barang SET
            kode_barang = '$kode',
            nama_barang = '$nama',
            merek_barang = '$merek',
            jenis_barang = '$jenis',
            harga_barang = '$harga_r',
            harga_jual_barang = '$harga_j',
            harga_beli_barang = '$harga_b'
        WHERE kode_barang = '$kode_old'";

if (mysqli_query($conn, $sql)) {
    header("Location: list.php");
} else {
    echo mysqli_error($conn);
}
