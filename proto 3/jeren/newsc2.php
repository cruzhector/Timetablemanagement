<?php


if(isset($_POST['s2'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');






$sql2 = "SELECT * FROM course WHERE cyear='2'";
$table = mysqli_query($conn,$sql2);
}


?>
<!DOCTYPE html>

<html>
<head>
<title>ADMIN LOGIN</title>

</head>
<body >


<div >
   
 <form action="newsc2.php" method="post">
 <p class="heading"><b>Available Courses For 2nd Yr</b></p>
 <table width="100%" style="color:black">
<tr>
	<th>course code</th>
	<th>course name</th>
	<th>course branch</th>
	</tr>
     <?php while($row = mysqli_fetch_array($table)): ?>
 
  <tr>
    
    <td style="color: black;"><?php echo $row['ccode'];?></td>
    <td style="color: black;"><?php echo $row['cname'];?></td>
	<td style="color: black;"><?php echo $row['cbranch'];?></td>
	  
  </tr>
  <?php endwhile; ?>
     </table>
	 </form>
   
  
</div>
  





</body>
</html>