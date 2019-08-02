<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<h1>Student Login Here</h1>
	<hr>
	<form action="loginstu.php" method="post">
     <input type="text" name="txtuser" placeholder="Enter Username" />
     <br>
     <br>
     <input type="Password" name="txtpass" placeholder="Enter Password" />
     <br>
     <br>
     <input type="submit" name="btnsubmit" value="Login" />


	</form>

<?php
if(isset($_GET['q']))
	{
		echo $_GET['q'];
	}

?>

<hr>
<a href="Reg.php">NEW Student SIGN UP HERE</a>

</center>

</body>
</html>