<?php

//admin login page

	if(isset($_POST['log'])){
	require 'scon.php';
	
	
	
	$name=$_POST['username'];
	$pass=$_POST['password'];
	

	$sql= "SELECT * FROM admin  WHERE aid= '$name' AND apassword= '$pass'";	
	
	

	if(mysqli_query($conn,$sql));
{
			header("location:adminlog.php");
}            
	
	}
?>




<!DOCTYPE html>

<html lang="">
<head>
<title>ADMIN LOGIN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +91 9876543210</li>
        <li><i class="fa fa-envelope-o"></i> info@arvis.edu</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="about.html" target="_self">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
	
      <h1><a href="index.html">ARVIS INSTITUTE</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          
		  <ul>
            <li><a href="" id="id1">Student Corner</a></li>
            <li><a href="" id="id1">Clubs</a></li>
            <li><a href="" id="id1">Academic Timetable</a></li>
            <li><a href="" id="id1">Department</a></li>
            <li><a href="" id="id1">Committe</a></li>
            <li><a href="" id="id1">Other Links</a></li>
		  </ul>
		  
        </li>
    </nav>
  </header>
</div>



<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/ins3.jpg');">
    <div id="pageintro" class="hoc clear"> 
      
      <article>
        <div>
          <p class="heading"></p>
          <h2 class="heading">ADMIN LOGIN</h2>
          <p>Please Login</p>
        </div>
		<form  method="post" action="admin.php" >
		
		Username:<input id="inp1" type="text" name="username" style="color:black" required/>
		<br/>
        Password:<input id="inp2" type="password" name="password" style="color:black" required/>
		
		<br/>
		<br/>
		<footer>
          <ul class="nospace inline pushright">
             <li><input class="btn inverse" type="submit" name="log" value="LOG IN"></li>
			</ul>
        </footer>
      </form>
	  </article>
     
    </div>
  </div>
  
</div>


<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_third first">
      <h6 class="heading">FIND US AT</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          ARVIS INSTITUTE , streetno:5 gachibowli, Hyderabad , Telengana , 507001
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +91 9876543210</li>
        <li><i class="fa fa-envelope-o"></i> info@arvis.edu</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">FOR NEWS LETTER</h6>
      <p class="nospace btmspace-30">Please Provide Your Details Below</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">@Copyright 2017 - All Rights Reserved - <a href="#">ARVIS INSTITUTE</a></p>
  </div>
</div>


<a id="backtotop" href="#"><i class="fa fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
<script src="layout/scripts/jquery.toptobottom.js"></script>
</body>
</html>


