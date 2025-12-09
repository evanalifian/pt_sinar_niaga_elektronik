<?php
include("../../config/database.php");

$kode            = mysqli_real_escape_string($conn, $_POST['kode_barang']);
$nama            = mysqli_real_escape_string($conn, $_POST['nama_barang']);
$merek           = mysqli_real_escape_string($conn, $_POST['merek_barang']);
$jenis           = mysqli_real_escape_string($conn, $_POST['jenis_barang']);
$harga_rata      = mysqli_real_escape_string($conn, $_POST['harga_barang']);
$harga_jual      = mysqli_real_escape_string($conn, $_POST['harga_jual_barang']);
$harga_beli      = mysqli_real_escape_string($conn, $_POST['harga_beli_barang']);

$sql = "INSERT INTO barang 
        (kode_barang, nama_barang, merek_barang, jenis_barang, harga_barang, harga_jual_barang, harga_beli_barang)
        VALUES 
        ('$kode', '$nama', '$merek', '$jenis', '$harga_rata', '$harga_jual', '$harga_beli')";

if (mysqli_query($conn, $sql)) {
    header("Location: list.php");
} else {
    echo "Error SQL: " . mysqli_error($conn);
}
