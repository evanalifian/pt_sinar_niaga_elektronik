<?php

$nav_paths = ["pegawai", "pelanggan", "barang", "transaksi"];

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top border-bottom">
  <div class="container">
    <a class="navbar-brand" href="/">PT. Sinar Niaga Elektronik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach ($nav_paths as $path): ?>
        <li class="nav-item">
          <a class="nav-link" href="/pages/<?= $path ?>"><?= ucfirst($path) ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <div class="dropdown">
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="..." class="border rounded-circle" width="34" data-bs-toggle="dropdown" aria-expanded="false">
        <ul class="dropdown-menu dropdown-menu-lg-end">
          <li><a class="dropdown-item" href="#">Profil</a></li>
          <li><a class="dropdown-item" href="#">Ubah Password</a></li>
          <li><hr class="dropdown-divider"></li>
          <li class="dropdown-item text-danger" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Log out
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>