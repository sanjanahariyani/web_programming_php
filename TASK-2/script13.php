<html>
<head>
</head>
<body>
<form method="POST">
Temp:<input type="temp" name="tm">
<br>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$temp=$_POST['tm'];
	echo "temp->".($temp*9/5)+32;x
}
?>