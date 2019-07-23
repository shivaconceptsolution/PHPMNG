<?php
$s = "assssss";
$v=0;
$c=0;
//echo strlen($s);
//die();
for($i=0;$i<strlen($s);$i++)
{
    if($s[$i]=='a' || $s[$i]=='e' || $s[$i]=='i' ||$s[$i]=='o' || $s[$i]=='u')
    	$v++;
    else
    	$c++;
}

echo "vowel is ".$v." constant is ".$c;


?>

