<?php 
session_start();
ob_start();
if(!isset($_SESSION['user_register_btn'])){
    header("location:index.php");
    exit();
}

include ('config.php');
?>