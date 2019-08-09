<?php
$conn=mysqli_connect('localhost','root','','phpdb2');
$fname = $_FILES['f']['name'];

$type = $_FILES['f']['type'];
$size = $_FILES['f']['size'];

echo "File name is $fname type is $type and size is $size<br>";
$d = $_REQUEST['d'];

if(move_uploaded_file($_FILES['f']['tmp_name'], "upload/".$fname))
{
	//echo "file uploaded successfully";
	$res = mysqli_query($conn,"insert into tbl_img(imgpath,imgdesc) values('$fname','$d')");
	if(mysqli_affected_rows($conn)>0)
	{
        echo "Data Uploaded successfully";
	}

}
else
{
	echo "file not uploaded successfully";
}






?>