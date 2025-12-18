<?php
include("../../config/database.php");

$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$merek = $_POST['merek_barang'];
$jenis = $_POST['jenis_barang'];
$beli = $_POST['harga_beli_barang'];
$jual = $_POST['harga_jual_barang'];

$sql = "INSERT INTO barang VALUES (
    '$kode', '$nama', '$merek', '$jenis', 0, '$jual', '$beli'
)";

if (mysqli_query($conn, $sql)) {
  header("Location: /pages/barang/");
} else {
  echo mysqli_error($conn);
}
?>