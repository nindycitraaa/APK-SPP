<?php
    $host = "localhost";
    $db = "sekolah";
    $uname = "root";
    $pass = "";

    $connect = mysqli_connect($host, $uname, $pass, $db);

    if (!$connect) {
        echo "Koneksi ke database gagal : ". mysqli_connect_error();
    }
?>