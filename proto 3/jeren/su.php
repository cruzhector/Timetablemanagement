<?php
// update timetable refernce page 



if(isset($_POST['sub'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');

$day=$_POST['day'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];
$p6=$_POST['p6'];
$p7=$_POST['p7'];
$p8=$_POST['p8'];
$id=$_POST['fid'];

$sql1="UPDATE fperiod SET fday= '$day', p1= '$p1', p2= '$p2', p3= '$p3', p4= '$p4', p5= '$p5', p6= '$p6', p7= '$p7', p8= '$p8' WHERE fid=$id";

if(mysqli_query($conn,$sql1))
	header("location:s3.php");
else
	echo "no";
}


?>