<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="#" method="get">
<input type="text" name="t1" placeholder="enter first number" />
<br>
<br>
<input type="text" name="t2" placeholder="enter second number" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Click" />

</form>
<?php

if(isset($_GET['btnsubmit']))
{
   $a = $_GET['t1'];
   $b = $_GET['t2'];
   echo "Before Swap a=$a and b=$b <br>";
   $a = $a+$b;
   $b = $a-$b;
   $a = $a-$b;
   echo "After Swap a=$a and b=$b";
}

?>
</body>
</html>