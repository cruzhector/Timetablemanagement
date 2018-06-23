<?php

//student record update  page 


if(isset($_POST['go'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');

$id = $_POST['userid'];






$sql =  "SELECT * FROM student WHERE sid='$id' ";

$table=mysqli_query($conn,$sql);
}

?>



<!DOCTYPE html>

<html>
<head>
<title>ADMIN LOGIN</title>

</head>
<body >


<div >
     
   <form action="supdate.php" method="post" >  
     
        
		
		<table style= "width:100%;color:black;">

		
      
        
		
		<?php 
  while($row = mysqli_fetch_array($table))
  {
  echo "<tr>";
echo"<td><input type=text name=name value='".$row['sname']."'></td>";
echo" <td ><input type=text name=sec value='".$row['ssec']."'></td>";
echo"    <td ><input type=text name=yr value='".$row['syear']."'></td>";
echo"	<td ><input type=text name=dob value='".$row['sdob']."'></td>";
	echo"<td><input type=text name=ph value='".$row['phone']."'></td>";
	echo"<td ><input type=text name=sem value='".$row['ssem']."'></td>";
	echo"<td><input type=hidden name=id value='".$row['sid']."'></td>";
	echo"<td><input type=submit name=sub value=update ></td>";
  echo"</tr>";
  }
  ?>		
   </form>       
        
      </article>
     
    </div>
  </div>
  




</table>
          
        
      </form>
     
    
  </div>
  
</body>
</html>