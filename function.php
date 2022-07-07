<?php
$conn = mysqli_connect("localhost", "root", "", "projek2");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;
     $nis = htmlspecialchars($data["nis"]);
     $nama = htmlspecialchars($data["nama"]);
     $alamat = htmlspecialchars($data["alamat"]);
     $jurusan = htmlspecialchars($data["jurusan"]);

     $query = "INSERT INTO tb_siswa
     VALUES 
     ('', '$nis', '$nama', '$alamat', '$jurusan');
     ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahguru($data){
    global $conn;
    $nip_nuptk = htmlspecialchars($data["nip_nuptk"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $bidang_study = htmlspecialchars($data["bidang_study"]);

    $query = "INSERT INTO tb_guru
    VALUES
    ('', '$nip_nuptk', '$nama', '$alamat', '$bidang_study');
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahadmin($data){
    global $conn;
    $nama_admin = htmlspecialchars($data["nama_admin"]);
    $alamat_admin = htmlspecialchars($data["alamat_admin"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    $query = "INSERT INTO tb_admin
    VALUES
    ('', '$nama_admin', '$alamat_admin', '$no_hp');
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapusguru($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_guru WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "UPDATE tb_siswa SET 
                nis = '$nis',
                nama = '$nama',
                alamat = '$alamat',
                jurusan = '$jurusan'
            WHERE id = $id
            ";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

function ubahguru($data){
    global $conn;
    $id = $data["id"];
    $nip_nuptk = htmlspecialchars($data["nip_nuptk"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $bidang_study = htmlspecialchars($data["bidang_study"]);

    $query = "UPDATE tb_guru SET
                nip_nuptk = '$nip_nuptk',
                nama = '$nama',
                alamat = '$alamat',
                bidang_study = '$bidang_study'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubahadmin($data){
    global $conn;
    $id = $data["id"];
    $nama_admin = htmlspecialchars($data["nama_admin"]);
    $alamat_admin = htmlspecialchars($data["alamat_admin"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    $query = "UPDATE tb_admin SET
                nama_admin = '$nama_admin',
                alamat_admin = '$alamat_admin',
                no_hp = '$no_hp'
                WHERE id = '$id'
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    
}

?>