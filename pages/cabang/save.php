<?php

require_once __DIR__ . "/../../config/database.php";

$kode = mysqli_real_escape_string($conn, $_POST['kode_cabang']);
$nama = mysqli_real_escape_string($conn, $_POST['nama_cabang']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat_cabang']);
$telp = mysqli_real_escape_string($conn, $_POST['no_telp']);
$kepala_cabang = mysqli_real_escape_string($conn, $_POST['id_kepala_cabang']);

$sql = "INSERT INTO cabang (kode_cabang, nama_cabang, alamat_cabang, no_telp, id_kepala_cabang)
        VALUES ('$kode', '$nama', '$alamat', '$telp', '$kepala_cabang')";

if (mysqli_query($conn, $sql)) {
    header("Location: list.php");
} else {
    echo mysqli_error($conn);
}