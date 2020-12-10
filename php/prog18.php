<?php
	$A = rand(0, 20);
	if ($A > 10)
	{
		echo $A, " => Admis";
	}
	else 
	{
		echo $A, " => Refuser";
	}
	include ("return.php");
?>