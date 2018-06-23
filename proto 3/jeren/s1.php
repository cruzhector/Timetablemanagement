
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
          <p class="heading">FACULTY</p>
          <h2 class="heading">Edit</h2>
          
        </div>
        <footer>
          <ul class="nospace inline pushright">
		  <li><a href="s2.php"><input class="btn inverse" type="submit" value="INSERTION AND DELETION"></a></li>
		   <li><a href="s4.php"><input class="btn inverse" type="submit" value="UPDATION"></a></li>
		   
		  	
			</ul>
        </footer>
      </article>
	  
	  
      <article>
        
        <div>
          <p class="heading"></p>
          <h2 class="heading">Edit Faculty Timetable</h2>
          
        </div>
		<form  action="s3.php" method="post">
         
		
		 FACULTY ID:<input id="inp1" type="text" name="sec" style="color:black" required/>
			YEAR   :<input id="inp1" type="text" name="yrs" style="color:black" required/>		 
		<br/>
		<footer>
          <ul class="nospace inline pushright">
		  <li><input class="btn inverse" type="submit" name="go" value="VIEW"></li>
		  	
			</ul>
        </footer>
		</form>
      </article>
    </div>
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