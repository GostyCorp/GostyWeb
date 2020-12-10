<?php
	$A = rand(0, 20);
	if ($A < 10)
	{
		echo $A, " => Refuser";
	}
	elseif ($A >= 10 && $A < 12)
	{
		echo $A, " => Assez Bien";
	}
	elseif ($A >= 12 && $A < 15) {
		echo $A, " => Bien";
	}
	elseif ($A >= 15 && $A < 20) {
		echo $A, " => Très Bien";
	}
	include ("return.php");
?>