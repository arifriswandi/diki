<?php
require 'function.php';

$id = $_GET["id"];
if( hapusguru($id) > 0) {
        echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'guru.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'guru.php';
        </script>
        ";
    } 
?>