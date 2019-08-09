<?php
$conn=mysqli_connect('localhost','root','','phpdb2');
$res = mysqli_query($conn,'select * from tbl_img');
while($x=mysqli_fetch_array($res))
{ ?>
    <img src="upload/<?php echo $x['imgpath']; ?>" width="100" height="100"  />
<?php
}?>

