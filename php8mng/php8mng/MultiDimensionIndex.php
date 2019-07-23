<?php

$x = array(array(1,2,3),array(4,5,6),array(2,3,4,7,8));

for($i=0;$i<count($x);$i++)
{

	for($j=0;$j<count($x[$i]);$j++)
	{
		echo $x[$i][$j]." ";
	}
	echo "<br>";
}





?>