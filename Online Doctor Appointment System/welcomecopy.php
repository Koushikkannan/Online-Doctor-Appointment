<html>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<Script type="text/javaScript">
function state()
{
var sel=document.form1.d11.value;

alert("you seleccted  "+sel);

    if(sel == "cardiology")
    {
		 document.form1.l2.disabled = false;
        document.form1.l3.disabled = true;
		 document.form1.l4.disabled = true;
    }
    else if(sel == "orthopedics")
    {
		 document.form1.l3.disabled = false;
        document.form1.l2.disabled = true;
		 document.form1.l4.disabled = true;
    }
	
	else 
	{
	document.form1.l4.disabled = false;
	document.form1.l2.disabled = true;
	document.form1.l3.disabled = true;
	}


}
</Script>
</head>
<style type="text/css">
body
{
		background: url("67.jpg")no-repeat center center fixed;
		 -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;	
		color:white;
		font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
  
  
}
#tes {
    font-size: 20px;
}
.contain{
	
}
.container {
  margin: 80px auto;
  width: 400px;
  text-align: center;
}

.container > .dropdown {
  margin: 0 20px;
  vertical-align: top;
}

.dropdown {
  display: inline-block;
  position: relative;
  overflow: hidden;
  height: 28px;
  width: 150px;
  background: #f2f2f2;
  border: 1px solid;
  border-color: white #f7f7f7 whitesmoke;
  border-radius: 3px;
  background-image: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.06));
  background-image: -moz-linear-gradient(top, transparent, rgba(0, 0, 0, 0.06));
  background-image: -o-linear-gradient(top, transparent, rgba(0, 0, 0, 0.06));
  background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.06));
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.08);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.08);
}

.dropdown:before, .dropdown:after {
  content: '';
  position: absolute;
  z-index: 2;
  top: 9px;
  right: 10px;
  width: 0;
  height: 0;
  border: 4px dashed;
  border-color: #888888 transparent;
  pointer-events: none;
}

.dropdown:before {
  border-bottom-style: solid;
  border-top: none;
}

.dropdown:after {
  margin-top: 7px;
  border-top-style: solid;
  border-bottom: none;
}

.dropdown-select {
  position: relative;
  width: 130%;
  margin: 0;
  padding: 6px 8px 6px 10px;
  height: 28px;
  line-height: 14px;
  font-size: 12px;
  color: #62717a;
  text-shadow: 0 1px white;
  background: #f2f2f2; /* Fallback for IE 8 */
  background: rgba(0, 0, 0, 0) !important; /* "transparent" doesn't work with Opera */
  border: 0;
  border-radius: 0;
  -webkit-appearance: none;
}

.dropdown-select:focus {
  z-index: 3;
  width: 100%;
  color: #394349;
  outline: 2px solid #49aff2;
  outline: 2px solid -webkit-focus-ring-color;
  outline-offset: -2px;
}

.dropdown-select > option {
  margin: 3px;
  padding: 6px 8px;
  text-shadow: none;
  background: #f2f2f2;
  border-radius: 3px;
  cursor: pointer;
}

/* Fix for IE 8 putting the arrows behind the select element. */

.lt-ie9 .dropdown {
  z-index: 1;
}

.lt-ie9 .dropdown-select {
  z-index: -1;
}

.lt-ie9 .dropdown-select:focus {
  z-index: 3;
}

/* Dirty fix for Firefox adding padding where it shouldn't. */

@-moz-document url-prefix() {
  .dropdown-select {
    padding-left: 6px;
  }
}

.dropdown-dark {
  background: #444;
  border-color: #111111 #0a0a0a black;
  background-image: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.4));
  background-image: -moz-linear-gradient(top, transparent, rgba(0, 0, 0, 0.4));
  background-image: -o-linear-gradient(top, transparent, rgba(0, 0, 0, 0.4));
  background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.4));
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), 0 1px 1px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), 0 1px 1px rgba(0, 0, 0, 0.2);
}

.dropdown-dark:before {
  border-bottom-color: #aaa;
}

.dropdown-dark:after {
  border-top-color: #aaa;
}

.dropdown-dark .dropdown-select {
  color: #aaa;
  text-shadow: 0 1px black;
  background: #444;  /* Fallback for IE 8 */
}

.dropdown-dark .dropdown-select:focus {
  color: #ccc;
}

.dropdown-dark .dropdown-select > option {
  background: #444;
  text-shadow: 0 1px rgba(0, 0, 0, 0.4);
}
#div2{
position:absolute;
width:1349px;
height:px;
border:1px;
top:230px;
}
.button_example{
border-color:#D1D1D1;border-width: 1px 1px 5px 1px;border-style: solid; -webkit-border-radius: 11px; -moz-border-radius: 11px;border-radius: 11px;font-size:17px;font-family:comic sans, comic sans ms, cursive, verdana, arial, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: 1px 1px 0 rgba(255,255,255,1);font-weight:bold; color: #242424;
 background-color: #F9F9F9; background-image: -webkit-gradient(linear, left top, left bottom, from(#F9F9F9), to(#B0B0B0));
 background-image: -webkit-linear-gradient(top, #F9F9F9, #B0B0B0);
 background-image: -moz-linear-gradient(top, #F9F9F9, #B0B0B0);
 background-image: -ms-linear-gradient(top, #F9F9F9, #B0B0B0);
 background-image: -o-linear-gradient(top, #F9F9F9, #B0B0B0);
 background-image: linear-gradient(to bottom, #F9F9F9, #B0B0B0);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#F9F9F9, endColorstr=#B0B0B0);
}

.button_example:hover{
 border-color:#B5AEA8;border-width: 1px 1px 5px 1px;border-style: solid;
 background-color: #E0E0E0; background-image: -webkit-gradient(linear, left top, left bottom, from(#E0E0E0), to(#979797));
 background-image: -webkit-linear-gradient(top, #E0E0E0, #979797);
 background-image: -moz-linear-gradient(top, #E0E0E0, #979797);
 background-image: -ms-linear-gradient(top, #E0E0E0, #979797);
 background-image: -o-linear-gradient(top, #E0E0E0, #979797);
 background-image: linear-gradient(to bottom, #E0E0E0, #979797);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#E0E0E0, endColorstr=#979797);
}
</style>
<body>
<h2 align="center">ONLINE DOCTER APPOINTMENT</h2>
<h2 align="center">Visiting hours is between 6 to 9p.m</h2>
<div id="tes">
<?php
session_start();
$name=$_SESSION['username'];
echo  "Welcome: ".$name."<br>";
?>
</div>
<form name="form1" method="POST" action="confirm2.php" align="center">
<h2 >Please select department and doctor</h2>

 <div class="dropdown">
      <Select name="d11" onChange="state()" class="dropdown-select">
<option value="-1" >------Department ------</option>
<option value="cardiology" >Cardiology</option>
<option value="orthopedics" >orthopedics</option>
<option value="cancer" >cancer</option>
</Select>
	  </div>
	  <div class="dropdown">
      <Select name="l2" class="dropdown-select">
	  <option value="-1" >------Cardiology ------</option>
<option value="siddharth">  siddharth</option>
<option value="sweatha">  sweatha</option>
<option value="manoj">manoj </option>
<option value="koushik">koushik </option>
<option value="daniel">daniel </option>
 </Select>
 </div>
 <div class="dropdown">
 <Select name="l3" class="dropdown-select">
 <option value="-1" >------orthopedics ------</option>
<option value="bharath">bharath </option>
<option  value="kannan">kannan </option>
<option value="ambika">ambika</option>
<option  value="janani">jananni </option>
<option value="kishore">kishore</option>
 </Select>
	  </div>
	  <div class="dropdown" >
	  <Select name="l4" class="dropdown-select">
	  <option value="-1" >------cancer ------</option>
<option value="vinod">vinod</option>
<option value="ranjith">ranjith </option>
<option value="shalini">shalini </option>
<option  value="geetha">geetha </option>
<option value="rajesh">rajesh</option>
 </Select>
    </div>
	<h2 >Please select date and time</h2>
	<div class="dropdown" >
	<select name="date1" class="dropdown-select">
<option value="1" > 1 </option>
<option value="2" > 2 </option>
<option value="3" > 3 </option>
<option value="4" > 4 </option>
<option value="5" > 5 </option>
<option value="6" > 6 </option>
<option value="7" > 7</option>
<option value="8" > 8 </option>
<option value="9" > 9 </option>
<option value="10" > 10</option>
<option value="11" > 11 </option>
<option value="12" > 12</option>
<option value="13" > 13 </option>
<option value="14" > 14 </option>
<option value="15" > 15 </option>
<option value="16" > 16</option>
<option value="17" > 17 </option>
<option value="18" > 18</option>
<option value="19" > 19 </option>
<option value="20" > 20 </option>
<option value="21" > 21 </option>
<option value="22" > 22 </option>
<option value="23" > 23</option>
<option value="24" > 24 </option>
<option value="25" > 25</option>
<option value="26" > 26 </option>
<option value="27" > 27</option>
<option value="28" > 28 </option>
<option value="29" > 29 </option>
<option value="30" > 30 </option>
<option value="31" > 31</option>
</select>
</div>
<div class="dropdown" >
<select name="month1" class="dropdown-select" >
<option value="jan" > january </option>
<option value="feb" > febrauary </option>
<option value="mar" > march </option>
<option value="apr" > april </option>
<option value="may" > may </option>
<option value="jun" > june </option>
<option value="jul" > july </option>
<option value="aug" > august</option>
<option value="sep" >september </option>
<option value="oct" > October </option>
<option value="nov" > November </option>
<option value="dec" > December </option>
</select>
</div>
<div class="dropdown" >
<select name="year1" class="dropdown-select">
<option value="2016" > 2016 </option>
<option value="2017" > 2017 </option>
<option value="2018" > 2018 </option>
</select>
</div>	<br>
<br>
<br>
<h2 align="center">Press 'confirm' to make appointment</h2>
<input type="submit" class="button_example" name="confirm" value="confirm">
</body>
</html>


