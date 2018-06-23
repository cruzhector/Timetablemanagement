 <?php

//main connection page


$conn =  mysqli_connect('localhost','root' ,'','arvis') ;


if (!$conn) {
    echo "not connected";
}
echo "Connected successfully";

if(!mysqli_query($conn,"Select * from)){
	
	echo "not selected";
}
echo "selected";

?> 
	