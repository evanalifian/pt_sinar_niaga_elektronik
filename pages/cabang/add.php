<?php require_once __DIR__ . "/../../layouts/header.php" ?>
<h3>Tambah Cabang</h3>
<form action="save.php" method="post">
    <div class="mb-3">
        <label>Kode Cabang</label>
        <input type="text" name="kode_cabang" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama Cabang</label>
        <input type="text" name="nama_cabang" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Alamat Cabang</label>
        <textarea name="alamat_cabang" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="no_telp" class="form-control">
    </div>
    <button class="btn btn-success">Simpan</button>
</form>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>