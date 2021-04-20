<?php
	$dirSave = "backup/";
	foreach (scandir($dirSave) as $getSave)
	{
		echo "<ul>";
			if($getSave != "." && $getSave !="..")
			{
				echo "<li><a href=", $dirSave.$getSave,">", $getSave,"</a></li>";
			}
		echo "</ul>";
	}
?>