<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
   <h1>Student Registration Form</h1>
   <hr>
<form action="" method="post">
<input type="text" name="txtemail" placeholder="Enter Emailid" />
<br>
<br>
<input type="text" name="txtpass" placeholder="Enter password" />
<br>
<br>
<input type="text" name="txtmob" placeholder="Enter mobilemo" />
<br>
<br>
<input type="text" name="txtfname" placeholder="Enter fullname" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Register" />
</form>

<a href="login1.php">Student Login Here</a>
<hr>
<?php
if(isset($_REQUEST['btnsubmit']))
{
   $email=     $_REQUEST['txtemail'];
   $pass =  $_REQUEST['txtpass'];
   $mob = $_REQUEST['txtmob'];
   $fname =   $_REQUEST['txtfname'];
   include('conn.php');
   $res = mysqli_query($conn,"insert into reg(email,pass,mobile,fullname) values('$email','$pass','$mob','$fname')") or die(mysqli_error($conn));
   if(mysqli_affected_rows($conn)>0)
   {
   	echo "Registration successfully";
   }
   else
   {
   	echo "Data not inserted";
   }



}




?>
</center>
</body>
</html>