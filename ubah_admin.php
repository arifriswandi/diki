<?php
require 'function.php';

$id = $_GET["id"];
//ini untuk mengecek apakah tombol submit telah di tekan
$admin = query("SELECT * FROM tb_admin WHERE id = $id")[0];

if(isset($_POST["submit"])){
    if(ubahadmin($_POST) > 0){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'admin.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'admin.php';
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
    <input type="hidden" name="id" id="id" value="<?= $admin["id"]; ?>" required><br>
        <label for="nama">Nama Admin</label><br>
        <input type="text" name="nama_admin" id="nama" value="<?= $admin["nama_admin"]; ?>"><br>
        <label for="alamat">Alamat Admin</label><br>
        <input type="text" name="alamat_admin" id="alamat" value="<?= $admin["alamat_admin"]; ?>"><br>
        <label for="no">No Hp</label><br>
        <input type="text" name="no_hp" id="no" value="<?= $admin["no_hp"]; ?>"><br>
        <button name="submit">Simpan</button>
    </form>
</body>
</html>