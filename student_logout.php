<?php
session_start();
//if(!empty($_POST['logout'])) {
//unset($_SESSION['login_user']);
if(session_destroy())
{header('Location:student_login.php');}
 ?>
 
