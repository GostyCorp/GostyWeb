<div class="nine columns project">
	<?php
		$dirSave = "backup/";
		echo "<ul>";
		foreach (scandir($dirSave) as $getSave)
		{
			if($getSave != "." && $getSave !="..")
			{
				echo "<li><a href=", $dirSave.$getSave, ">", $getSave,"</a></li>";
			}
		}
		echo "</ul>";
	?>
</div>