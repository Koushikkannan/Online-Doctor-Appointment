<html>
<style type="text/css">
body
{
		background: url("rt.jpg")no-repeat center center fixed;
		 -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;	
		
}
</style>
<body>
<?php
session_start();
$con = mysqli_connect("localhost","root", "", "form");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  
  $b1=$_SESSION['name'];
  $b2=$_SESSION['uname'];
  $b3=$_SESSION['pwd'];
  $b4=$_SESSION['ph'];
  $b5=$_SESSION['email'];
  $b6=$_SESSION['gender'];
  $b7=$_SESSION['comment'];
  $sql="INSERT INTO form1 VALUES ('$b1','$b2','$b3',$b4,'$b5','$b6','$b7')";
  $result=mysqli_query($con,$sql);
  if($result)
		   {
	   echo "<h2>Updated Successfully</h2>";
	   			}
else 
{
	 echo "Update Failed";
			
			
}
	?>  
</body>
</html>	
	   
