<?php
session_start(); 

unset($_SESSION['id_taikhoan']); 

header('location:../login.php');
?>
