<?php require_once __DIR__ . "/../../layouts/header_dashboard.php" ?>
<h3>Daftar Pegawai</h3>
<a href="/pages/pegawai/add.php" class="btn btn-primary mb-3">Tambah Pegawai</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Cabang</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $q = mysqli_query($conn, "
            SELECT pegawai.*, cabang.nama_cabang 
            FROM pegawai 
            JOIN cabang ON pegawai.kode_cabang = cabang.kode_cabang
        ");

        while($row = mysqli_fetch_assoc($q)){
            echo "
                <tr>
                    <td>{$row['id_pegawai']}</td>
                    <td>{$row['nama_pegawai']}</td>
                    <td>{$row['jabatan']}</td>
                    <td>{$row['nama_cabang']}</td>
                    <td>
                        <a href='/pages/pegawai/edit.php?id={$row['id_pegawai']}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='/pages/pegawai/delete.php?id={$row['id_pegawai']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Hapus pegawai?\")'>Hapus</a>
                    </td>
                </tr>
            ";
        }
        ?>
    </tbody>
</table>
<?php require_once __DIR__ . "/../../layouts/footer_dashboard.php" ?>