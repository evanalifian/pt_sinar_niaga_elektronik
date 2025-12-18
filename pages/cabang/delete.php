<?php

require_once __DIR__ . "/../../config/database.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM cabang WHERE kode_cabang='$id'");

header("Location: /pages/cabang/");