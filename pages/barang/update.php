<?php
include("../../config/database.php");

$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$merek = $_POST['merek_barang'];
$jenis = $_POST['jenis_barang'];
$beli = $_POST['harga_beli_barang'];
$jual = $_POST['harga_jual_barang'];

$sql = "UPDATE barang SET
        nama_barang='$nama',
        merek_barang='$merek',
        jenis_barang='$jenis',
        harga_beli_barang='$beli',
        harga_jual_barang='$jual'
        WHERE kode_barang='$kode'";

mysqli_query($conn, $sql);
header("Location: /pages/barang/");
?>
  