<?php
class A
{
var $a=100;
function fun()
{
      echo $this->a;
} 

}

$obj = new A();
echo $obj->a;
echo "<br>";
$obj->fun();


?>