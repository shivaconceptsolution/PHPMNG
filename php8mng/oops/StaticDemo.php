<?php
class StaticDemo
{
   static $a=100;
   static function fun()
   { 
       echo "static ".StaticDemo::$a;
   }


}
echo StaticDemo::$a;
StaticDemo::$a=200;
StaticDemo::fun();






?>