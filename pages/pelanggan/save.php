<?php

require_once __DIR__ . "/../../config/database.php";

$id = mysqli_real_escape_string($conn, $_POST['id_pelanggan']);
$nama = mysqli_real_escape_string($conn, $_POST['nama_pelanggan']);
$telp = mysqli_real_escape_string($conn, $_POST['no_telp_pelanggan']);
$email = mysqli_real_escape_string($conn, $_POST['email_pelanggan']);

$sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat_pelanggan, no_telp_pelanggan, email_pelanggan)
        VALUES ('$id', '$nama', NULL, '$telp', '$email')";

if (mysqli_query($conn, $sql)) {
    header("Location: list.php");
} else {
    echo mysqli_error($conn);
}