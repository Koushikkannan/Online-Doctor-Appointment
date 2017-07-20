


<html>
<head>
<style>
body
{
		background: url("ver.jpg")no-repeat center center fixed;
		 -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;	
		
}
.title{
	 color:#8B0000;
 }
 .fset{
	
	 width: 30%;
	 background-color: Cornsilk ;
 }
  #set{
	  position: absolute;
    right: 600px;

 }
 </style>
 </head>
<body >
<center>

<h2><font color="black">ONLINE DOCTOR APPOINTMENT</font></h2>

<?php
session_start();
$name=$_SESSION['name'];
echo  "Welcome: ".$name."<br>";
echo "Verify the data that you have entered"."<br>";
$uname=$_SESSION['uname'];
echo "Your user name:".$uname."<br>"  ;
$s=$_SESSION['pwd'];
echo "Your password:".$s."<br>"  ;
$d=$_SESSION['ph'];
echo "Your phone number:".$d."<br>"  ;
$a=$_SESSION['email'];
echo "Your email address is:".$a."<br>"; 
  $g=$_SESSION['gender']; 
  echo "Gender:".$g."<br>";
 $b= $_SESSION['comment']; 
 echo "Comment you have provided:".$b."<br>";

?>

 <td><a href="confirm.php">Submit</a></td>
<td><a href="registration1.php">Go back</a></td>


</center>
</body>
</html> 

