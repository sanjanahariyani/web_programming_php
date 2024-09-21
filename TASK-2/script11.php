<html>
<head>
</head>
<body>
<form method="POST">
Number:<input type="number" name="number">
<br>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$number=$_POST['number'];
	if($number%2==0)
	{
		echo "even";
	}
	else
	{
		echo "odd";
	}
}
?>