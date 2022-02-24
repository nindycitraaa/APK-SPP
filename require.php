<?php 
session_start();
require_once("../utils/connect.php");

if(!isset($_SESSION['username'])){
    header("location: ../login-logout/login.php");
}else{
    $username = $_SESSION['username'];
}
?>