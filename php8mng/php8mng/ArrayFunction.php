<?php

$x = array(12,23,34,45,67,78,11,2);
echo "maximum is ".max($x);
echo "minimum is ".min($x);
echo "total is ".array_sum($x);
sort($x);
foreach ($x as $y) {
	echo $y."<br>";
}
echo "<br>";
rsort($x);
foreach ($x as $y) {
	echo $y."<br>";
}

$a= array(1,2,3,4);
$b = array(2,3,5,6,12,23,11,2,3,4);
$c = array_merge($a,$b);
echo "<pre>";
print_r($c);
$d = array_intersect($a,$b);
print_r($d);
$e = array_diff($a, $b);
print_r($e);
$f = array_unique($b);
print_r($f);

$g = array_chunk($b,3);
print_r($g);

$h = array_slice($a,2);
print_r($h);

array_push($a, 5);
print_r($a);
echo array_pop($a);
echo array_pop($a);
echo array_pop($a);
echo array_pop($a);

$key =array("a","b");
$value = array(1001,1002);

$i = array_combine($key,$value);
print_r($i);














?>