<?php
require 'function.php';
$guru = query("SELECT * FROM tb_guru");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav>
  <div class="nav-item">
    <a class="nav-link" href="index.php">Siswa</a>
  </div>
  <div class="nav-item">
    <a class="nav-link" href="guru.php">Guru</a>
  </div>
  <div class="nav-item">
    <a class="nav-link" href="admin.php">Admin</a>
  </div>
</nav>

<h4>Data guru smkn 1 beringin</h4>
<a href="tambah_guru.php">Tambah data guru</a>
    <table border="1">
        <tr>
            <th width="50">No.</th>
            <th width="100">Nip/Nuptk</th>
            <th width="150">Nama</th>
            <th width="200">Alamat</th>
            <th width="150">Bidang Study</th>
            <th colspan="2" width="100">Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach($guru as $row) : ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row["nip_nuptk"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["bidang_study"]; ?></td>
            <td><a href="hapus_guru.php?id=<?= $row["id"]; ?>">Hapus</a></td>
            <td><a href="ubah_guru.php?id=<?= $row["id"]; ?>">Edit</a></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>