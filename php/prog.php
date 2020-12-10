<?php
	$nb = count(glob("php/prog*.php"));
	for($A = 1; $A <= $nb-1; $A++)
		{
			echo "<li>";
			echo "<a href='php/prog", $A, ".php'>php ", $A, "</a>";
			echo "</li>";
		}
?>