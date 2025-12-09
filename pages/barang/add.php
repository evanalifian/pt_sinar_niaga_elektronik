<?php include("../../layouts/header.php"); ?>

<h3>Tambah Cabang</h3>

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
        <label>Merek Barang</label>
        <textarea name="merek_barang" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Jenis Barang</label>
        <input type="text" name="jenis_barang" class="form-control">
    </div>

    <div class="mb-3">
        <label>Harga Beli Rata-Rata/ 1 tahun</label>
        <input type="number" name="harga_barang" class="form-control">
    </div>

    <div class="mb-3">
        <label>Harga Jual</label>
        <input type="number" name="harga_jual_barang" class="form-control">
    </div>

    <div class="mb-3">
        <label>Harga Beli</label>
        <input type="number" name="harga_beli_barang" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>

</form>

<?php include("../../layouts/footer.php"); ?>