<?php
include("../../layouts/header.php");
include("../../config/database.php");   

$id = $_GET['id'];

$q = mysqli_query($conn, "SELECT * FROM cabang WHERE kode_cabang = '$id'");
$data = mysqli_fetch_assoc($q);
?>

<h3>Edit Cabang</h3>

<form action="update.php" method="post">

    <div class="mb-3">
        <label>Kode Cabang</label>
        <input type="text" name="kode_cabang" class="form-control" value="<?= $data['kode_cabang'] ?>" required readonly>
    </div>

    <div class="mb-3">
        <label>Nama Cabang</label>
        <input type="text" name="nama_cabang" class="form-control" value="<?= $data['nama_cabang'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Alamat Cabang</label>
        <textarea name="alamat_cabang" class="form-control"><?= $data['alamat_cabang'] ?></textarea>
    </div>

    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="no_telp" class="form-control" value="<?= $data['no_telp'] ?>">
    </div>

    <div class="mb-3">
        <label>Kepala Cabang</label>
        <select name="id_kepala_cabang" class="form-control">
            <?php
            $qc = mysqli_query($conn, "SELECT * FROM kepala_cabang");
            while ($row = mysqli_fetch_assoc($qc)) {

                $selected = ($row['id_kepala_cabang'] == $data['id_kepala_cabang']) ? "selected" : "";

                echo "<option value='{$row['id_kepala_cabang']}' $selected>{$row['id_kepala_cabang']}</option>";
            }
            ?>
        </select>
    </div>

    <button class="btn btn-primary">Update</button>

</form>

<?php include("../../layouts/footer.php"); ?>