<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1>CRUD OPERATION USING GRID</h1>
<?php
include('conn.php');
$res = mysqli_query($conn,"select * from student");
?>
<table border='1'><tr><th>RNO</th><th>Name</th><th>Branch</th><th>Fees</th></tr>
<?php	
while($x = mysqli_fetch_array($res))
{ ?>
	<tr><td><?php echo $x[0];  ?></td><td><?php echo $x[1];  ?></td><td> <?php echo $x[2];  ?></td><td> <?php echo $x[3];  ?></td>
     <td><a href="Edit.php?q=<?php echo $x[0];  ?>">EDIT</a>|||<a href="Delete.php?q=<?php echo $x[0];  ?>">DELETE</a></td>
	</tr>
<?php
}?>
<form action="insert.php" method="post">
<tr><td><input type="text" name="txtrno"></td><td><input type="text" name="txtname"></td><td><input type="text" name="txtbranch"></td><td><input type="text" name="txtfees"></td><td><input type="submit" name="btnsubmit" value="Insert"></td></tr>
</form>
</table>


</body>
</html>
</center>