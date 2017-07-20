


<!DOCTYPE HTML> 
 <html>
 <head> 
 <style>
 body
{
		background: url("kl.jpg")no-repeat center center fixed;
		 -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;	
	color:white;
	
		
}
.set{
	width:30%;
	
}
 #set{
	  position: absolute;
    right: 600px;

 }
 .title{
	 color:#8E0A8E;
 }
body {
    background-color: Gainsboro ;
} 
 .fset{
	
	 width: 30%;
	 background-color: lightblue;
 }
 .error {color: #FF0000;}
 </style>
 </head> 
 <?php 
 session_start();
$nameErr = $phoneErr =$emailErr = $genderErr  =$unameErr=$passErr= "";
if(isset($_POST['submit']))
 {
 $name = $phone=$email = $gender = $comment =$ph=$contact=$uname=$pwd="";
 $fname=0;
 $fphone=0;
 $femail=0;
 $fgender=0;
 $funame=0;
 $fpwd=0;
 function test_input($data)
 {    
 $data = trim($data);  
 $data = stripslashes($data);   
 $data = htmlspecialchars($data);
 return $data;
 }
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {  
 if (empty($_POST["name"]))
 {  
$nameErr = "Name is required";   
 } else
 {      
 $name = test_input($_POST["name"]);   
 if (!preg_match("/^[a-zA-Z ]*$/",$name))
	 {
      $nameErr = "Only letters and white space allowed"; 
	 }
	  else{
		  $fname=1;
	  }
 }   
 if (empty($_POST["uname"]))
 {  
$unameErr = "Username is required";   
 } else
 {      
 $uname = test_input($_POST["uname"]);   
 if (!preg_match("/^[a-zA-Z ]*$/",$uname))
	 {
      $unameErr = "Only letters and white space allowed"; 
	 }
	  else{
		  $funame=1;
	  }
 }  
 if (empty($_POST["pwd"]))
 {  
$passErr = "password is required";   
 } else
 {      
 $pwd = test_input($_POST["pwd"]);   
 if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pwd)) {
    $passErr ="the password does not meet the requirements!";
}
	  else{
		  $fpwd=1;
	  }
 }   
  
if (empty($_POST["contact"]))
 {  
$phoneErr = "phone number is required";   
 } 
  else
 {      
 $phone =test_input($_POST["contact"]);   
 if(!preg_match("/^\+?([0-9]{2})\)?([0-9]{10})$/",$phone))
	 {
		 $phoneErr="enter only numbers in your country format";
	 }
	 else
	 {
		 $fphone=1;
	 }
	 
 } 
   
  
 if (empty($_POST["email"])) 
 {  
 $emailErr = "Email is required";  
 } 
 else
 {     
 $email = test_input($_POST["email"]);  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	  {
      $emailErr = "Invalid email format"; 
  }
  else{
	  $femail=1;
  }
 }         

   if (empty($_POST["comment"]))
   {   
   $comment = "";   
   } 
   else 
   {   
   $comment = test_input($_POST["comment"]); 
   }  
   if (empty($_POST["gender"]))
   {     
   $genderErr = "Gender is required"; 
   }
   else
   {   
   $gender = test_input($_POST["gender"]);  
   $fgender=1;
   }
   }  
$_SESSION['name']=$name;
$_SESSION['ph'] = $phone;
$_SESSION['email']=$email;
$_SESSION['gender'] = $gender;
$_SESSION['comment'] = $comment;
$_SESSION['uname'] = $uname;
$_SESSION['pwd'] = $pwd;

 if($fname==1&& $fphone==1&&$femail==1&&$fgender==1&&$funame==1&&$fpwd==1)
{
	header('location:/form3.php');
}
}
 ?>  
 <body>   
<center>
<h1>ONLINE DOCTOR APPOINTMENT</h1>

 <h2>Registration Form</h2>
 <fieldset class="set" ><legend ><h2>Patient info</h2></legend>   
 <h3><span class="error">* Required field.</span></h3> 
 <form method="post" action="">
<h3>
 Name: <input type="text" name="name">  
 <span class="error">*<?php echo $nameErr;?></span> 
 <br><br> 
 Username:<input type="text" name="uname" size="21" maxlength="20">  
 <span class="error">*<?php echo $nameErr;?></span> 
 <br><br>
 Password:<input type="password" name="pwd" size="21" maxlength="20">  
 <span class="error">*<?php echo $passErr;?></span> 
 <br><br>
 phone: <input type="number_format" name="contact" size="20" maxlength="13"> 
 <span class="error">*<?php echo $phoneErr;?></span> 
 <br><br> 
  E-mail: <input type="text" name="email">   
   <span class="error">*<?php echo $emailErr;?></span>  
   <br><br> 
  Gender:    <input type="radio" name="gender" value="female">Female  
   <input type="radio" name="gender" value="male">Male   
   <span class="error">* <?php echo $genderErr;?></span> 
   <br><br>

 
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>  
   <br><br> 
      
   <input type="submit" name="submit" value="Submit"> </h3>
</fieldset>   
   </form> 
 
</center>


</body> 
</html>





