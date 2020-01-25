<?php
require_once 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records of M.Sc.</title>
<link rel="stylesheet" href="hms.css" />
</head>
<body>
<div>
    <p><a href="index.php">Back</a> 
<h2>View Records of  MCA post graduates</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Email</strong></th>
<th><strong>Class</strong></th>
<th><strong>Enrolled year</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from student_info where Class = 'mca' ;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["First_Name"].' '; echo $row["Last_Name"];?></td>
    <td align="center" ><?php echo $row["Email"]; ?></td>
    <td align="center"><?php echo $row["Class"]; ?></td>
    <td align="center"><?php echo $row["Year"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>

