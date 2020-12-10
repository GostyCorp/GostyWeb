<?php
	$legumes = array("Carotte", "Poivron", "Aubergine", "Chou");
	$i = 0;
	while ($i < count($legumes)) 
	{
		echo "list ", $i, "  : ", $legumes[$i], "</br>";
		$i++;
	}
	foreach ($legumes as $unlegumes)
	{
		echo $unlegumes, "</br>";
	}
	for ($i = 0; $i < count($legumes); $i++) 
	{ 
		echo $legumes[$i], "<br>";
	}
	include ("return.php");
?>