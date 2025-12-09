<?php include("../../layouts/header.php"); ?>

<h3>Daftar Barang</h3>
<a href="add.php" class="btn btn-primary mb-3">Tambah Barang</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Merek Barang</th>
            <th>Jenis Barang</th>
            <th>Harga Beli Rata-Rata / 1 Tahun</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM barang");

        while ($row = mysqli_fetch_assoc($sql)) {
            echo "
            <tr>
                <td>{$row['kode_barang']}</td>
                <td>{$row['nama_barang']}</td>
                <td>{$row['merek_barang']}</td>
                <td>{$row['jenis_barang']}</td>
                <td>{$row['harga_barang']}</td>
                <td>{$row['harga_jual_barang']}</td>
                <td>{$row['harga_beli_barang']}</td>
                <td>
                    <a class='btn btn-warning btn-sm' href='edit.php?kode_barang={$row['kode_barang']}'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='delete.php?id={$row['kode_barang']}' onclick='return confirm(\"Hapus cabang?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </tbody>
</table>
<a href="../../index.php" class="btn btn-secondary">Kembali</a>
<?php include("../../layouts/footer.php"); ?>