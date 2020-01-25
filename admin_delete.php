<?php
require_once 'conn.php';
if(isset($_POST["id"]) && !empty($_POST["id"])){echo 'I';
$id=$_POST["id"];echo 'am';
$query = "DELETE FROM student_info WHERE id='".$id."'"; echo 'working';
$result = mysqli_query($con,$query) or die ( mysqli_error($con)); echo 'here';
header("Location:viewinfo.php"); echo 'but';}
?>