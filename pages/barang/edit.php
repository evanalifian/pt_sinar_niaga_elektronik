<?php 
include("../../layouts/header.php");
include("../../config/database.php");

// Ambil kode_barang dari URL
if (!isset($_GET['kode_barang'])) {
    echo "<div class='alert alert-danger'>Kode barang tidak ditemukan!</div>";
    include("../../layouts/footer.php");
    exit;
}

$kode = $_GET['kode_barang'];

// Ambil data barang berdasarkan kode_barang
$sql = "SELECT * FROM barang WHERE kode_barang = '$kode'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

// Jika data tidak ada
if (!$data) {
    echo "<div class='alert alert-danger'>Data tidak ditemukan!</div>";
    include("../../layouts/footer.php");
    exit;
}
?>

<h3>Edit Barang</h3>

<form action="update.php" method="post">

    <!-- Kode barang lama -->
    <input type="hidden" name="kode_barang_old" value="<?= $data['kode_barang']; ?>">

    <div class="mb-3">
        <label>Kode Barang</label>
        <input type="text" name="kode_barang" class="form-control" value="<?= $data['kode_barang']; ?>" required>
    </div>

    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="<?= $data['nama_barang']; ?>" required>
    </div>

    <div class="mb-3">
        <label>Merek Barang</label>
        <textarea name="merek_barang" class="form-control"><?= $data['merek_barang']; ?></textarea>
    </div>

    <div class="mb-3">
        <label>Jenis Barang</label>
        <input type="text" name="jenis_barang" class="form-control" value="<?= $data['jenis_barang']; ?>">
    </div>

    <div class="mb-3">
        <label>Harga Beli Rata-Rata / 1 Tahun</label>
        <input type="number" name="harga_barang" class="form-control" value="<?= $data['harga_barang']; ?>">
    </div>

    <div class="mb-3">
        <label>Harga Jual</label>
        <input type="number" name="harga_jual_barang" class="form-control" value="<?= $data['harga_jual_barang']; ?>">
    </div>

    <div class="mb-3">
        <label>Harga Beli</label>
        <input type="number" name="harga_beli_barang" class="form-control" value="<?= $data['harga_beli_barang']; ?>">
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="list.php" class="btn btn-secondary">Kembali</a>

</form>

<?php include("../../layouts/footer.php"); ?>
