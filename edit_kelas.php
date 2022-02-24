<?php
require_once("../misc/require.php");
require "../utils/connect.php";
$id = $_GET['id'];
$kelas = mysqli_query($connect, "SELECT * FROM kelas WHERE id_kelas='$id'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>     
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">        <link rel="stylesheet" type="text/css" href="/uklspp/Styles/table.css">
    <meta charset="UTF-8">
    <title>Edit data Kelas</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("../misc/header.php"); ?>
    <div class="all-table">
    <!-- Konten -->
    <h3>Edit data Kelas</h3>
<?php
while($row = mysqli_fetch_assoc($kelas)){?>
    <form action="" method="POST">
        <table class="table table-hover table-light" cellspacing="0" cellpadding="5">
            <input type="hidden" name="id" value="<?= $row['id_kelas']; ?>">
            <tr>
                <td>Nama Kelas :</td>
                <td><input class="form-control" type="text" name="nama" value="<?= $row['nama_kelas']; ?>"></td>
            </tr>
            <tr>
                <td>Kompetensi Keahlian :</td>
                <td><input class="form-control" type="text" name="kk" value="<?= $row['jurusan']; ?>"></td>
            </tr>
            <tr>
                <td>Angkatan :</td>
                <td><input class="form-control" type="number" name="angkatan" value="<?= $row['angkatan']; ?>"></td>
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
    <?php $Footerpath = $_SERVER['DOCUMENT_ROOT'];
    $Footerpath .= "/uklspp
/misc/footer.php"; 
    require($Footerpath);?>
</body>
</html>
<?php
// Proses update
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kk = $_POST['kk'];
    $angkatan = $_POST['angkatan'];
    $update = mysqli_query($connect, "UPDATE kelas SET nama_kelas='$nama', jurusan='$kk', angkatan = $angkatan
                                 WHERE kelas.id_kelas='$id'");
        if($update){
            echo "<script>alert('Data Berhasil Diubah !');location.href='kelas.php';</script>";
        }else{
            echo "<script>alert('Gagal'); </script>";
        }
}
?>