<?php
session_start();
if(!isset($_SESSION['login_user'])){
header("Location:student_login.php");
exit(); }
?>