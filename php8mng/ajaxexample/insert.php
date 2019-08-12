<?php
   $conn=mysqli_connect('localhost','root','','phpdb2');
   $rno=     $_REQUEST['a'];
   $sname =  $_REQUEST['b'];
   $branch = $_REQUEST['c'];
   $fees =   $_REQUEST['d'];
  
   $res = mysqli_query($conn,"insert into student(rno,name,branch,fees) values('$rno','$sname','$branch',$fees)");
   if(mysqli_affected_rows($conn)>0)
   {
   	echo "Data inserted successfully";
   }
   else
   {
   	echo "Data not inserted";
   }




?>