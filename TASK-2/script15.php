<?php

	$num1=10;
	$num2=40;
	$num3=30;
	
	if($num1>$num2)
	{
		$max=$num1;
	}
	else if($num2>$num3)
	{
		$max=$num2;
	}
	else
	{
		$max=$num3;
	}
	
	echo "Largest Number Is:".$max;
?>