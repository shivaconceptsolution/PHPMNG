<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
<input type="submit" name="btnsubmit" value="Insert" />
</form>

<a href="ViewStudent.php">View Student Record </a>
<?php
if(isset($_REQUEST['btnsubmit']))
{
   $rno=     $_REQUEST['txtrno'];
   $sname =  $_REQUEST['txtname'];
   $branch = $_REQUEST['txtbranch'];
   $fees =   $_REQUEST['txtfees'];
   include('conn.php');
   $res = mysqli_query($conn,"insert into student(rno,name,branch,fees) values('$rno','$sname','$branch',$fees)");
   if(mysqli_affected_rows($conn)>0)
   {
   	echo "Data inserted successfully";
   }
   else
   {
   	echo "Data not inserted";
   }



}




?>
</body>
</html>