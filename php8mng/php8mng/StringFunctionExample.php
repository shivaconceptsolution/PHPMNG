<?php
$s = "Hello";
$s1 = "hello";
echo strlen($s)."<br>";
echo strtoupper($s)."<br>";
echo strtolower("Welcome")."<br>";
echo stripos($s, "l")."<br>";
echo strrev($s)."<br>";
echo str_repeat("scs<br>",2);
echo str_replace("l","s", $s);
echo str_pad($s, 12,".");
if(strcmp($s, $s1)==0)
{
	echo "equall";
}
else if(strcmp($s,$s1)>0)
{
	echo "First is Greater than second";
}
else
{
	echo "Second is greater than first";
}
print_r(str_split($s,3));
echo str_rot13("welcome");

?>