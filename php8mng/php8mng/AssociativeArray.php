<?php

$student = array("rno"=>1001,"sname"=>"XYZ","branch"=>"CS","fees"=>14000);

echo $student["rno"];
echo $student["sname"];
echo $student["branch"];
echo $student["fees"];
echo "<br>";
foreach ($student as $key => $value) {
	echo "key is $key and $value"."<br>";
}




?>