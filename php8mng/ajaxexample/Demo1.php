<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
     function showdata(a)
     {
         xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange=function()
         {
          document.getElementById("res").innerHTML = xmlhttp.responseText;
         }
         xmlhttp.open("POST","search.php?q="+a,true);
         xmlhttp.send();

     }

	</script>
</head>
<body>

<input type="text" id="txtuser" onkeyup="showdata(this.value)" />

<div id="res"></div>
</body>
</html>