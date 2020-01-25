<?php
require('conn.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $name =$_REQUEST['name'];
    $age = $_REQUEST['age'];
    $submittedby = $_SESSION["username"];
    $ins_query="insert into new_record
    (`trn_date`,`name`,`age`,`submittedby`)values
    ('$trn_date','$name','$age','$submittedby')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/hms.css" />
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" ><!--compiled and minified css-->
<style>.container {border: 3px solid #f1f1f1;align-items:center;max-width:700px;margin:auto;margin-top:10%}
        .psw {float: right;} .navbar-custom {background-color:#33A9FF; }</style>
</head>
<body> <nav  class="navbar navbar-fixed-top navbar-custom">
            <img src="image/download.jpg" alt="logo of bhu" height="55" width="250" style="margin:2px 0px 2px 3px "></nav>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" id="fname" name="firstname" class="form-control" placeholder="Your name.."></p>
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
