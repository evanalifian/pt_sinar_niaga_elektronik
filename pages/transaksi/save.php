<?php

require_once __DIR__ . "/../../config/database.php";

$id = mysqli_real_escape_string($conn, $_POST['id_transaksi']);
$tgl = date("Y-m-d");
$pel = mysqli_real_escape_string($conn, $_POST['id_pelanggan']);
$peg = mysqli_real_escape_string($conn, $_POST['id_pegawai']);
$cab = mysqli_real_escape_string($conn, $_POST['kode_cabang']);

$sql = "INSERT INTO transaksi (id_transaksi, tanggal_transaksi, total_transaksi, id_pelanggan, id_pegawai, kode_cabang)
        VALUES ('$id', '$tgl', 0, '$pel', '$peg', '$cab')";

if (mysqli_query($conn, $sql)) {
    header("Location: detail.php?id=$id");
} else {
    echo mysqli_error($conn);
}