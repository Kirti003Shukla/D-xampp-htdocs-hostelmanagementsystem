<?php
require_once 'conn.php';
session_start();
?>
 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HMS Main</title>
        <link rel="stylesheet" type="text/css" href="hms.css" >
         <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" ><!--compiled and minified css-->
       <script type="text/javascript" src="Bootstrap/js/jquery-3.2.1.min.js"></script><!-- jquery library-->
        <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script><!--minified javascript-->
        <script src="hms.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen and (min-width: 900px)" href="widescreen.css">
        <link rel="stylesheet" media="screen and (max-width: 600px)" href="smallscreen.css">

        <style>

    .btn:hover{background-color:#FFD700;border:1px solid #FFD700;}
    </style>
    </head>
    <body><div class="line"></div>
        <div style="float:right;"><a class="btn btn-info" href=student_login.php>student</a>
        <!---<a class="btn btn-info" href=uploaddocuments.php>upload</a>
        <a class="btn btn-info" href=practice.php>pratice</a>-->
        <a class="btn btn-info" href=admin_login.php>Admin Login</a> </div>
        
<div><img src="image/download.jpg" alt="logo of bhu" class="img-responsive"></div>
           <nav class="navbar navbar-custom container-fluid" role="navigation">  
               <div class="navbar-header"><a class="navbar-brand" href="#" style="color:black">K.D.C. Hostel</a></div>

            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Enrolls <span class="caret"></span></a>
                    
                     <ul class="dropdown-menu">
                         <li><a  href="graduation.php">B.Sc.</a></li>
                         <li><a href="postgraduation.php">M.Sc.</a></li>
                         <li><a href="postgraduationmca.php">M.C.A.</a></li>
                     </ul>
                    </li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Administration <span class="caret"></span></a>
                       <ul class="dropdown-menu"><li><a href="#">Employees</a></li>
                           <li> <a href="#">Mess</a></li>
                        </ul> </li>
                <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Notification <span class="caret"></span></a>
                   
                       <ul class="dropdown-menu"><li><a href="events.php">Upcoming Events</a></li>
                           <li><a href="comments.php">Update Events</a></li>
                       </ul></li>
                <li><a href="">Alumni</a></li></ul>
            </nav>
       <div class="col-md-8"> <div id="myCarousel" class="carousel" data-ride="carousel"  >
  <!--- Indicators--> 
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner container-fluid" role="listbox" style="width:100%; height:100%!important;">
    <div class="item active">
        <img src="image/IMG_20180509_144512.jpg" alt="Los Angeles" class="img-responsive" >
    </div>

    <div class="item">
      <img src="image/IMG_20180509_144335.jpg" alt="Chicago"  class="img-responsive" >
    </div>

    <div class="item">
      <img src="image/kundandevi.jpg" alt="New York" width=800 class="img-responsive" >
    </div>
  </div>

  <!-- Left and right controls -->
 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
           </div></div>

           <div class="col-md-4" > <div class="jumbotron container-fluid "  ><div class="text-info" style="text-align:justify;padding: 5px;">
             <img src="image/malviyaji.jpg" alt="Malviyaji" width=100 height=100 class="img-circle img-responsive" style="float:right;" >
             India is not a country of the Hindus only. It is a country of the Muslims, the Christians and the Parsees too.
              The country can gain strength and develop itself only when the people of the different communities in India live in mutual 
                 goodwill and harmony. It is my earnest hope and prayer that this centre of life and light which is coming into existence, 
                 will produce students who will not only be intellectually equal to the best of their fellow students in other parts of the world, but will also live a noble life,
                 love their country and be loyal to the Supreme ruler.
         <p><em>Bharat Ratna Mahamana Pt. Madan Mohan Malaviya <br>
                 Founder</em></p>

                   </div></div></div>
  
    
<footer> <b>© 2018 All Rights Reserved Banaras Hindu University.</b></footer></body>
</html>
