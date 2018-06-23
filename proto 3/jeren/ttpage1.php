<?php
//time table page for faculty


if(isset($_POST['logout']))
{
	session_destroy();
	header("Location:staff.php");
}
session_start();
$conn =  mysqli_connect('localhost','root' ,'','arvis');
	$user=$_SESSION['username'];

	
	$sql = "SELECT p1,p2,p3,p4,p5,p6,p7,p8,fday FROM fperiod WHERE fid='$user'   ";
	$sql2 = "SELECT fname FROM faculty WHERE fid='".$_SESSION['username']."' ";
	$sql3 = "SELECT ccode FROM  faculty WHERE fid='".$_SESSION['username']."' ";
	$sql4 = "SELECT fyear FROM  faculty WHERE fid='".$_SESSION['username']."' ";
$table = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>

<html>
<head>
<title>TIME TABLE</title>
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
        <?php 
		echo '<form method="post" action="ttpage1.php"><li><input type="submit" value="logout" name="logout"/></li></form>';  ?>
        <li><a href="#">Report</a></li>
      </ul>
    </div>

  </div>
</div>


<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
	
      <h1><a href="#">WELCOME</a></h1>
	  <b><p><img src="images/demo/avatar.png" alt="blank"></img> <?php echo $_SESSION['username']; $table2 = mysqli_query($conn,$sql2); $row2 = mysqli_fetch_array($table2);  echo $row2['fname'];?>   </p></b>
	  <b><p>course:<?php $table3 = mysqli_query($conn,$sql3); $row3 = mysqli_fetch_array($table3);  echo $row3['ccode'];?>   
			Alloted year:		<?php $table4 = mysqli_query($conn,$sql4); $row4 = mysqli_fetch_array($table4);  echo $row4['fyear'];?> 		</p></b>
</div>

    <nav id="mainav" class="fl_right">
      <ul class="clear">
	  <br/>
	  <br/>
	  <br/>
	  <br/>
        <li class="active"><a href="ttpage.php">Home</a></li>
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



<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/3.png');">
    <div id="pageintro" class="hoc clear"> 
      
      <article>
        <div>
          <p class="heading"></p>
        <form>
		<table border="1" cellpadding="5" cellspacing="5">

		
	<tr>
	<th style="background-color: #E15555;"  "color: white;" cellpadding="5" colspan="9"> CLASS ROOM ALLOCATION CHART 2017-2018 </th>
	</tr>



<tr>
    <th style="background-color: #45B5CA;"  "color: white;" cellpadding="5">Alotted to:  SEM CSE A</th>
	<th style="background-color: #45B5CA;"  "color: white;" cellpadding="5" colspan="8">Location : Academic Block 1 </th>
</tr>



  
	<tr>
    <th style="background-color: #4CAF50;"  "color: white;" cellpadding="5">DAY/TIME</th>
	<th style="background-color: #4CAF50;"  "color: white;" cellpadding="5">8:45am-9:45am</th>
	<th style="background-color: #4CAF50;"  "color: white;" cellpadding="5">9:45am-10:45am</th>
	<th style="background-color: #4CAF50;"  "color: white;" cellpadding="5">10:45am-11:00am</th>
	<th style="background-color: #4CAF50;"  "color: white;" cellpadding="5">11:00am-12:00am</th>
	<th style="background-color: #4CAF50;"  "color: white;" cellpadding="5">12:00pm-1:00pm</th>
	<th style="background-color: #4CAF50;"  "color: white;" cellpadding="5">1:00pm-2:00pm</th>
	<th style="background-color: #4CAF50;"  "color: white;" cellpadding="5">2:00pm-3:00pm</th>
	<th style="background-color: #4CAF50;"  "color: white;" cellpadding="5">3:00pm-4:00pm</th>
  </tr>

  
  <?php while($row = mysqli_fetch_array($table)): ?>
 
  <tr>
    <th style="background-color: #4CAF50;"  "color: white;" cellpadding="5"><?php echo $row['fday'];?></th>
    <td style="color: black;"><?php echo $row['p1'];?></td>
    <td style="color: black;"><?php echo $row['p2'];?></td>
	<td style="background-color: #6D3481;" "color: black;"><?php echo $row['p3'];?></td>
	<td style="color: black;"><?php echo $row['p4'];?></td>
	<td style="color: black;"><?php echo $row['p5'];?></td>
	<td style="background-color: #6D3481;" "color: black;"><?php echo $row['p6'];?></td>
	<td style="color: black;"><?php echo $row['p7'];?></td>
	<td style="color: black;"><?php echo $row['p8'];?></td>  
  </tr>
  <?php endwhile; ?>
  
 
 
</table>
   </form>       
        </div>
	
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