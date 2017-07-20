<html>
<body>
<style>
 body
{
		background: url("image.jpg")no-repeat center center fixed;
		 -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;	
	color:white;
	
		
}
</style>
<center>
<h3>ONLINE DOCTER APPOINTMENT</h3>
</center>
<?php
session_start();
$name=$_SESSION['username'];
echo  "Welcome: ".$name."<br>";
?>
<center>
<h3>Your patients list</h3>
</center>
<div class="box-body table-responsive no-padding">
<table border="2" cellpadding="10" class="table table-hover">
<tr>
   <th>Name</th>
   <th>Department</th>
   <th>Date</th>
</tr>
<?php
include('db.php');
$name=$_SESSION['username'];
             $sql = "SELECT name,date,dept FROM appointment WHERE doctor='".$name."'";
$result = $con->query($sql);

            if ($result->num_rows > 0)
               {
               while($row = $result->fetch_assoc())
                 {  

            ?>
             <tr>
              <td><?php echo $row['name']; ?></td> 
              <td><?php echo $row['dept']; ?></td> 
              <td><?php echo $row['date']; ?></td> 
            </tr>
            <?php

            }
            }
             ?>


   </table>
</div>
<center>
<td><a href="doctorlogin.php">logout</a></td>
</center>
</body>
</html>