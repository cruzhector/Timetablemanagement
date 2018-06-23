<?php
// update student refernce page 



if(isset($_POST['sub'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');

$name=$_POST['name'];
$dep=$_POST['dep'];
$dob=$_POST['dob'];
$quali=$_POST['quali'];
$mail=$_POST['mail'];
$yr=$_POST['yr'];
$id=$_POST['id'];


$sql1="UPDATE faculty SET fname= '$name', fdept= '$dep', fdob= '$dob', fquali= '$quali', fmail= '$mail', fyear= '$yr' WHERE fid ='$id'";

if(mysqli_query($conn,$sql1))
	header("location:s5.php");
else
	echo "no";
}


?>