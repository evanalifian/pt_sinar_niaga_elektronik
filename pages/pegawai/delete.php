<?php

require_once __DIR__ . "/../../config/database.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai='$id'");

header("Location: /pages/pegawai/");