<?php require_once __DIR__ . "/../../layouts/header_dashboard.php" ?>
<h3>Tambah Transaksi</h3>
<form action="save.php" method="post">
    <div class="mb-3">
        <label>ID Transaksi</label>
        <input type="text" name="id_transaksi" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Pelanggan</label>
        <select name="id_pelanggan" class="form-control">
            <?php
            $q = mysqli_query($conn, "SELECT * FROM pelanggan");
            while($p = mysqli_fetch_assoc($q)){
                echo "<option value='{$p['id_pelanggan']}'>{$p['nama_pelanggan']}</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Pegawai Melayani</label>
        <select name="id_pegawai" class="form-control">
            <?php
            $q = mysqli_query($conn, "SELECT * FROM pegawai");
            while($p = mysqli_fetch_assoc($q)){
                echo "<option value='{$p['id_pegawai']}'>{$p['nama_pegawai']}</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Kode Cabang</label>
        <select name="kode_cabang" class="form-control">
            <?php
            $q = mysqli_query($conn, "SELECT * FROM cabang");
            while($c = mysqli_fetch_assoc($q)){
                echo "<option value='{$c['kode_cabang']}'>{$c['nama_cabang']}</option>";
            }
            ?>
        </select>
    </div>
    <button class="btn btn-success">Lanjut ke Detail Barang</button>
</form>
<?php require_once __DIR__ . "/../../layouts/footer_dashboard.php" ?>