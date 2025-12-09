<?php require_once __DIR__ . "/../../layouts/header.php" ?>
<h3>Daftar Pelanggan</h3>
<a href="add.php" class="btn btn-primary mb-3">Tambah Pelanggan</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM pelanggan");
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "
            <tr>
                <td>{$row['id_pelanggan']}</td>
                <td>{$row['nama_pelanggan']}</td>
                <td>{$row['no_telp_pelanggan']}</td>
                <td>{$row['email_pelanggan']}</td>
                <td>
                    <a href='edit.php?id={$row['id_pelanggan']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='delete.php?id={$row['id_pelanggan']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Hapus pelanggan?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </tbody>
</table>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>