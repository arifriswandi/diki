<?php

require 'function.php';

if(isset($_POST["submit"])){
    //cek apakah data berhasil di tambahkan
    if( tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } 
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
    <h4>Tambah data siswa/siswi</h4>
    <form action="" method="post">
        <label for="nis">Nis</label><br>
        <input type="text" name="nis" id="nis" required><br>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" required><br>
        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat" required><br>
        <label for="jurusan">jurusan</label><br>
        <input type="text" name="jurusan" id="jurusan" required><br>
        <button name="submit">Simpan</button>
    </form>
</body>
</html>