<?php 
require_once 'student_login_script.php';
if(isset($_SESSION['login_user'])&& !empty($_SESSION['login_user'])){
header("Location:studentuserarea.php");
}
?>
<!DOCTYPE html>
<html><head><title>student_login</title>
        
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" ><!--compiled and minified css-->
       <style>.container {border: 3px solid #f1f1f1;align-items:center;max-width:700px;margin-top:20%}
        .psw {float: right;} .navbar-custom {background-color:#33A9FF; }.error-message {text-align:center;
	color:#FF0000;} a:hover{background-color:white;}.home{float:right;color:black;} a:hover{background-color:white;}

        /*footer*/
footer{background-color:#0099CC;color:black;width:102%;bottom:0;padding:12px 0px 12px 5px;position:fixed;}
</style>
    </head>
    <body><nav  class="navbar navbar-fixed-top navbar-custom container-fluid">
            <img src="image/download.jpg" alt="logo of bhu" class="img-responsive" height="55" width="250" style="margin:2px 0px 2px 3px ">
            <a href="index.php" class="btn home"><span class="glyphicon glyphicon-home"></span>Home</a>
        </nav>
            <div class="container-fluid"><span>New user?<a href="registration_form.php"><b>Register</b></a></span>
            <form method="POST" action="">
            <div class="error-message"><?php if(isset($error)) { echo $error; } ?></div>	

            <div class="form-group"><label for="stuemail">Email</label> 
                                     <input type="email"  name="Email" class="form-control" placeholder="Enter Email" id="stuemail">
                                     <label for="passw">Password</label>
                                     <input type="password" placeholder="Enter Password" name="Password" class="form-control" id="passw">
                <br><input type="submit" class="btn btn-primary" name="login" value="Login" >
                <span class="psw">Forgot <a href="forgotpassword.php"><b>password?</b></a></span></div>
            
            </form>
            </div>
                <footer> © 2018 All Rights Reserved Banaras Hindu University.</footer>
    </body>
    </html>