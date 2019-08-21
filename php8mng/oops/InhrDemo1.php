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
class C extends B
{
  function fun2()
  {
  	echo "C";
  }
}


$obj = new C();
$obj->fun2();
$obj->fun1();
$obj->fun();

?>