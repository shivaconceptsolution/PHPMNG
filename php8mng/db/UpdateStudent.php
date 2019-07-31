<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <h1>Record Updated Here</h1>
<form action="" method="post">
<input type="text" name="txtrno" placeholder="Enter rollno" />
<br>
<br>
<input type="text" name="txtname" placeholder="Enter name" />
<br>
<br>
<input type="text" name="txtbranch" placeholder="Enter branch" />
<br>
<br>
<input type="text" name="txtfees" placeholder="Enter fees" />
<br>
<br>
<input type="submit" name="btnsubmit" value="UPDATE" />
</form>

<a href="ViewStudent.php">View Student Record </a>
<?php
if(isset($_REQUEST['btnsubmit']))
{
   $rno=     $_REQUEST['txtrno'];
   $sname =  $_REQUEST['txtname'];
   $branch = $_REQUEST['txtbranch'];
   $fees =   $_REQUEST['txtfees'];
   $conn=mysqli_connect('localhost','root','','phpdb2');
   $res = mysqli_query($conn,"update student set name='$sname',branch='$branch',fees='$fees' where rno='$rno'");
   if(mysqli_affected_rows($conn)>0)
   {
   	echo "Data updated successfully";
   }
   else
   {
   	echo "Data not updated";
   }



}




?>
</body>
</html>