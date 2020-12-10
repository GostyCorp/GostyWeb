<?php
	$A = 0;
	while ($A <= 10)
	{
		for ($B = 0; $B <= 10; $B = $B + 1)
		{
			$C = $A * $B;
			echo $A, " x ", $B, " = ", $C, "<br>";
		}
		echo "<br>";
		$A = $A + 1;
	}
	include ("return.php");
?>