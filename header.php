<!-- ADMIN DAPAT MENGAKSES SEMUANYA -->
<html>
    <head>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/uklspp/Styles/header.css">        
        
    </head>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/uklspp/utils/connect.php";
    include($path);
    $panggil = mysqli_query($connect, "SELECT * FROM petugas WHERE username='$username'");
    $hasil = mysqli_fetch_assoc($panggil);    
    ?>
    
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item ml-auto">
        <a class="nav-link usrname" href="/uklspp/index.php"> <?php echo $hasil['username']; ?></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link nav-link-active" href="/uklspp/index.php">Home</a>
      </li>
      <?php
      if($hasil['level'] == "admin"){ 
      ?>
      <li class="nav-item">
        <a class="nav-link" href="/uklspp/crud/petugas.php">Data Petugas</a> 
      </li> 
      <li class="nav-Item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkSis" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Siswa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkSis">
          <a class="dropdown-item" href="/uklspp/crud/siswa.php">Data Siswa</a>
          <a class="dropdown-item" href="/uklspp/crud/kelas.php">Data Kelas</a>
        </div>
      </li>

      <li class="nav-Item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkSPP" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SPP
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkSPP">
        <a class="dropdown-item" href="/uklspp/transaction/spp.php">Data SPP</a>
        <a class="dropdown-item" href="/uklspp/transaction/transaksi.php">Transaksi</a>
        <a class="dropdown-item" href="/uklspp/misc/history.php">History Pembayaran</a>
        </div>
      </li>

      <?php
        }else { ?>

      <li class="nav-item">
        <a class="nav-link" href="/uklspp/transaction/transaksi.php">Transaksi</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/uklspp/misc/history.php">History Pembayaran</a>
      </li>      
    <?php } ?>
    <li class="nav-item">
        <a class="nav-link logout" href="/uklspp/login-logout/logout.php">LogOut</a>
      </li>
    </ul>
    
  </div>
</nav>
</html>