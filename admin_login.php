<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<link rel="stylesheet" href="hms.css" />
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" ><!--compiled and minified css-->
<style>.container {border: 3px solid #f1f1f1;align-items:center;max-width:400px;margin:auto;margin-top:10%}
    header{display:inline-block;background-color:#33A9FF; }
    .navbar-custom {background-color:#33A9FF; }
</style>
</head>
<body>
<?php
require('conn.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['Submit'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE ademail='$username'
and adpassword='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location:Admin.php");
         }else{
	echo "<div class='container form-group'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='admin_login.php'>Login</a></div>";
	}
    }else{
?>
 <nav  class="navbar navbar-fixed-top navbar-custom">
            <img src="image/download.jpg" alt="logo of bhu" height="55" width="250" style="margin:2px 0px 2px 3px "></nav>
            
            <br><br>   
<div class="container form-group">
    <div><h3>Admin Login</h3><a href="index.php" class="btn btn-lg" style="float:right;margin-top:-42px; "><span class="glyphicon glyphicon-home"></span>Home</a></div>
<form action="" method="post" name="login">
<label for="adminemail">Email</label>    
<input type="email" name="username" class="form-control" id="adminemail" required />
<label for="pwd">Password</label>
<input type="password" name="password" class="form-control" id="pwd" required /><br>
<input name="Submit" type="submit" class="btn btn-primary btn-block" value="Login" /><br>
</form>
</div>
            
<footer> © 2018 All Rights Reserved Banaras Hindu University.</footer>
<?php } ?>
</body>
</html>