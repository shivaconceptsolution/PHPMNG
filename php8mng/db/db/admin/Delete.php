<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <h1>Are you sure to delete record?</h1>
   <?php
    include("conn.php");
    $r = $_GET['q'];
    $res = mysqli_query($conn,"select * from student where rno='$r'");
    $x=mysqli_fetch_array($res);
    ?>

<form action="" method="post">
<input type="text" name="txtrno" placeholder="Enter rollno" value="<?php echo $x[0]; ?>" readonly="true"/>
<br>
<br>
<input type="text" name="txtname" placeholder="Enter name"  value="<?php echo $x[1]; ?>"/>
<br>
<br>
<input type="text" name="txtbranch" placeholder="Enter branch" value="<?php echo $x[2]; ?>" />
<br>
<br>
<input type="text" name="txtfees" placeholder="Enter fees" value="<?php echo $x[3]; ?>" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Delete" />
</form>


<?php
if(isset($_REQUEST['btnsubmit']))
{
  
   $rno=     $_REQUEST['txtrno'];
  
   
   $res = mysqli_query($conn,"delete from student where rno='$rno'");
   if(mysqli_affected_rows($conn)>0)
   {
   	header('location:index.php');
   }
   else
   {
   	echo "Data not updated";
   }



}




?>
<hr>
<a href="index.php">View Student Record </a>
</body>
</html>