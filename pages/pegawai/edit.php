<?php include("../../layouts/header.php"); ?>
<?php include("../../config/database.php"); ?>

<?php
$id = $_GET['id'];
$q = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai = '$id'");
$data = mysqli_fetch_assoc($q);
?>

<h3>Edit Pegawai</h3>

<form action="update.php" method="post">

    <div class="mb-3">
        <label>ID Pegawai</label>
        <input type="text" name="id_pegawai" class="form-control" value="<?= $data['id_pegawai'] ?>" required readonly>
    </div>

    <div class="mb-3">
        <label>Nama Pegawai</label>
        <input type="text" name="nama_pegawai" class="form-control" value="<?= $data['nama_pegawai'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" value="<?= $data['jabatan'] ?>">
    </div>

    <div class="mb-3">
        <label>Tanggal Masuk</label>
        <input type="date" name="tgl_masuk_pegawai" class="form-control" value="<?= $data['tgl_masuk_pegawai'] ?>">
    </div>

    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin_pegawai" class="form-control">
            <option value="L" <?= $data['jenis_kelamin_pegawai'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="P" <?= $data['jenis_kelamin_pegawai'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir_pegawai" class="form-control" value="<?= $data['tanggal_lahir_pegawai'] ?>">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat_pegawai" class="form-control"><?= $data['alamat_pegawai'] ?></textarea>
    </div>

    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="no_telepon_pegawai" class="form-control" value="<?= $data['no_telepon_pegawai'] ?>">
    </div>

    <div class="mb-3">
        <label>Email Pegawai</label>
        <input type="email" name="email_pegawai" class="form-control" value="<?= $data['email_pegawai'] ?>">
    </div>

    <div class="mb-3">
        <label>Password (Kosongkan jika tidak diubah)</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
        <label>Gaji Pegawai</label>
        <input type="number" step="0.01" name="gaji_pegawai" class="form-control" value="<?= $data['gaji_pegawai'] ?>">
    </div>

    <div class="mb-3">
        <label>Kode Cabang</label>
        <select name="kode_cabang" class="form-control">
            <?php
            $cabang = mysqli_query($conn, "SELECT * FROM cabang");
            while ($c = mysqli_fetch_assoc($cabang)) {
                $selected = ($c['kode_cabang'] == $data['kode_cabang']) ? "selected" : "";
                echo "<option value='{$c['kode_cabang']}' $selected>{$c['nama_cabang']}</option>";
            }
            ?>
        </select>
    </div>

    <button class="btn btn-primary">Update</button>

</form>

<?php include("../../layouts/footer.php"); ?>