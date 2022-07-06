<?php
require 'function.php';

$id = $_GET["id"];

$guru = query("SELECT * FROM tb_guru WHERE id = $id")[0];

if(isset($_POST["submit"])){
    
}


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
</nav>
    <form action="" method="post">
        <label for="nip">Nip/Nuptk</label><br>
        <input type="text" name="nip_nuptk" id="nip" value = "<?= $guru["nip_nuptk"]; ?>"><br>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" value = "<?= $guru["nama"]; ?>"><br>
        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat" value = "<?= $guru["alamat"]; ?>"><br>
        <label for="bidang_study">Bidang Study</label><br>
        <input type="text" name="bidang_study" id="bidang_study" value = "<?= $guru["bidang_study"]; ?>"><br>
        <button name="submit"></button>

    </form>
</body>
</html>