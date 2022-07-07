<?php
require 'function.php';
$siswa = query("SELECT * FROM tb_siswa");

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
<h4>Data siswa/siswi smkn 1 beringin</h4>
<a href="tambah_siswa.php">Tambah data siswa</a>
    <table border="1">
        <tr>
            <th width="50">No.</th>
            <th width="100">Nis</th>
            <th width="150">Nama</th>
            <th width="200">Alamat</th>
            <th width="150">Jurusan</th>
            <th colspan="2" width="100">Aksi</th>
        </tr>
        <?php $no = 1; ?>
       <?php foreach($siswa as $row) : ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><a href="hapus.php?id=<?= $row["id"]; ?>"onclick="return confirm('yakin?');">Hapus</a></td>
            <td><a href="ubah.php?id=<?= $row["id"]; ?>">Edit</a></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>