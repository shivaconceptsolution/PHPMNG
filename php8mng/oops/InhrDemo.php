<?php
class A
{
	function fun()
	{
		echo "A";
	}
}

class B extends A
{
  function fun1()
  {
  	echo "B";
  }
}

$obj = new B();
$obj->fun1();
$obj->fun();

?>