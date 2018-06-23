<?php

//student record update  page 


if(isset($_POST['go'])) {
$conn =  mysqli_connect('localhost','root' ,'','arvis');

$id = $_POST['userid'];






$sql =  "SELECT * FROM faculty WHERE fid='$id' ";

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
     
   <form action="fupdate.php" method="post" >  
     
        
		
		<table style= "width:100%;color:black;">

		
      
        
		
		<?php 
  while($row = mysqli_fetch_array($table))
  {
  echo "<tr>";
echo"<td><input type=text name=name value='".$row['fname']."'></td>";
echo" <td ><input type=text name=dep value='".$row['fdept']."'></td>";
echo"    <td ><input type=text name=dob value='".$row['fdob']."'></td>";
echo"	<td ><input type=text name=quali value='".$row['fquali']."'></td>";
	echo"<td><input type=text name=mail value='".$row['fmail']."'></td>";
	echo"<td ><input type=text name=yr value='".$row['fyear']."'></td>";
	echo"<td><input type=hidden name=id value='".$row['fid']."'></td>";
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