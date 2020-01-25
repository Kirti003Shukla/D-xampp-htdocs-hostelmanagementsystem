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
        <div class="container form-group"><center style="color:#33A9FF;"><b>Leave Application</b></center>
  <form action="action_page.php">
      
    <div class="form-group col-md-6"><label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" class="form-control" placeholder="Your name.."></div>

    <div class="form-group col-md-6"><label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" class="form-control" placeholder="Your last name.."></div>
    <div class="form-group"><label for="faculty">Faculty</label>
                <select class="form-control" name="faculty" id="faculty"> <option>1</option><option>2</option><option>3</option><option>4</option></select>
            </div>

    
   <div class="form-group col-md-6"> <label for="phone">phone</label> 
       <input type="tel"  name="phone" class="form-control" placeholder="Enter phone no" id="phone" ></div>
    
    <div class="form-group col-md-6"><label for="roomno">Room no</label> 
        <input type="number"  name="room" class="form-control" id="roomno" placeholder="Enter Room no" min="1" max="450"  ></div>
    
    <div class="form-group col-md-6"><label for="start">start journey</label>
        <input type="date" name="start journey" class="form-control" id="start"></div>
    
    <div class="form-group col-md-6"><label for="end">end journey</label>
        <input type="date" name="end" class="form-control" id="end"></div>
    
     <div class="form-group col-md-6"><label for="place">Purpose</label>
         <textarea id="place" name="lastname" class="form-control" placeholder="Write something.."
                   style="height:80px; width:300px;" ></textarea></div>

 <div class="form-group col-md-6"><label for="subject">Address while destination</label>
     <textarea id="subject" name="subject" class="form-control" placeholder="destination place.."  style="height:80px; width:300px;"></textarea></div>

    <input type="submit" class="btn btn-primary" value="Submit">

  </form>
</div>

    </body></html>