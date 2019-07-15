<?php

$option='%';
$a=100;
$b=200;
switch($option)
{
   case '+':
   $c=$a+$b;
   echo $c;
   break;
   case '-':
   $c=$a-$b;
   echo $c;
   break;
   case '*':
   $c=$a*$b;
   echo $c;
   break;
   case '/':
   $c=$a/$b;
   echo $c;
   break; 
   default:
   echo "press only +,-,* and / symbol";
   break;
}


?>