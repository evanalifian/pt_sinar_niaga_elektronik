<?php require_once __DIR__ . "/../../layouts/header_dashboard.php" ?>
<h3>Tambah Pelanggan</h3>
<form action="save.php" method="post">
    <div class="mb-3">
        <label>ID Pelanggan</label>
        <input type="text" name="id_pelanggan" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="no_telp_pelanggan" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email_pelanggan" class="form-control">
    </div>
    <button class="btn btn-success">Simpan</button>
</form>
<?php require_once __DIR__ . "/../../layouts/footer_dashboard.php" ?>