<!DOCTYPE html>
<html><head><title>student_login</title>
        
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" ><!--compiled and minified css-->
       <style>.container {border: 3px solid #f1f1f1;align-items:center;max-width:700px;margin:auto;margin-top:10%}
        .psw {float: right;} .navbar-custom {background-color:#33A9FF; }.error-message {text-align:center;
	

      
</style>
    </head>
    <body><nav  class="navbar navbar-fixed-top navbar-custom">
            <img src="image/download.jpg" alt="logo of bhu" height="55" width="250" style="margin:2px 0px 2px 3px ">
            </nav>
        <div class="container form-group"><center style="color:#33A9FF;"><b>Complaints Box</b></center>
  <form action="complaints.php">
      
    <div class="form-group col-md-6"><label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" class="form-control" placeholder="Your name.."></div>

    <div class="form-group col-md-6"><label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" class="form-control" placeholder="Your last name.."></div>
     <div class="form-group col-md-6"><label for="roomno">Room no</label> 
        <input type="number"  name="room" class="form-control" id="roomno" placeholder="Enter Room no" min="1" max="450"  ></div>
    <div class="form-group col-md-6"><label for="con">Context</label>
        <select class="form-control" name="faculty" id="con"> <option>plumber</option><option>electrician</option><option>mess</option>
            <option>other</option></select>
            </div>

    
  <div class="form-group"><label for="subject">Subject</label>
      <textarea id="subject" name="subject" class="form-control" placeholder="Problem is.."  style="height:60px; width:400px;" ></textarea></div>
      
      <div>
          <input type="submit" class="btn btn-primary" value="Submit"></div>

  </form>
</div>

    </body></html>

