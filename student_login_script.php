<?php
require_once 'conn.php';
$error='';
session_start();
if (isset($_POST['login']))
{if (empty($_POST['Email']) || empty($_POST['Password'])) {
    $error = "Username or Password is invalid";}
else
     {print "bjhjhvj";
    if((isset($_POST['Email']))&&(isset($_POST['Password'])))
        {$email= mysqli_real_escape_string($con,$_POST['Email']);
        $password=mysqli_real_escape_string($con,$_POST['Password']);
           $stuloginquery="select * from users where email='$email' && pass='$password'";
           $stuloginresult=mysqli_query($con,$stuloginquery);  
               if(mysqli_num_rows($stuloginresult)>0)
                   { $_SESSION['login_user']=$email;
                     header('Location:studentuserarea.php');}
                    else{  $error="Wrong details"; }
                    }
       
 mysqli_close($con);}
}
?>
 