<html>
<style type="text/css">
body
{
		background-image: url("surgeons-bg.jpg");	
		color:white;
}
.wi{
	padding-left: 80px;
}
.set{
	width:30%;
}
.wd{
	color:white;
}
</style>
<body >
<center>
<h3 align="center">ONLINE DOCTER APPOINTMENT</h3>
<fieldset class="set"><legend class="title"><h2>User login</h2></legend>   
<form method="POST" action="">
<table border="0" align="center" >
<tr>
<td>Username</td>
<td><input type="text" name="uname">
</td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"</td>
</tr>
<tr>

<td  class="wi" ><img src="captcha1.php" id="capt"></td>
</tr>
<tr>
<td>Enter verification code</td>
<td><input type="text" name="t1" maxlength="5"></td>
</tr>
<tr>
<!--<td><input type="checkbox" name="check" id="remember" value="remember"</td>Remember Password-->
</tr>
<tr>
<td></td><td align="left"><input type="submit" name="Login" value="login"></td>
</tr>
<td><a href="registration1.php" class="wd">New User</a></td>
<td><a href="reset4.php" class="wd">Forget password</a></td>
</table>
</form>

</tr>
</fieldset>
</center>
<?php
session_start();
include('db.php');
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
if(isset($_POST['Login']))
{
$uname=$_POST['uname'];
$password=$_POST['pass'];
if($uname!=''&&$password!='')
{
$query10="SELECT  * from form1 where username ='".$uname."' and  password  = '".$password."'";
$result=mysqli_query($con,$query10);
$res=mysqli_fetch_assoc($result);
if ($res)
{ 
if($_POST['t1']!=''){
if($_POST['t1']==$_SESSION['my_captcha']){

  $_SESSION['username']=$uname;
	header('location:welcomecopy.php');
}
else{
	$msg="Enter correct verification code";
phpAlert(   $msg );
}
} else{
	$msg="Enter  verification code";
phpAlert(   $msg );
}
}  
else
{   
  $msg="Enter correct details";
phpAlert(   $msg );
}
}
else
{
$msg="Enter the details";
phpAlert(   $msg );	
}

}
?>

</body>
</html>