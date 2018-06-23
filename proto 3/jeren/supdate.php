<?php
// update student refernce page 



if(isset($_POST['sub'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');

$name=$_POST['name'];
$sec=$_POST['sec'];
$yr=$_POST['yr'];
$dob=$_POST['dob'];
$ph=$_POST['ph'];
$sem=$_POST['sem'];
$id=$_POST['id'];


$sql1="UPDATE student SET sname= '$name', ssec= '$sec', syear= '$yr', sdob= '$dob', phone= '$ph', ssem= '$sem' WHERE sid ='$id'";

if(mysqli_query($conn,$sql1))
	header("location:a5.php");
else
	echo "no";
}


?>