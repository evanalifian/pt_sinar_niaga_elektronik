<?php require_once __DIR__ . "/../../layouts/header_dashboard.php" ?>
<h3>Daftar Cabang</h3>
<a href="/pages/cabang/add.php" class="btn btn-primary mb-3">Tambah Cabang</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Cabang</th>
            <th>Nama Cabang</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Kepala Cabang</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = mysqli_query($conn, "
            SELECT cabang.*, pegawai.nama_pegawai AS kepala
            FROM cabang
            LEFT JOIN kepala_cabang kc ON kc.id_kepala_cabang = cabang.id_kepala_cabang
            LEFT JOIN pegawai ON pegawai.id_pegawai = kc.id_pegawai
        ");

        while ($row = mysqli_fetch_assoc($sql)) {
            echo "
            <tr>
                <td>{$row['kode_cabang']}</td>
                <td>{$row['nama_cabang']}</td>
                <td>{$row['alamat_cabang']}</td>
                <td>{$row['no_telp']}</td>
                <td>{$row['id_kepala_cabang']}</td>
                <td>
                    <a class='btn btn-warning btn-sm' href='/pages/cabang/edit.php?id={$row['kode_cabang']}'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='/pages/cabang/delete.php?id={$row['kode_cabang']}' onclick='return confirm(\"Hapus cabang?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </tbody>
</table>
<?php require_once __DIR__ . "/../../layouts/footer_dashboard.php" ?>