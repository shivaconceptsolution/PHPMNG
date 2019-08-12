<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
     function insertdata()
     {
         rno = document.getElementById("txtrno").value;
         name = document.getElementById("txtname").value;
         branch = document.getElementById("txtbranch").value;
         fees = document.getElementById("txtfees").value;
         xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange=function()
         {
          document.getElementById("res").innerHTML = xmlhttp.responseText;
         }
         xmlhttp.open("POST","insert.php?a="+rno+"&b="+name+"&c="+branch+"&d="+fees,true);
         xmlhttp.send();

     }

	</script>
</head>
<body>

<input type="text" id="txtrno" placeholder="enter rno" />
<br>
<br>
<input type="text" id="txtname" placeholder="enter name" />
<br>
<br>
<input type="text" id="txtbranch" placeholder="enter branch" />
<br>
<br>
<input type="text" id="txtfees" placeholder="enter fees" />
<br>
<br>
<input type="button" value="Insert" onclick="insertdata()">
<div id="res"></div>
</body>
</html>