<html>
<style type="text/css">
body
{
		background: url("cpw2.jpg")no-repeat center center fixed;
		 -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;	
		
}
</style>
<body>
<form method="POST" action="">

please enter your registered phone number:<br>
Ex.:+91XXXXXXXXXX<br>
<input type="number_format" name="contact" size="15" maxlength="13"> <br>
<input type="submit" name="Login1" value="submit">
</form>
<?php

session_start(); 
include('db.php'); 
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

if(isset($_POST['Login1']))
{
	$phone=$_POST['contact'];
	if($phone==''){
		 $msg="please enter your phone number";
phpAlert(   $msg );
	}else{


            $query10="SELECT  * from form1 where phone ='".$phone."'";
            $result=mysqli_query($con,$query10);
            $res=mysqli_fetch_assoc($result);

if($res)
{
	include ( "NexmoMessage.php" );

$string1="abcdefghijklmnopqrstuvwxyz";
$string2="1234567890";
$string=$string1.$string2;
$string=str_shuffle($string);
$rand=substr($string,0,8);
	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('a330242d', '2af11e224d7cde5e');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( $phone, 'kannan', '$rand' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!
	$query10="UPDATE form1 SET password='".$rand."' where phone ='".$phone."'";
	$result=mysqli_query($con,$query10);
	 if($result)
		   {
	   echo "<h2>Updated password Successfully</h2>";
	   			}
else 
{
	 echo "Update Failed";
			
			
}
		}
	else{
			 $msg="The number is not registered";
phpAlert(   $msg );
		}
		
	}
		}


?>

	
	</body>
	</html>