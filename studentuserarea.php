<?php require_once 'conn.php'; 
session_start(); 
include 'student_auth.php';
?>
<!DOCTYPE html>
<html><head><title>userarea</title>
        
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" ><!--compiled and minified css-->
       <script type="text/javascript" src="Bootstrap/js/jquery-3.2.1.min.js"></script><!-- jquery library-->
        <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script><!--minified javascript-->
        <script src="hms.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>   .bttn:hover{background-color:#FFD700;border:1px solid #FFD700; style:none;}
            .navbar-custom {background-color:#33A9FF; }
.vertical-menu { width: 200px; /* Set a width if you like */}
.vertical-menu a {border:1px solid white;font-weight:bolder ;
    background-color: black; /* Grey background color */
    color: white; /* Black text color */
    display: block; /* Make the links appear below each other */
    padding: 12px; /* Add some padding */
    text-decoration: none; /* Remove underline from links */}
.vertical-menu a:hover {
    background-color:grey; /* Dark grey background on mouse-over */}
.vertical-menu a.active {
    background-color: #4CAF50; /* Add a green color to the "active/current" link */color: white;}
</style>
    </head>
    <body style="background-color:whitesmoke;"><nav  class="navbar navbar-fixed-top navbar-custom">
            <img src="image/download.jpg" alt="logo of bhu" height="55" width="250" style="margin:2px 0px 2px 3px "></nav>
            
            <br><br>
        <form action="" method="POST">
            <div><center><h3>Welcome  <?php echo $_SESSION['login_user']; ?> , You have successfully logged in!</h3>
                
                </center>
            </div>
</form>
<div class="vertical-menu">
    <a href="leaveapplication.php" >Leave Application</a>
    <a href="complaints.php" >Complaints</a>
 <!--- <a href="#">Documents</a><a href="#">Late Attendance</a>-->
  <a href="student_logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
</div>
        
    </body>
    
</html>

