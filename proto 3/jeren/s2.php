<?php
//insert delete  faculty page





if(isset($_POST['insert'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');

$id = $_POST['userid'];
$name = $_POST['username'];
$dep = $_POST['dept'];
$dob = $_POST['dob'];
$quali = $_POST['quali'];
$mail = $_POST['email'];
$year = $_POST['year'];





$sql2 = "INSERT INTO faculty(fid,fname,fdept,fdob,fquali,fmail,fyear)  VALUES ('$id' ,'$name' ,'$dep' ,'$dob' ,'$quali' ,'$mail' ,'$year' )";
$dup = mysqli_affected_rows($conn);
if($dup >=1){
echo "user exists";
die();
}
if(mysqli_query($conn,$sql2));
{
	echo "inserted";
}

}

if(isset($_POST['delete'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');

$id = $_POST['userid'];
$name = $_POST['username'];
$dep = $_POST['dept'];
$dob = $_POST['dob'];
$quali = $_POST['quali'];
$mail = $_POST['email'];
$year = $_POST['year'];


$sql3 = "DELETE FROM student WHERE fid ='$id'";

if(mysqli_query($conn,$sql3));
{
	echo "deleted";
}
}


?>
<!DOCTYPE html>

<html>
<head>
<title>ADMIN LOGIN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
<center><h1>ARVIS INSTITUTE</h1></center>
</div>
</div>



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
        <li><a href="logout.html" target="_self">Logout</a></li>
        <li><a href="#">Report</a></li>
      </ul>
    </div>

  </div>
</div>


<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
	
      <h1><a href="#">WELCOME</a></h1>
	  <b><p><img src="images/demo/avatar.png" alt="blank"></img>    </p></b>
    </div>

    <nav id="mainav" class="fl_right">
      <ul class="clear">
	  <br/>
	  <br/>
	  <br/>
        <li class="active"><a href="ttpage.html">Home</a></li>
        <li><a class="drop" href="#">Navigation</a>
          
		  <ul>
            <li><a href="" id="id1">Edit</a></li>
            <li><a href="" id="id1">Leave</a></li>
            <li><a href="" id="id1">Personal</a></li>
           
		  </ul>
		  
        </li>
    </nav>

  </header>
</div>



<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/b.jpg');">
    <div id="pageintro" class="hoc clear"> 
      
      <article>
	  <div>
          <p class="heading">FACULTY ENTRY AND DELETE</p>
          
          
        </div>
        <form method="post" action="s2.php">
		
		 ID:<input id="inp1" type="text" name="userid" style="color:black"><p>(for deletion id is enough)</p>		
		<br/>
         NAME:<input id="inp2" type="text" name="username" style="color:black" >
		<br/>
        DEPARTMENT:<input id="inp2" type="text" name="dept" style="color:black" >
		<br/>
		DOB:<input id="inp1" type="text" name="dob" style="color:black" >
		<br/>
        QUALIFICATION:<input id="inp2" type="text" name="quali" style="color:black" >
		<br/>
		EMAIL:<input id="inp2" type="text" name="email" style="color:black">
		<br/>
		YEAR:<input id="inp2" type="text" name="year" style="color:black">
		<br/>
		
		<ul class="nospace inline pushright">
            <li><input class="btn inverse" type="submit" name="insert" value="INSERT"></li>
			<li><input class="btn inverse" type="submit" name="delete" value="DELETE"></li>    
			</ul>
	
		
   </form>       
        
      </article>
     
    </div>
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