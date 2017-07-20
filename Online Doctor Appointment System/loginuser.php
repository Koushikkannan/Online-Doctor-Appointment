
<?php
session_start();
$username=isset($_POST['uname']) ? $_POST['uname'] : '';
$password=isset($_POST['pwd']) ? $_POST['pwd'] : '';
echo $username;
echo $password;
$con = mysqli_connect("localhost","root","","form1");
$query10="SELECT  * from form1 where (username =  '$username' AND  password  = '$password')";
$result=mysqli_query($con,$query10);
$num1=@mysqli_num_rows($result);
echo $num1;
echo "<br>";
 
if ($_POST["t1"] != $_SESSION["t1"] OR $_SESSION["t1"]=='')  { 
         echo "may be ur  datails are wrong";
		header("Location:userlogin.php");
echo  '<strong>Incorrect verification code.</strong>'; 
       }
 else { 
     // add form data processing code here 
	 
	 if ($num1 >0)
      {
	 echo "logged in";
	 header("Location:list.php");
      }
	 else
	{
		echo "may be ur  datails are wrong";
		header("Location:userlogin.php");
		 
     }
		      echo  '<strong>Verification successful.</strong>'; 
}
 ?> 
<?php
session_start();
$uname=$_POST['username'];
$password=$_POST['pwd'];
$con= mysqli_connect("localhost","root","","form") or die(mysql_error());

mysqli_select_db("form") or die(mysql_error());
echo "  your database was selected !<br>";

$query10="SELECT  * from form1 where username =  $uname AND  password  = '$password'";
$result=mysqli_query($query10,$con);
if ($result)
   echo "logged in";

   
else
   echo "error ".mysql_error();

echo "<br>";
$num1=mysql_num_rows($result);
echo $num1;
echo "<br>";
 if ($num1 >0)
 {
	 echo "logged in";
 }
 
	 else
	{
		echo "may be ur  datails are wrong";
		 
     }
while ($r1 =mysql_fetch_array($result))
  {
	   echo    "welcome" .$r1{'name'};
	   echo "<br>";
	   echo    "welcome" .$r1{'username'};
	   echo "<br>";
	   print_r($r1);
  }
?>
