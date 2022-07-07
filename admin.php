<?php
require 'function.php';
$admin = query("SELECT * FROM tb_admin");
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
<h4>Data Admin</h4>
<button><a href="tambah_admin.php">Tambah data admin</a></button>
    <table border="1">
        <tr>
            <th width="70">No.</th>
            <th width="150">Nama</th>
            <th width="300">Alamat</th>
            <th width="120">No.HP</th>
            <th width="120" colspan="2">Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($admin as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama_admin"]; ?></td>
            <td><?= $row["alamat_admin"]; ?></td>
            <td><?= $row["no_hp"]; ?></td>
            <td><a href="ubah_admin.php?id=<?= $row["id"]; ?>">Edit</a></td>
            <td><a href="">Hapus</a></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    
</body>
</html>