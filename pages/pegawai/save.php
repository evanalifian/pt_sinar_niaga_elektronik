<?php
include("../../config/database.php");

$id = mysqli_real_escape_string($conn, $_POST['id_pegawai']);
$nama = mysqli_real_escape_string($conn, $_POST['nama_pegawai']);
$jabatan = mysqli_real_escape_string($conn, $_POST['jabatan']);
$cabang = mysqli_real_escape_string($conn, $_POST['kode_cabang']);

$sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, jabatan, kode_cabang)
        VALUES ('$id', '$nama', '$jabatan', '$cabang')";

if (mysqli_query($conn, $sql)) {
    header("Location: list.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>