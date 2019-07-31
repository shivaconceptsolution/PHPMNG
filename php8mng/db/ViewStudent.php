<?php
$conn=mysqli_connect('localhost','root','','phpdb2');
$res = mysqli_query($conn,"select * from student");
echo "<table border='1'><tr><th>RNO</th><th>Name</th><th>Branch</th><th>Fees</th></tr>";
while($x = mysqli_fetch_array($res))
{
	echo "<tr><td>".$x[0]."</td><td>".$x[1]."</td><td> ".$x[2]."</td><td> ".$x[3]."</td></tr>";
}
echo "</table>";


?>