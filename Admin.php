 <?php
require_once 'conn.php';
require_once'admin_auth.php';

?><!DOCTYPE html>


<html>
    <head><title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="hms.css" >
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" ><!--compiled and minified css-->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>a{text-decoration: none;}.navbar-custom {background-color:#33A9FF; }</style>
    </head>
    <body><nav  class="navbar navbar-fixed-top navbar-custom">
            <img src="image/download.jpg" alt="logo of bhu" height="55" width="250" style="margin:2px 0px 2px 3px ">
            <span style="font-size:25px;margin-left:270px;color:white;"><b>Admin</b></span></nav><br><br>
       <nav class="navbar">
            <div class="adlog">
       <a href="#" class="ad">Student info</a>
               <!--- <a href="#" class="ad">Fee details</a>-->
                <a href="leave.php" class="ad">Leave Application</a>
                <a href="complaintsinfo.php" class="ad">Complaints</a>
                <!---<a href="#" class="ad">Reports </a>-->
                <a href="insert.php" class="ad">Insert New Record</a>
<a href="viewinfo.php" class="ad">View Records</a>
<a href="admin_logout.php" class="ad"><span class="glyphicon glyphicon-log-out" style="color:white"></span> Logout</a></div>
        </nav>
        <?php
?>
    
    <footer>  © 2018 All Rights Reserved Banaras Hindu University.</footer></body>
</html>
   
 

