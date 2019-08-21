<?php
class SI
{
	var $p;
	var $r;
	var $t;
	var $s;
    function accept($p,$r,$t)
    {
       $this->p=$p;
       $this->r=$r;
       $this->t =$t;
    }
    function calculate()
    {
    	$this->s = ($this->p*$this->r*$this->t)/100;

    }
    function display()
    {
    	echo "Simple Interest Is ".$this->s;
    }


}

$obj = new SI();
$obj->accept(12000,2,2);
$obj->calculate();
$obj->display();


?>