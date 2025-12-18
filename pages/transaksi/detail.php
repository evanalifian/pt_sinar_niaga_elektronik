<?php require_once __DIR__ . "/../../layouts/header_dashboard.php" ?>
<?php
$id = $_GET['id'];
// transaksi header
$th = mysqli_fetch_assoc(mysqli_query($conn, "SELECT t.*, p.nama_pelanggan FROM transaksi t LEFT JOIN pelanggan p ON p.id_pelanggan=t.id_pelanggan WHERE t.id_transaksi='$id'"));
?>
<h3>Detail Transaksi - <?php echo $id; ?></h3>
<p>Tanggal: <?php echo $th['tanggal_transaksi']; ?></p>
<p>Pelanggan: <?php echo $th['nama_pelanggan']; ?></p>
<hr>
<h5>Tambah Barang ke Transaksi</h5>
<form method="post" action="add_item.php">
    <input type="hidden" name="id_transaksi" value="<?php echo $id; ?>">
    <div class="row">
        <div class="col-md-6">
            <select name="kode_barang" class="form-control">
                <?php
                $q = mysqli_query($conn, "SELECT * FROM barang");
                while($b = mysqli_fetch_assoc($q)){
                    echo "<option value='{$b['kode_barang']}'>{$b['nama_barang']} - Rp " . number_format($b['harga_jual_barang']) . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            <input type="number" name="jumlah" class="form-control" value="1" min="1">
        </div>
        <div class="col-md-3">
            <button class="btn btn-success">Tambah</button>
        </div>
    </div>
</form>
<hr>
<h5>Daftar Item</h5>
<table class="table table-bordered">
    <thead><tr><th>Kode</th><th>Nama</th><th>Jumlah</th><th>Subtotal</th></tr></thead>
    <tbody>
    <?php
    $q = mysqli_query($conn, "SELECT d.*, b.nama_barang FROM detail_transaksi d LEFT JOIN barang b ON b.kode_barang=d.kode_barang WHERE d.id_transaksi='$id'");
    $total = 0;
    while($it = mysqli_fetch_assoc($q)){
        echo "<tr>
                <td>{$it['kode_barang']}</td>
                <td>{$it['nama_barang']}</td>
                <td>{$it['jumlah_beli_transaksi']}</td>
                <td>Rp " . number_format($it['subtotal_transaksi']) . "</td>
            </tr>";
        $total += $it['subtotal_transaksi'];
    }
    // update total in transaksi
    mysqli_query($conn, "UPDATE transaksi SET total_transaksi=$total WHERE id_transaksi='$id'");
    ?>
    </tbody>
</table>
<p><strong>Total: Rp <?php echo number_format($total); ?></strong></p>
<a href="list.php" class="btn btn-secondary">Kembali</a>
<?php require_once __DIR__ . "/../../layouts/footer_dashboard.php" ?>