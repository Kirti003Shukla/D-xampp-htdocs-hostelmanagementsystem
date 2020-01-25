<?php
require_once 'conn.php';
$msg="";
session_start();
     if(isset($_POST['Submit'])) 
     {
         $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
             $lastname = mysqli_real_escape_string($con,$_POST['lastname']); 
              $class = mysqli_real_escape_string($con,$_POST['class']);
             $eemail = mysqli_real_escape_string($con,$_POST['email']);
             $pass = mysqli_real_escape_string($con,$_POST['pass']);
              $retypepass = mysqli_real_escape_string($con,$_POST['retypepass']);    
              $department = mysqli_real_escape_string($con,$_POST['department']);
     
         if(empty($firstname) || empty($lastname) || empty($eemail) || empty($pass)||
                empty($retypepass)||empty($class))
       {$msg= "Details are invalid";}
    else
        if((!empty($firstname)) && (!empty($lastname)) && (!empty($eemail)) && (!empty($pass))&&
                (!empty($retypepass)))
            {
             $slquery = "SELECT * FROM student_info WHERE Email = $eemail"; $result=mysqli_query($con,$slquery);
             
             if(!empty($result)) {$msg="email already exists";}
                else if($pass != $retypepass)
                     {$msg = "passwords doesn't match";}
                else {$qquery = "INSERT INTO student_info (First_Name,Last_Name,Email,Password,Class,trn_date,Department)VALUES ('$firstname','$lastname','$eemail','$pass','$class',CURRENT_TIMESTAMP(),'$department')";
                
                      $insertresult=mysqli_query($con,$qquery);
                      $studentloginquery = "INSERT INTO users (email,pass) VALUES ('$eemail','$pass')";
                      $insertstudentloginresult=mysqli_query($con,$studentloginquery);
                      if($insertresult)
                      {  $_SESSION['register_user']=$eemail;$msg="User Created Successfully.";header("Location:registration_form.php");}
                     else {
                         $msg = "Error in insertion";
                      }
                 }
     } mysqli_close($con);}?>
