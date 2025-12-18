<?php include("../../layouts/header.php"); ?>

<h3>Tambah Barang</h3>

<form action="save.php" method="post">

    <div class="mb-3">
        <label>Kode Barang</label>
        <input type="text" name="kode_barang" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Merek</label>
        <input type="text" name="merek_barang" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jenis</label>
        <input type="text" name="jenis_barang" class="form-control">
    </div>

    <div class="mb-3">
        <label>Harga Beli</label>
        <input type="number" name="harga_beli_barang" class="form-control" step="0.01">
    </div>

    <div class="mb-3">
        <label>Harga Jual</label>
        <input type="number" name="harga_jual_barang" class="form-control" step="0.01">
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="list.php" class="btn btn-secondary">Kembali</a>

</form>

<?php include("../../layouts/footer.php"); ?>
