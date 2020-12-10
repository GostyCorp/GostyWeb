<?php
	$Semaine = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
	$A = 0;
	while ($A <= 6) 
	{
		echo $Semaine[$A], "<br>";
		$A = $A + 1;
	}
	include ("return.php");
?>