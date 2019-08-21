<?php

class Student
{
    var $rno;
    var $sname;
    function accept($rno,$sname)
    {
    	$this->rno=$rno;
    	$this->sname=$sname;
    	
    }
    function display()
    {
       echo $this->rno." ,".$this->sname;
    }

}

$obj = new Student();
$obj->accept(1001,"xyz");
$obj->display();
$obj1 = new Student();
$obj1->accept(1002,"abc");
$obj1->display();

?>