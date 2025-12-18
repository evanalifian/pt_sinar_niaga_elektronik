<?php require_once __DIR__ . "/../../layouts/header_dashboard.php" ?>
<h3>Daftar Transaksi</h3>
<a href="/pages/transaksi/add.php" class="btn btn-primary mb-3">Tambah Transaksi</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Pegawai</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = mysqli_query($conn, "
            SELECT t.*, p.nama_pelanggan, pg.nama_pegawai
            FROM transaksi t
            LEFT JOIN pelanggan p ON p.id_pelanggan = t.id_pelanggan
            LEFT JOIN pegawai pg ON pg.id_pegawai = t.id_pegawai
        ");

        while ($row = mysqli_fetch_assoc($sql)) {
            echo "
            <tr>
                <td>{$row['id_transaksi']}</td>
                <td>{$row['tanggal_transaksi']}</td>
                <td>{$row['nama_pelanggan']}</td>
                <td>{$row['nama_pegawai']}</td>
                <td>Rp ".number_format($row['total_transaksi'])."</td>
                <td>
                    <a class='btn btn-info btn-sm' href='detail.php?id={$row['id_transaksi']}'>Detail</a>
                </td>
            </tr>";
        }
        ?>
    </tbody>
</table>
<?php require_once __DIR__ . "/../../layouts/footer_dashboard.php" ?>