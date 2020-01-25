<?php
require 'conn.php';
session_start();
$uploadOk = 1;
$msg="";$pic="";$rec="";$mssg="";
$target_dir = "uploads/";
$target_dir_doc = "uploadsdoc/";

if(isset($_FILES['image'])&&isset($_FILES['receipt'])){

// Get image name
$image = $_FILES['image']['name'];
$receipt = $_FILES['receipt']['name'];
$target_file = $target_dir . basename($image);
$target_file_doc = $target_dir_doc . basename($receipt);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$receiptFileType = strtolower(pathinfo($target_file_doc,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES['image']['tmp_name']); 
    $checkreceipt = getimagesize($_FILES['receipt']['tmp_name']);
    if(($check !== false) && ($checkreceipt !== false)) {
         $msg= "File is an image - " . $check["mime"] . ".";
         $mssg= "File is an image - " . $checkreceipt["mime"] . ".";
        $uploadOk = 1;
    }else{
         $msg= "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
     $msg= "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
     $msg= "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
     $msg= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {$sql = "INSERT INTO images (image,feereceipt) VALUES ('$image',$receipt)";
  	// execute query
  	mysqli_query($con, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)&&(move_uploaded_file($_FILES['receipt']['tmp_name'], $target_file_doc))) 
            {$pic= "<img src='$target_file'/>";
         $msg= "The file ". basename( $_FILES['image']['name']). " has been uploaded."; 
         $rec= "<img src='$target_file_doc'/>";
         $mssg= "The file ". basename( $_FILES['receipt']['name']). " has been uploaded.";
         } 
    
 
           else{ $msg= "Sorry, there was an error uploading your file.";
           $mssg= "Sorry, there was an error uploading your file.";
           }
    
}} 

?>
<!DOCTYPE html>
<html>
 <head><title>scanned information</title>
     <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" >
     <style>#img_div{width: 80%;padding: 5px;margin: 10px auto;border: 1px solid #cbcbcb;}#img_div:after{
   	content: "";
   	display: block;
   	clear: both;}
  img{float: left;margin: 5px;width: 200px;height: 230px;border:1px solid black; }
  form{width:50%;margin: 20px auto;border:1px solid black; }
   form div{margin-top: 5px; }div{border: 1px solid black;height:250px;}

   	</style>
</head>
<body>
     <?php  echo $msg; echo $mssg;?>
<form action="uploaddocuments.php" method="post" enctype="multipart/form-data">
    
   
    <div>  <b>Select image to upload:</b><?php echo $pic; ?> <input type="file" name="image" />
    </div><br>
    <div>  <b> Hostel Fee receipt to upload:</b><?php echo $rec; ?>  
        <input type="file" name="receipt" />
    </div>
    <center><input type="submit" value="Upload Image" name="submit" class="btn btn-primary" /></center>
</form>
</body>
</html>
