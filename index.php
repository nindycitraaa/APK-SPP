<?php
session_start();
require "./utils/connect.php";
// Jika sesi dari login belum dibuat maka akan kita kembalikan ke halaman login
if(!isset($_SESSION['username'])){
    header("location: ./login-logout/login.php");
}else{
    // Jika sudah dibuatkan sesi maka akan kita masukkan kedalam variabel
    $username = $_SESSION['username'];
}
?>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/uklspp/Styles/index.css">  
        <title>UKL Pembayaran SPP</title>
    </head>
<body>
<!-- Kita akan panggil menu navigasi -->
<?php require_once("./misc/header.php"); ?>

<div class="main">
  <div id="wrapper">
    <div class="content-holder">
      <div class="hero-wrap fl-wrap full-height scroll-con-sec">
        
        <div class="impulse-wrap">
          <div class="mm-par-wrap">
            <div class="mm-parallax" data-tilt data-tilt-max="4" >
              <div class="overlay"></div>
              <?php
              if($_SESSION['level'] == "admin"){
                echo "<div class=\"bg\" data-bg=\"https://images.alphacoders.com/887/thumb-1920-887559.jpg\" style=\"background-image: url(https://images.alphacoders.com/887/thumb-1920-887559.jpg);\">";
                
                echo "</div>";
              }elseif($_SESSION['level'] == "petugas"){
                echo "<div class=\"bg\" data-bg=\"https://images.alphacoders.com/887/thumb-1920-887559.jpg\" style=\"background-image: url(https://images.alphacoders.com/887/thumb-1920-887559.jpg);\">";
                echo "</div>";
              }else{
                echo "<div class=\"bg\" data-bg=\"/Assets/index_wallpaper.jpg\" style=\"background-image: url(/Assets/index_wallpaper.jpg);\">";
                echo "</div>";
              }
              ?>
            
              
              <div class="hero-wrap-item fl-wrap">
                <div class="container"><div class="fl-wrap section-entry hiddec-anim" style="opacity: 1; ">
                 <h1 class="BoardName">Selamat Datang <?=$username; ?></h1>
                  
                  </div></div></div>
              
            </div>
            
          </div>
        </div>
        
        <div class="hero-corner hiddec-anim" style="opacity: 1; transform: translate3d(0px, 0px, 0px);"></div>
        
        <div class="hero-corner2 hiddec-anim" style="opacity: 1; transform: translate3d(0px, 0px, 0px);"></div>
        
        <div class="hero-corner3 hiddec-anim" style="opacity: 1; transform: translate3d(0px, 0px, 0px);"></div>
        
        <div class="hero-corner4 hiddec-anim" style="opacity: 1; transform: translate3d(0px, 0px, 0px);"></div>
        
        
      </div>
    </div>
  </div>
  
</div>
<?php require("./misc/footer.php"); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="/Styles/script.js"></script>
</body>
</html>