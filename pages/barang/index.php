<?php require_once __DIR__ . "/../../layouts/header_dashboard.php" ?>

<h3>Daftar Barang</h3>

<a href="add.php" class="btn btn-primary mb-3">Tambah Barang</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Merek</th>
            <th>Jenis</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $q = mysqli_query($conn, "SELECT * FROM barang");
        while ($row = mysqli_fetch_assoc($q)) {
            echo "
            <tr>
                <td>{$row['kode_barang']}</td>
                <td>{$row['nama_barang']}</td>
                <td>{$row['merek_barang']}</td>
                <td>{$row['jenis_barang']}</td>
                <td>Rp ".number_format($row['harga_beli_barang'])."</td>
                <td>Rp ".number_format($row['harga_jual_barang'])."</td>
                <td>
                    <a href='./edit.php?id={$row['kode_barang']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='./delete.php?id={$row['kode_barang']}'
                       onclick='return confirm(\"Hapus barang?\")'
                       class='btn btn-danger btn-sm'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </tbody>
</table>
<?php require_once __DIR__ . "/../../layouts/footer_dashboard.php" ?>
