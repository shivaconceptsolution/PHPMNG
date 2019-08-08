<?php
include('conn.php');
session_start();
$u=$_POST['txtuser'];
$p=$_POST['txtpass'];
$res = mysqli_query($conn,"select * from reg where email='$u' and pass='$p'");

if(mysqli_num_rows($res)>0)
{
	$_SESSION['uid']=$u;
	setcookie('a',$u,time()+3600);
	setcookie('b',$p,time()+3600);
	header('location:viewstudent.php');
}
else
{

	header('location:login1.php?q=invalid userid and password');
	 
}





?>