<?php require_once __DIR__ . "/layouts/header_dashboard.php" ?>
<h2>Dashboard</h2>
<div class="row mt-4">
    <div class="col-md-3">
        <div class="card p-3 text-center">
            <h4>Pegawai</h4>
            <a href="pages/pegawai" class="btn btn-primary mt-2">Kelola</a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 text-center">
            <h4>Pelanggan</h4>
            <a href="pages/pelanggan" class="btn btn-primary mt-2">Kelola</a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 text-center">
            <h4>Barang</h4>
            <a href="pages/barang" class="btn btn-primary mt-2">Kelola</a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 text-center">
            <h4>Transaksi</h4>
            <a href="pages/transaksi" class="btn btn-primary mt-2">Kelola</a>
        </div>
    </div>
</div>
<?php require_once __DIR__ . "/layouts/footer_dashboard.php" ?>