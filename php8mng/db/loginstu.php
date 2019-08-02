<?php
include('conn.php');
$u=$_POST['txtuser'];
$p=$_POST['txtpass'];
$res = mysqli_query($conn,"select * from reg where email='$u' and pass='$p'");

if(mysqli_num_rows($res)>0)
{
	header('location:viewstudent.php');
}
else
{

	header('location:login1.php?q=invalid userid and password');
	 
}





?>