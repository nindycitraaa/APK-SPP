<?php
require_once("../misc/require.php");
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/uklspp/utils/connect.php";
require($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/uklspp/Styles/table.css">
    <meta charset="UTF-8">
    <title>Tambah SPP</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("../misc/header.php"); ?>
    <!-- Konten -->
    <div class="all-table">
    <h3>Tambah SPP</h3>
    <form action="" method="POST">
        <table class="table table-hover table-light" cellspacing="0" border="1" cellpadding="5">
        <tr>
                <td>Id SPP :</td>
                <td><input class="form-control" type="number" name="id"></td>
            </tr>
        <tr>
                <td>Angkatan :</td>
                <td><input class="form-control" type="number" name="angkatan"></td>
            </tr>
            <tr>
                <td>Tahun :</td>
                <td><input class="form-control" type="number" name="tahun"></td>
            </tr>
            <tr>
                <td>Nominal :</td>
                <td><input class="form-control" type="number" name="nominal"></td>
            </tr>
            <tr>
                <td colspan="2"><button class="btn btn-outline-secondary" onclick="history.back()" type="button">Kembali</button>
                <button class="btn btn-outline-secondary" type="submit" name="simpan">Simpan</button>
            </td>
            </tr>
        </table>
    </form>
    </div>
            <!-- Panggil footer -->
    <?php $footerpath = $_SERVER['DOCUMENT_ROOT'];
    $footerpath .= "/uklspp/misc/footer.php"; 
    require($footerpath);?>
</body>
</html>
<?php
// Proses Simpan
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $angkatan = $_POST['angkatan'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    $simpan = mysqli_query($connect, "INSERT INTO spp VALUES($id, $angkatan, $tahun, $nominal)");
        if($simpan){
            echo "<script>alert('Data Berhasil Ditambahkan !');location.href='../transaction/spp.php';</script>";
        }else{
            //show the error
            $error = mysqli_error($connect);
        echo $error;
        echo "<script>alert('Data gagal disimpan : '$error' !');location.href='tambah_spp.php'</script>";
        }
}
?>