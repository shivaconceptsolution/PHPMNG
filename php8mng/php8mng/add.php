<?php
$a = $_POST['txtnum1'];
$b = $_POST['txtnum2'];
if(isset($_POST['btnsubmit']))
$c = $a+$b;
if(isset($_POST['btnsubmit1']))
$c = $a-$b;
if(isset($_POST['btnsubmit2']))
$c = $a*$b;
if(isset($_POST['btnsubmit3']))
$c = $a/$b;
echo "Result is ",$c;

?>