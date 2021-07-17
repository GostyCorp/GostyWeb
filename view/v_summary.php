<div class="three columns">
	<?php	
	if(isset($_SESSION['login']))
	{
		echo '<a class="button" href="index.php?req=home&act=#">>Home</a>';
		echo '<a class="button" href="index.php?req=about&act=#">>À propos</a>';
		echo '<a class="button" href="index.php?req=project&act=#">>Projet</a>';
		if($_SESSION['statut'] == 'Admin' || $_SESSION['statut'] == 'Developer')
		{
			echo '<a class="button" href="index.php?req=backup&act=#">>Backup</a>';
		}
		echo '<a class="button" href="index.php?req=login&act=disco">>Déconnexion</a>';
		echo '<hr>';
	}
	?>
	<a class="button" href="https://willow.loly.ovh">>WillowBook</a>
</div>