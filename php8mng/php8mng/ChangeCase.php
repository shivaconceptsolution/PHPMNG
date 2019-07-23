<?php

$x = "XYZSDFGHJLKLPPPR";
for($i=0;$i<strlen($x);$i++)
{
     $x[$i] = chr(ord($x[$i])+32);
     echo $x[$i];

}




?>