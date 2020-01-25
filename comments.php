<?php
	require 'conn.php';
	$count=0;
	if(!empty($_POST['add'])) {
		$subject = mysqli_real_escape_string($con,$_POST["subject"]);
		$comment = mysqli_real_escape_string($con,$_POST["comment"]);
		$sql = "INSERT INTO comments (subject,comment) VALUES('" . $subject . "','" . $comment . "')";
		mysqli_query($con, $sql);
	}
	$sql2="SELECT * FROM comments WHERE status = 0";
	$result=mysqli_query($con, $sql2);
	$count=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
    <head> <title>notification</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" ><!--compiled and minified css-->
    <style> form{margin-left:15px;}</style>
    </head>
    <body>
<form name="frmNotification" id="frmNotification" action="" method="post" >
	<div id="form-header" class="form-row">Add New Message</div>
	<div class="form-row">
		<div class="form-label">Subject:</div><div class="error" id="subject"></div>
		<div class="form-group col-sm-2">
			<input type="text"  name="subject" id="subject" class="form-control" required>
			
                </div>
                	</div>
	<div class="form-row">
		<div class="form-label">Comment:</div><div class="error" id="comment"></div>
		<div class="form-group">
			<textarea rows="4" cols="30" name="comment" id="comment"></textarea>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group">
			<input type="submit" name="add" id="btn-send" value="Submit" class="btn btn-primary">
		</div>
	</div>
</form>

        </body>
        </html>
