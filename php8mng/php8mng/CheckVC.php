<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
<input type="text" name="txtchk" placeholder="Check Vowel and Consonent" />
<br>
<input type="submit" name="btnsubmit" value="Click"/>
<?php
if(isset($_REQUEST['btnsubmit']))
{
    $ch = $_REQUEST['txtchk'];
    $s = ($ch=='a' || $ch=='e' || $ch=='i' || $ch=='o' || $ch=='u')?"Vowel":"Consonent";
    echo $s;

}



?>

</form>
</body>
</html>