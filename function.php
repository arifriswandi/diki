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
?>