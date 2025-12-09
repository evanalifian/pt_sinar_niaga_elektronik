<?php include("../../layouts/header.php"); ?>
<?php include("../../config/database.php"); ?>

<h3>Tambah Pegawai</h3>

<form action="save.php" method="post">

    <div class="mb-3">  
        <label>ID Pegawai</label>
        <input type="text" name="id_pegawai" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Nama Pegawai</label>
        <input type="text" name="nama_pegawai" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tanggal Masuk</label>
        <input type="date" name="tgl_masuk_pegawai" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin_pegawai" class="form-control">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir_pegawai" class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat_pegawai" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="no_telepon_pegawai" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email Pegawai</label>
        <input type="email" name="email_pegawai" class="form-control">
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
        <label>Gaji Pegawai</label>
        <input type="number" step="0.01" name="gaji_pegawai" class="form-control" value="0.00">
    </div>

    <div class="mb-3">
        <label>Kode Cabang</label>
        <select name="kode_cabang" class="form-control">
            <?php
            $cabang = mysqli_query($conn, "SELECT * FROM cabang");
            while ($c = mysqli_fetch_assoc($cabang)) {
                echo "<option value='{$c['kode_cabang']}'>{$c['nama_cabang']}</option>";
            }
            ?>
        </select>
    </div>

    <button class="btn btn-success">Simpan</button>

</form>

<?php include("../../layouts/footer.php"); ?>