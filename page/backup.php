<div class="login">
	<p>Password : </p>
	<input class="password" type='password' id='pass' autofocus=true></input>
	<input class="submit" type='submit' onClick=login()></input>
</div>
<div class="bk">
	<?php
		$dirSave = "backup/";
		echo "<ul>";
		foreach (scandir($dirSave) as $getSave)
		{
				if($getSave != "." && $getSave !="..")
				{
					echo "<li><a id='backup' href=", $dirSave.$getSave, " onclick=login()>", $getSave,"</a></li>";
				}
			}
		echo "</ul>";
	?>
</div>