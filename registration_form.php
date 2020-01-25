<?php require_once 'registration_form_script.php';
if(isset($_SESSION['register_user']))
{ echo $_SESSION['register_user'];}
?>
<!DOCTYPE html>
<html>
 <head>
     <title>Registration Form</title>
         <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="hms.css" >
         <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" ><!--compiled and minified css-->
         <meta name="viewport" content="width=device-width, initial-scale=1"> 
         <style> .navbar-custom{background-color:#33A9FF; }.error-message {text-align:center;color:#FF0000;}.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 5px;
}

	 </style>
 </head>
 <body><nav  class="navbar navbar-fixed-top navbar-custom">
        <img src="image/download.jpg" alt="logo of bhu" height="55" width="250" style="margin:2px 0px 2px 3px "></nav><br><br>
     <div class="container">
         <form  action="registration_form_script.php" method="POST" enctype="multipart/form-data"> 
             <br> <br><div class="error-message"> <?php if(isset($msg)) {  echo $msg; }  ?>
                 
             </div>
            
           <div class="form-group col-md-6"><label for="department">Department</label><select class="form-control" id="department" name="department">
             <option>chem</option><option>phy</option><option>sci</option><option>mathematics</option></select>
            </div>  <div class="form-group col-md-6"><label for="faculty">Faculty</label><select class="form-control" id="department" name="department">
             <option>chem</option><option>phy</option><option>sci</option><option>mathematics</option></select>
            </div>  
            
           <div class="form-group col-md-6"><label  for="firstname">First Name</label>
           <input type="text" class="form-control" name="firstname" id="firstname"></div>
           <div class="form-group col-md-6"><label for="lastname">Last Name</label>
           <input type="text" class="form-control" name="lastname" id="lastname"></div>
               <div class="form-group col-md-6"><label>Gender </label>    Male<input type="radio" name="g" value="m">
                                                           Female<input type="radio" name="g" value="f"></div>
<div class="form-group col-md-6"><label for="class">Class</label>
                <input class="form-control" name="class" id="class" type="text"></div>
<div class="form-group col-md-3"><label for="year">Year</label>
                         <input type="month" class="form-control" id="year" name="year"></div>                    
 
                <div class="form-group col-md-6"><label for="fathername">Father's Name</label>
                    <input type="text" class="form-control" id="fathername" name="fname" ></div>
                <div class="form-group col-md-6 "><label for="mothername">Mother's Name</label>
                    <input type="text" class="form-control" id="mothername" name="mname"></div>
                     <div class="form-group col-md-3"><label for="dob">DOB</label>
                         <input type="date" class="form-control" id="dob" name="date"></div>
                <div class="form-group col-md-3"><label for="nationality" >Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nation"></div> 
                
                <div class="form-group col-md-3"><label for="religion">Religion</label>
                    <input type="text" class="form-control" id="religion" name="religion"></div> 
                <div class="form-group col-md-3"><label for="caste">Caste</label>
<input type="text" class="form-control" id="caste" name="caste"></div><br>
                <div class="form-group col-md-4"><label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"></div>
                    <div class="form-group col-md-4"><label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" ></div>
                <div class="form-group col-md-4"><label for="retypepass">Retype Password</label>
                    <input type="password" class="form-control" id="retypepass" name="retypepass" ></div>
                    <div class="form-group col-md-2"><label for="state">State</label>
                    <input type="text" class="form-control" id="state" name="state" ></div>
                    <div class="form-group col-md-2"><label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" ></div> 
                     <div class="form-group col-md-2"><label for="pincode">Pin code</label>
                    <input type="text" class="form-control" id="pincode" name="pincode" ></div>
                   <div class="form-group col-md-6"><label for="address">Address</label>
                       <textarea name="address" rows="2" cols="55" id="address" ></textarea> </div>  
                   <input type="reset" class=" btn btn-primary" name="reset" value="clear" > 
             <input type="submit" class=" btn btn-primary" name="Submit" value="Submit" >
             
            </form>
        </div>
    </body>
</html>