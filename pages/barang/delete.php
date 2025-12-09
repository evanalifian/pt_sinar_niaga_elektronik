<?php
include("../../config/database.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM barang WHERE kode_barang='$id'");

header("Location: list.php");
?>