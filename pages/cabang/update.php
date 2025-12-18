<?php
include("../../config/database.php");

$kode   = mysqli_real_escape_string($conn, $_POST['kode_cabang']);
$nama   = mysqli_real_escape_string($conn, $_POST['nama_cabang']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat_cabang']);
$telp   = mysqli_real_escape_string($conn, $_POST['no_telp']);
$kepala = mysqli_real_escape_string($conn, $_POST['id_kepala_cabang']);

$sql = "
    UPDATE cabang SET 
        kode_cabang = '$kode',
        nama_cabang = '$nama',
        alamat_cabang = '$alamat',
        no_telp = '$telp',
        id_kepala_cabang = '$kepala'
    WHERE kode_cabang = '$kode'
";

if (mysqli_query($conn, $sql)) {
    header("Location: list.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
