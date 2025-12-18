<?php
include("../../config/database.php");

$id         = $_POST['id_pegawai'];
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

// Jika password dikosongkan, jangan update password
if ($password == "") {
    $sql = "
        UPDATE pegawai SET
            nama_pegawai = '$nama',
            jabatan = '$jabatan',
            tgl_masuk_pegawai = '$tgl_masuk',
            jenis_kelamin_pegawai = '$jk',
            tanggal_lahir_pegawai = '$tgl_lahir',
            alamat_pegawai = '$alamat',
            no_telepon_pegawai = '$telp',
            email_pegawai = '$email',
            gaji_pegawai = '$gaji',
            kode_cabang = '$kode_cabang'
        WHERE id_pegawai = '$id'
    ";
} else {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "
        UPDATE pegawai SET
            nama_pegawai = '$nama',
            jabatan = '$jabatan',
            tgl_masuk_pegawai = '$tgl_masuk',
            jenis_kelamin_pegawai = '$jk',
            tanggal_lahir_pegawai = '$tgl_lahir',
            alamat_pegawai = '$alamat',
            no_telepon_pegawai = '$telp',
            email_pegawai = '$email',
            password = '$hashed_password',
            gaji_pegawai = '$gaji',
            kode_cabang = '$kode_cabang'
        WHERE id_pegawai = '$id'
    ";
}

if (mysqli_query($conn, $sql)) {
    header("Location: /pages/pegawai/");
} else {
    echo "Error: " . mysqli_error($conn);
}
