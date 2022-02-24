<?php
require_once("../misc/require.php");

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/uklspp/utils/connect.php";
require($path);

$nisnSiswa = $_GET['nisn'];
$siswa = mysqli_query($connect, "SELECT * FROM siswa WHERE nisn='$nisnSiswa'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>     
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/uklspp/Styles/table.css">
    <meta charset="UTF-8">
    <title>Edit data Siswa</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("../misc/header.php"); ?>
    <!-- Konten -->
    <div class="all-table">
    <h3>Edit data Siswa</h3>
<?php
while($row = mysqli_fetch_assoc($siswa)){?>
    <form action="" method="POST">
        <table class="table table-hover table-light" cellspacing="0" cellpadding="5">
            <input type="hidden" name="nisn" value="<?= $row['nisn']; ?>">
            <tr>
                <td>Nama :</td>
                <td><input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Kelas :</td>
                <div class="select">
                <td><select class="custom-select" name="kelas">
<?php
$kelas = mysqli_query($db, "SELECT * FROM kelas");
while($r = mysqli_fetch_assoc($kelas)){ ?>
                        <option value="<?= $r['id_kelas']; ?>"><?= $r['nama_kelas'] . " | " 
                    . $r['jurusan']; ?></option>
<?php } ?>          </select></div></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><input type="text" class="form-control"  name="alamat" value="<?= $row['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>No. Telp :</td>
                <td><input type="tel" class="form-control" name="no" value="<?= $row['no_tlp']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                <button class="btn btn-outline-secondary" onclick="history.back()" type="button">Kembali</button>
                    <button class="btn btn-outline-secondary" type="submit" name="simpan">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
<?php } ?>
</div>
    <!-- Panggil footer -->
    <?php 
    $Footerpath = $_SERVER['DOCUMENT_ROOT'];
    $Footerpath .= "/uklspp/misc/footer.php"; 
    require($Footerpath); ?>
</body>
</html>
<?php
// Proses update
if(isset($_POST['simpan'])){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no'];
    $update = mysqli_query($db, "UPDATE siswa SET nama='$nama',
                                 id_kelas='$kelas', alamat='$alamat', no_tlp='$no' 
                                 WHERE siswa.nisn='$nisn'");
        if($update){
            header("location: siswa.php");
        }else{
            echo "<script>alert('Gagal'); </script>";
        }
}
?>