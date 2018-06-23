<?php
// admin login connection page 1


	if(isset($_POST())
	$conn =  mysqli_connect('localhost','root' ,'','arvis') ;
	
	
	
	$name=$_POST['username'];
	$pass=$_POST['password'];
	

	$sql= "SELECT * FROM admin  WHERE aid= '$name' AND apassword= '$pass'";	
	$y= mysqli_query($conn,$sql);
	

	if(isset($y)) {
		header("location:adminlog.php");
                
	}else {
		echo "failed";
	}
?>