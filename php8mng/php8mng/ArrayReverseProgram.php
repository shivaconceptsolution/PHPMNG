<?php
$x = array(12,23,34,11,67,78,81);
$s=0;
for($i=count($x)-1;$i>=0;$i--)
{
	$s=$s+$x[$i];
	echo $x[$i]."<br>";
}
echo "Sum Of Array Elements Is ".$s;


?>