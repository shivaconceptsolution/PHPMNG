<?php

class Student
{
    var $rno;
    var $sname;
    function StudentInfo()
    {
    	$this->rno=1001;
    	$this->sname="Vinay";
    	echo $this->rno." ,".$this->sname;
    }

}

$obj = new Student();
$obj->StudentInfo();
$obj1 = new Student();
$obj1->StudentInfo();







?>