<?php
$str = "dfsdsfd";
$max = ord($str[0]);
for($i=1;$i<strlen($str);$i++)
{
   if($max<ord($str[$i]))
   	$max=ord($str[$i]);
}
echo chr($max);




?>