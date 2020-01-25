<?php
require_once 'conn.php';
include_once 'admin_auth.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Complaints Records</title>
<link rel="stylesheet" href="hms.css" />
</head>
<body>
<div>
    <p><a href="Admin.php">Back</a> 
| <a href="">Insert New Record</a> 
| <a href="admin_logout.php">Logout</a></p>
<h2>View Complaints</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>First_Name</strong></th>
<th><strong>Last_Name</strong></th>
<th><strong>Room no</strong></th>
<th><strong>Context</strong></th>
<th><strong>Subject</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from complaints ORDER BY id asc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["First Name"]; ?></td>
<td align="center"><?php echo $row["Last Name"]; ?></td>
<td align="center"><?php echo $row["Room No"]; ?></td>
<td align="center"><?php echo $row["Context"]; ?></td>
<td align="center"><?php echo $row["Subject"]; ?></td>
<!---<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>-->

<td align="center"><a href="admin_delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>


