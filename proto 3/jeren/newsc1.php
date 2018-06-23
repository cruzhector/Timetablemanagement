<?php


if(isset($_POST['s1'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');






$sql2 = "SELECT * FROM course WHERE cyear='1'";
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
 <form action="newsc1.php" method="post">
 <p class="heading"><b>Available Courses For 1st Yr</b></p>
 <table width="100%">
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
  
  <form action="y.php" method="post">
	 <table>
	  <?php 
  while($row1 = mysqli_fetch_array($table1))
  {
  echo "<tr>";
echo"<td><input type=text name=sec value='".$row1['ssec']."'></td>";
echo" <td ><input type=text name=yr	 value='".$row1['syear']."'></td>";
echo"    <td ><input type=text name=day value='".$row1['sday']."'></td>";
echo"	<td ><input type=text name=p1 value='".$row1['p1']."'></td>";
	echo"<td><input type=text name=p2 value='".$row1['p2']."'></td>";
	echo"<td ><input type=text name=p3 value='".$row1['p3']."'></td>";
	echo"<td ><input type=text name=p4 value='".$row1['p4']."'></td>";
echo"	<td ><input type=text name=p5 value='".$row1['p5']."'></td>";
	echo"<td><input type=text name=p6 value='".$row1['p6']."'></td>"; 
	echo"<td><input type=text name=p7 value='".$row1['p7']."'></td>"; 
	echo"<td><input type=text name=p8 value='".$row1['p8']."'></td>"; 
	echo"<td><input type=hidden name=id value='".$row1['spno']."'></td>";
	
	 echo"<td><input type=submit name=insert value=insert ></td>";
  echo"</tr>";
  }
 
  ?>
  </table>
  </form>
	 
	 </div>
  <div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
  




</body>
</html>