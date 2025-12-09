<?php require_once __DIR__ . "/../../layouts/header.php" ?>
<h3>Tambah Pegawai</h3>
<form action="save.php" method="post">
    <div class="mb-3">
        <label>ID Pegawai</label>
        <input type="text" name="id_pegawai" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama Pegawai</label>
        <input type="text" name="nama_pegawai" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control">
    </div>
    <div class="mb-3">
        <label>Kode Cabang</label>
        <select name="kode_cabang" class="form-control">
            <?php
            $q = mysqli_query($conn, "SELECT * FROM cabang");
            while($row = mysqli_fetch_assoc($q)){
                echo "<option value='{$row['kode_cabang']}'>{$row['nama_cabang']}</option>";
            }
            ?>
        </select>
    </div>
    <button class="btn btn-success">Simpan</button>
</form>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>