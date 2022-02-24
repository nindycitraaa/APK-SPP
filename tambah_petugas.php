<?php
require_once("../misc/require.php");
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/uklspp/utils/connect.php";
require($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="/uklspp/Styles/table.css">
    <meta charset="UTF-8">
    <title>Tambah Petugas</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("../misc/header.php"); ?>
    <!-- Konten -->
    <div class="all-table">  
    <h3>Tambah Petugas</h3>
    <br>
    <form action="mengnyimpan_petugas.php" method="POST">
        <table class="table table-hover table-light" cellpadding="5">
            <tr>
                <td>Username :</td>
                <td><input class="form-control" type="text" name="user"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input class="form-control" type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input class="form-control" type="text" name="nama"></td>
            </tr>
            <tr>
                <td colspan="2">
                <button class="btn btn-outline-secondary" onclick="history.back()" type="button">Kembali</button>
                <button class="btn btn-outline-secondary" type="submit" name="simpan">Simpan</button>
            </td>
            </tr>
        </table>
    </form>
</div>
    <!-- Panggil footer -->
    <?php 
    $Footerpath = $_SERVER['DOCUMENT_ROOT'];
    $Footerpath .= "/uklspp/misc/footer.php"; 
    require($Footerpath); ?>
</body>
</html>
