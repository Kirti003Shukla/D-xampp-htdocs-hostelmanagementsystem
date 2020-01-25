 <?php 

include ("config.php");
$query = "select * from user_details where is_approved='0'";

$result=mysql_query($query);

$i = 1; //counter for the checkboxes so that each has a unique name
echo "<form action='process.php' method='post'>"; //form started here
echo "<table border='1'>
<tr>
<th>UserId</th>
<th>Email</th>
<th>Country </th>
<th>Update</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['UserId'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['Country'] . "</td>";

  echo "<td><input type='checkbox' name='check[$i]' value='".$row['UserId']."'/>";   
  echo "</tr>";
  $i++;
  }
echo "</table>";
echo "<input type='submit' name='approve' value='approve'/>";
echo "</form>";

mysql_close($con);
?>
