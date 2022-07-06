<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
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
        <label for="nip_nuptk">NIP/NUPTK</label><br>
        <input type="text" name="nip_nuptk" id="nip_nuptk" required><br>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" required><br>
        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat" required><br>
        <label for="bidang_study">Bidang Study</label><br>
        <input type="text" name="bidang_study" id="bidang_study" required><br>
        <button name="submit">Simpan</button>
    </form>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <?php
    if(isset($_POST["submit"])){
        //cek apakah data berhasil di tambahkan
        if( tambahguru($_POST) > 0){
            echo "
            <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 50000
              })
            </script>";
        }else {
            echo "<script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 50000
              })
            </script>";
        } 
    }
    ?>
</body>
</html>
