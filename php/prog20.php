<?php
	$A = rand(0, 3);
	$B = array("Nord", "Est", "Sud", "Ouest");
	echo $B[$A], " <= ", $A+1;
	include ("return.php");
?>