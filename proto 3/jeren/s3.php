
<?php

//faculty timetable update  page 


if(isset($_POST['go'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');

$id = $_POST['sec'];
$year = $_POST['yrs'];






$sql1 =  "SELECT * FROM fperiod WHERE fid='$id' AND fyear='$year' AND fday='monday'";
$sql2 =  "SELECT * FROM fperiod WHERE fid='$id' AND fyear='$year' AND fday='tuesday'";
$sql3 =  "SELECT * FROM fperiod WHERE fid='$id' AND fyear='$year' AND fday='wednesday'";
$sql4 =  "SELECT * FROM fperiod WHERE fid='$id' AND fyear='$year' AND fday='thursday'";
$sql5 =  "SELECT * FROM fperiod WHERE fid='$id' AND fyear='$year' AND fday='friday'";


$table1=mysqli_query($conn,$sql1);
$table2=mysqli_query($conn,$sql2);
$table3=mysqli_query($conn,$sql3);
$table4=mysqli_query($conn,$sql4);
$table5=mysqli_query($conn,$sql5);
}

?>
<html>
<head>
<title>ADMIN LOGIN</title>

</head>
<body >


<div >
     
   <form action="ftu.php" method="post" >  
     
        
		
		<table style= "width:100%;color:black;">

		


  
	
  
  <?php 
  while($row = mysqli_fetch_array($table1))
  {
  echo "<tr>";
echo"<td><input type=text name=day value='".$row['fday']."'></td>";
echo" <td ><input type=text name=p1 value='".$row['p1']."'></td>";
echo"    <td ><input type=text name=p2 value='".$row['p2']."'></td>";
echo"	<td ><input type=text name=p3 value='".$row['p3']."'></td>";
	echo"<td><input type=text name=p4 value='".$row['p4']."'></td>";
	echo"<td ><input type=text name=p5 value='".$row['p5']."'></td>";
	echo"<td ><input type=text name=p6 value='".$row['p6']."'></td>";
echo"	<td ><input type=text name=p7 value='".$row['p7']."'></td>";
	echo"<td><input type=text name=p8 value='".$row['p8']."'></td>"; 
	echo"<td><input type=hidden name=id1 value='".$row['fid']."'></td>";
	echo"<td><input type=hidden name=yr1 value='".$row['fyear']."'></td>";
	
	echo"<td><input type=submit name=sub value=update ></td>";
  echo"</tr>";
  
  
  }
  
  ?>
  
   <?php 
  while($row = mysqli_fetch_array($table2))
  {
  echo "<tr>";
echo"<td><input type=text name=day1 value='".$row['fday']."'></td>";
echo" <td ><input type=text name=p11 value='".$row['p1']."'></td>";
echo"    <td ><input type=text name=p22 value='".$row['p2']."'></td>";
echo"	<td ><input type=text name=p33 value='".$row['p3']."'></td>";
	echo"<td><input type=text name=p44 value='".$row['p4']."'></td>";
	echo"<td ><input type=text name=p55 value='".$row['p5']."'></td>";
	echo"<td ><input type=text name=p66 value='".$row['p6']."'></td>";
echo"	<td ><input type=text name=p77 value='".$row['p7']."'></td>";
	echo"<td><input type=text name=p88 value='".$row['p8']."'></td>"; 
	echo"<td><input type=hidden name=id2 value='".$row['fid']."'></td>"; 
	echo"<td><input type=hidden name=yr2 value='".$row['fyear']."'></td>";
	echo"<td><input type=submit name=sub1 value=update ></td>";
  echo"</tr>";
  }
  
  ?>
  
  
   <?php 
  while($row = mysqli_fetch_array($table3))
  {
  echo "<tr>";
echo"<td><input type=text name=day2 value='".$row['fday']."'></td>";
echo" <td ><input type=text name=p111 value='".$row['p1']."'></td>";
echo"    <td ><input type=text name=p222 value='".$row['p2']."'></td>";
echo"	<td ><input type=text name=p333 value='".$row['p3']."'></td>";
	echo"<td><input type=text name=p444 value='".$row['p4']."'></td>";
	echo"<td ><input type=text name=p55 value='".$row['p5']."'></td>";
	echo"<td ><input type=text name=p666 value='".$row['p6']."'></td>";
echo"	<td ><input type=text name=p777 value='".$row['p7']."'></td>";
	echo"<td><input type=text name=p888 value='".$row['p8']."'></td>"; 
	echo"<td><input type=hidden name=id3 value='".$row['fid']."'></td>"; 
	echo"<td><input type=hidden name=yr3 value='".$row['fyear']."'></td>";
	echo"<td><input type=submit name=sub2 value=update ></td>";
  echo"</tr>";
  }
  
  ?>
   
   
   
   <?php 
  while($row = mysqli_fetch_array($table4))
  {
  echo "<tr>";
echo"<td><input type=text name=day3 value='".$row['fday']."'></td>";
echo" <td ><input type=text name=p1111 value='".$row['p1']."'></td>";
echo"    <td ><input type=text name=p2222 value='".$row['p2']."'></td>";
echo"	<td ><input type=text name=p3333 value='".$row['p3']."'></td>";
	echo"<td><input type=text name=p4444 value='".$row['p4']."'></td>";
	echo"<td ><input type=text name=p5555 value='".$row['p5']."'></td>";
	echo"<td ><input type=text name=p6666 value='".$row['p6']."'></td>";
echo"	<td ><input type=text name=p7777 value='".$row['p7']."'></td>";
	echo"<td><input type=text name=p8888 value='".$row['p8']."'></td>"; 
	echo"<td><input type=hidden name=id4 value='".$row['fid']."'></td>"; 
	echo"<td><input type=hidden name=yr4 value='".$row['fyear']."'></td>";
	echo"<td><input type=submit name=sub3 value=update ></td>";
	
  echo"</tr>";
  }
  
  ?>
  
  <?php 
  while($row = mysqli_fetch_array($table5))
  {
  echo "<tr>";
echo"<td><input type=text name=day4 value='".$row['fday']."'></td>";
echo" <td ><input type=text name=p11111 value='".$row['p1']."'></td>";
echo"    <td ><input type=text name=p22222 value='".$row['p2']."'></td>";
echo"	<td ><input type=text name=p33333 value='".$row['p3']."'></td>";
	echo"<td><input type=text name=p44444 value='".$row['p4']."'></td>";
	echo"<td ><input type=text name=p55555 value='".$row['p5']."'></td>";
	echo"<td ><input type=text name=p66666 value='".$row['p6']."'></td>";
echo"	<td ><input type=text name=p77777 value='".$row['p7']."'></td>";
	echo"<td><input type=text name=p88888 value='".$row['p8']."'></td>"; 
	echo"<td><input type=hidden name=id5 value='".$row['fid']."'></td>"; 
	echo"<td><input type=hidden name=yr5 value='".$row['fyear']."'></td>";
	echo"<td><input type=submit name=sub4 value=update ></td>";
  echo"</tr>";
  }
  
  ?>
  
   
  
  </table>
          
        
      </form>
     
    
  </div>
  
</body>
</html>
		