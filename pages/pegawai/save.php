<?php
include("../../config/database.php");

$id       = $_POST['id_pegawai'];
$nama       = $_POST['nama_pegawai'];
$jabatan    = $_POST['jabatan'];
$tgl_masuk  = $_POST['tgl_masuk_pegawai'];
$jk         = $_POST['jenis_kelamin_pegawai'];
$tgl_lahir  = $_POST['tanggal_lahir_pegawai'];
$alamat     = $_POST['alamat_pegawai'];
$telp       = $_POST['no_telepon_pegawai'];
$email      = $_POST['email_pegawai'];
$password   = $_POST['password'];
$gaji       = $_POST['gaji_pegawai'];
$kode_cabang = $_POST['kode_cabang'];

// HASH PASSWORD
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO pegawai 
        (id_pegawai, nama_pegawai, jabatan, tgl_masuk_pegawai, jenis_kelamin_pegawai, tanggal_lahir_pegawai,
         alamat_pegawai, no_telepon_pegawai, email_pegawai, password, gaji_pegawai, kode_cabang)
        VALUES
        ('$id', '$nama', '$jabatan', '$tgl_masuk', '$jk', '$tgl_lahir',
         '$alamat', '$telp', '$email', '$hashed_password', '$gaji', '$kode_cabang')";

if (mysqli_query($conn, $sql)) {
    header("Location: list.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
