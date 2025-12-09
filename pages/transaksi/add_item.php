<?php

require_once __DIR__ . "/../../config/database.php";

$id = mysqli_real_escape_string($conn, $_POST['id_transaksi']);
$kode = mysqli_real_escape_string($conn, $_POST['kode_barang']);
$jumlah = (int) $_POST['jumlah'];

// ambil harga jual
$b = mysqli_fetch_assoc(mysqli_query($conn, "SELECT harga_jual_barang FROM barang WHERE kode_barang='$kode'"));
$harga = $b ? (float)$b['harga_jual_barang'] : 0.0;
$subtotal = $harga * $jumlah;

// insert detail
mysqli_query($conn, "INSERT INTO detail_transaksi (id_transaksi, kode_barang, jumlah_beli_transaksi, subtotal_transaksi)
    VALUES ('$id', '$kode', $jumlah, $subtotal)"); 

// redirect kembali ke detail
header("Location: detail.php?id=$id");