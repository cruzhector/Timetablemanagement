<?php
// update timetable refernce page 



if(isset($_POST['sub'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');


$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];
$p6=$_POST['p6'];
$p7=$_POST['p7'];
$p8=$_POST['p8'];
$s=$_POST['id1'];
$y1=$_POST['yr1'];

$sql1="UPDATE fperiod SET fday= 'monday', p1= '$p1', p2= '$p2', p3= '$p3', p4= '$p4', p5= '$p5', p6= '$p6', p7= '$p7', p8= '$p8' WHERE fid='$s' AND fday='monday' AND fyear='$y1'";;

if(mysqli_query($conn,$sql1))
	header("location:s3.php");
else
	echo "no";
}

if(isset($_POST['sub1'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');


$p11=$_POST['p11'];
$p22=$_POST['p22'];
$p33=$_POST['p33'];
$p44=$_POST['p44'];
$p55=$_POST['p55'];
$p66=$_POST['p66'];
$p77=$_POST['p77'];
$p88=$_POST['p88'];
$s1=$_POST['id2'];
$y2=$_POST['yr2'];

$sql2="UPDATE fperiod SET fday= 'tuesday', p1= '$p11', p2= '$p22', p3= '$p33', p4= '$p44', p5= '$p55', p6= '$p66', p7= '$p77', p8= '$p88' WHERE fid ='$s1' AND fday='tuesday' AND fyear='$y2'";

if(mysqli_query($conn,$sql2))
	header("location:s3.php");
else
	echo "no";
}


if(isset($_POST['sub2'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');


$p111=$_POST['p111'];
$p222=$_POST['p222'];
$p333=$_POST['p333'];
$p444=$_POST['p444'];
$p555=$_POST['p555'];
$p666=$_POST['p666'];
$p777=$_POST['p777'];
$p888=$_POST['p888'];
$s2=$_POST['id3'];
$y3=$_POST['yr3'];

$sql3="UPDATE fperiod SET fday= 'wednesday', p1= '$p111', p2= '$p222', p3= '$p333', p4= '$p444', p5= '$p555', p6= '$p666', p7= '$p777', p8= '$p888' WHERE fid ='$s2'  AND fday='wednesday' AND fyear='$y3'";

if(mysqli_query($conn,$sql3))
	header("location:s3.php");
else
	echo "no";
}


if(isset($_POST['sub3'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');


$p1111=$_POST['p1111'];
$p2222=$_POST['p2222'];
$p3333=$_POST['p3333'];
$p4444=$_POST['p4444'];
$p5555=$_POST['p5555'];
$p6666=$_POST['p6666'];
$p7777=$_POST['p7777'];
$p8888=$_POST['p8888'];
$s3=$_POST['id4'];
$y4=$_POST['yr4'];

$sql4="UPDATE fperiod SET fday= 'thursday', p1= '$p1111', p2= '$p2222', p3= '$p3333', p4= '$p4444', p5= '$p5555', p6= '$p6666', p7= '$p7777', p8= '$p8888' WHERE fid ='$s3'  AND fday='thursday' AND fyear='$y4'";

if(mysqli_query($conn,$sql4))
	header("location:s3.php");
else
	echo "no";
}


if(isset($_POST['sub4'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');


$p11111=$_POST['p11111'];
$p22222=$_POST['p22222'];
$p33333=$_POST['p33333'];
$p44444=$_POST['p44444'];
$p55555=$_POST['p55555'];
$p66666=$_POST['p66666'];
$p77777=$_POST['p77777'];
$p88888=$_POST['p88888'];
$s4=$_POST['id5'];
$y5=$_POST['yr5'];

$sql5="UPDATE fperiod SET fday= 'friday', p1= '$p11111', p2= '$p22222', p3= '$p33333', p4= '$p44444', p5= '$p55555', p6= '$p66666', p7= '$p77777', p8= '$p88888' WHERE fid ='$s4'  AND fday='friday' AND fyear='$y5'";

if(mysqli_query($conn,$sql5))
	header("location:s3.php");
else
	echo "no";
}
?>