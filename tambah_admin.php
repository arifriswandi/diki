<?php
require 'function.php';
//ini untuk mengecek apakah tombol submit telah di tekan
if(isset($_POST["submit"])){
    if(tambahadmin($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'admin.php';
        </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'admin.php'
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
        <div class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
        </div>
    </nav>
    <form action="" method="post">
        <label for="nama">Nama Admin</label><br>
        <input type="text" name="nama_admin" id="nama"><br>
        <label for="alamat">Alamat Admin</label><br>
        <input type="text" name="alamat_admin" id="alamat"><br>
        <label for="no">No Hp</label><br>
        <input type="text" name="no_hp" id="no"><br>
        <button name="submit">Simpan</button>
    </form>
</body>
</html>