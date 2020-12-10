<?php
	$intB = 0;
	for ($intA = 0; $intA <=100; $intA = $intA + 5)
	{ 
		echo "5 x ", $intB, " = ", $intA, "<br>";
		$intB = $intB + 1;
	}
	include ("return.php");
?>