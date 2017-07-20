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
<center>

<?php
session_start();
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
$name=$_SESSION['username'];
$con = mysqli_connect("localhost","root", "", "form");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  if(isset($_POST["confirm"])){
	 
  $b1=$_POST['d11'];
  $b2=$_POST['date1'];
  $b3=$_POST['month1'];
  $b4=$_POST['year1'];
  $b5=$b2."/".$b3."/".$b4;
 $seldoct;
    $d1= isset($_POST['l2'])? $_POST['l2']:'';
	$d2=isset($_POST['l3'])? $_POST['l3']:'';
	$d3=isset($_POST['l4'])? $_POST['l4']:'';

	if($d1==null && $d2== null )
	{
		$seldoct=$d3;
        	   $sql="INSERT INTO appointment (name,date,dept,doctor) VALUES ('".$name."','".$b5."','".$b1."','".$seldoct."')";
  $result=mysqli_query($con,$sql);
  if($result)
		   {
	   echo "<h3>Appointmemt made successfully</h3><br>";
	   echo  "your selected department: ".$b1."<br>";
	   echo  "your selected date: ".$b5."<br>";
	   echo "your selected doctor:".$seldoct."<br>";
	   
	   			}
else 
{
	
	 echo "Appointment not made";
			
			
}
	}
	 else if($d2==null   && $d3== null )
	{
		$seldoct=$d1;
		  $sql="INSERT INTO appointment (name,date,dept,doctor) VALUES ('".$name."','".$b5."','".$b1."','".$seldoct."')";
  $result=mysqli_query($con,$sql);
  if($result)
		   {
	   echo "<h3>Appointmemt made successfully</h3><br>";
	   echo  "your selected department: ".$b1."<br>";
	   echo  "your selected date: ".$b5."<br>";
	   echo "your selected doctor:".$seldoct."<br>";
	   			}
else 
{
	
	 echo "Appointment not made";
			
			
}
	}
	else
	{
		$seldoct=$d2;
		   $sql="INSERT INTO appointment (name,date,dept,doctor) VALUES ('".$name."','".$b5."','".$b1."','".$seldoct."')";
  $result=mysqli_query($con,$sql);
  if($result)
		   {
	   echo "<h3>Appointmemt made successfully</h3><br>";
	   echo  "your selected department: ".$b1."<br>";
	   echo  "your selected date: ".$b5."<br>";
	   echo "your selected doctor:".$seldoct."<br>";
	   			}
else 
{
	
	 echo "Appointment not made";
			
			
}
	}

 
  }
?>
<td><a href="userlogin.php">logout</a></td>
</center>

</body>
</html>	