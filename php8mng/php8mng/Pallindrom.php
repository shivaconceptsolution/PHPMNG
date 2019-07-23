<?php
$s = "naman";
$c=0;
for($i=0;$i<strlen($s)/2;$i++)
{
   if($s[$i]!=$s[(strlen($s)-1)-$i])
   {
      $c=1;
      break;
   }

}
if($c==0)
echo "pallindrom";
else
echo "not pallindrom";




?>