


<hr>
<?php
if(isset($_REQUEST['btnsubmit']))
{
   $rno=     $_REQUEST['txtrno'];
   $sname =  $_REQUEST['txtname'];
   $branch = $_REQUEST['txtbranch'];
   $fees =   $_REQUEST['txtfees'];
   include('conn.php');
   $res = mysqli_query($conn,"insert into student(rno,name,branch,fees) values('$rno','$sname','$branch',$fees)");
   if(mysqli_affected_rows($conn)>0)
   {
   	header('location:index.php');
   }
   else
   {
   	echo "Data not inserted";
   }



}




?>
