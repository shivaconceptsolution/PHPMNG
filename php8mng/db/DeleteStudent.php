<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
<input type="text" name="txtrno" placeholder="Enter rollno for delete" />
<br>

<br>
<br>
<input type="submit" name="btnsubmit" value="Delete" />
</form>

<a href="ViewStudent.php">View Student Record </a>
<?php
if(isset($_REQUEST['btnsubmit']))
{
   $rno=     $_REQUEST['txtrno'];
  
   $conn=mysqli_connect('localhost','root','','phpdb2');
   $res = mysqli_query($conn,"delete from student where rno='$rno'");
   if(mysqli_affected_rows($conn)>0)
   {
   	echo "Data deleted successfully";
   }
   else
   {
   	echo "Data not deleted";
   }



}




?>
</body>
</html>