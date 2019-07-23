<?php
$num=6;
            
for($i=2;$i<=$num/2;$i++)
{
     if($num%$i==0)
     	{
     		echo "not prime";
     		break;
     	}
}

if((int)($num/2)+1==$i)
echo "prime";





?>