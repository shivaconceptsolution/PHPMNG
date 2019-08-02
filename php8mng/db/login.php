<?php
include('conn.php');
$u=$_POST['txtuser'];
$p=$_POST['txtpass'];
$res = mysqli_query($conn,"select * from login where username='$u' and password='$p'");

if(mysqli_num_rows($res)>0)
{
	header('location:admin/index.php');
}
else
{

	header('location:index.php?q=invalid userid and password');
	 
}





?>