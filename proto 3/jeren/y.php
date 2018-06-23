<?php
if(isset($_POST['insert'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');


$spno =$_POST['id'];
$sec = $_POST['sec'];
$yr = $_POST['yr'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$p8 = $_POST['p8'];




$sql3 = "INSERT INTO speriod(ssec,syear,sday,p1,p2,p3,p4,p5,p6,p7,p8)  VALUES ('$sec' ,'$yr' ,'$p1' ,'$p2' ,'$p3' ,'$p4' ,'$p5','$p6' ,'$p7' ,'$p8')";
$table1 = mysqli_query($conn,$sql3);
}


?>