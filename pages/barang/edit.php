<?php
require_once __DIR__ . "/../../layouts/header_dashboard.php";
$id = $_GET['id'];

$data = mysqli_fetch_assoc(
  mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang='$id'")
);
?>

<h3>Edit Barang</h3>

<form action="update.php" method="post">

  <input type="hidden" name="kode_barang" value="<?= $data['kode_barang']; ?>">

  <div class="mb-3">
    <label>Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control" value="<?= $data['nama_barang']; ?>" required>
  </div>

  <div class="mb-3">
    <label>Merek</label>
    <input type="text" name="merek_barang" class="form-control" value="<?= $data['merek_barang']; ?>">
  </div>

  <div class="mb-3">
    <label>Jenis</label>
    <input type="text" name="jenis_barang" class="form-control" value="<?= $data['jenis_barang']; ?>">
  </div>

  <div class="mb-3">
    <label>Harga Beli</label>
    <input type="number" name="harga_beli_barang" class="form-control" value="<?= $data['harga_beli_barang']; ?>">
  </div>

  <div class="mb-3">
    <label>Harga Jual</label>
    <input type="number" name="harga_jual_barang" class="form-control" value="<?= $data['harga_jual_barang']; ?>">
  </div>

  <button class="btn btn-success">Update</button>
  <a href="list.php" class="btn btn-secondary">Kembali</a>

</form>
<?php require_once __DIR__ . "/../../layouts/footer_dashboard.php" ?>