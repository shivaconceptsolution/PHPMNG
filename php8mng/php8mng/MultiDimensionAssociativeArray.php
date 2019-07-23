<?php

$x = array(
	array("rno"=>1001,"sname"=>"xyz","branch"=>"CS","fees"=>45000),
	array("rno"=>1002,"sname"=>"abc","branch"=>"IT","fees"=>65000),
	array("rno"=>1003,"sname"=>"mno","branch"=>"EC","fees"=>85000),
	array("rno"=>1004,"sname"=>"xyz","branch"=>"CS","fees"=>45000));

foreach ($x as $y) 
{
	foreach ($y as $z) 
	{
		echo $z." ";
	}
	echo "<br>";
}







?>