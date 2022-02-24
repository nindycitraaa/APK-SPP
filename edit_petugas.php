<?php
require_once("../misc/require.php");
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/uklspp/utils/connect.php";
require($path);

$id = $_GET['id'];
$petugas = mysqli_query($connect, "SELECT * FROM petugas WHERE id_petugas='$id'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/uklspp/Styles/table.css">
    <meta charset="UTF-8">
    <title>Edit data Petugas</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("../misc/header.php"); ?>
    <!-- Konten -->
    <div class="all-table">
    <h3>Edit data Petugas</h3>
<?php
while($row = mysqli_fetch_assoc($petugas)){?>
    <form action="" method="POST">
        <table class="table table-hover table-light" cellspacing="0" cellpadding="5">
            <input type="hidden" name="id" value="<?= $row['id_petugas']; ?>">
            <tr>
                <td>Username :</td>
                <td><input type="text" class="form-control" name="user" value="<?= $row['username']; ?>"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="text" class="form-control" name="pass" value="password baru"></td>
            </tr>
            <tr>
                <td>Nama Petugas :</td>
                <td><input type="text" class="form-control" name="nama" value="<?= $row['nama_petugas']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                <button class="btn btn-outline-secondary" onclick="history.back()" type="button">Kembali</button>
                <button  class="btn btn-outline-secondary" type="submit" name="simpan">Simpan</button>
            </td>
            </tr>
        </table>
    </form>
<?php } ?>
</div>
<hr />
    <!-- Panggil footer -->
    <?php $Footerpath = $_SERVER['DOCUMENT_ROOT'];
    $Footerpath .= "/uklspp/misc/footer.php"; 
    require($Footerpath);?>
</body>
</html>
<?php
// Proses update
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
    $nama = $_POST['nama'];
    $update = mysqli_query($connect, "UPDATE petugas SET username='$user',
                                 password='$pass', nama_petugas='$nama'
                                 WHERE petugas.id_petugas='$id'");
        if($update){
            echo "<script>alert('Data Berhasil Diubah !');location.href='petugas.php';</script>";
        }else{
            $error = mysqli_error($connect);
        echo $error;
        echo "<script>alert('Data gagal disimpan : '$error' !');location.href='edit_petugas.php'</script>";
        }
}
?>