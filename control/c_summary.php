<?php
	echo '<div class="three columns">';
	if ($_SESSION['statut'] == 'User')
	{
		echo '<a class="button" href="Home">>Home</a>';
		echo '<a class="button" href="About">>À propos</a>';
		echo '<a class="button" href="Project">>Projet</a>';
		echo '<a class="button" href="logOff">>Déconnexion</a>';
	}
	else if ($_SESSION['statut'] == 'Dev' )
	{
		echo '<a class="button" href="Home">>Home</a>';
		echo '<a class="button" href="About">>À propos</a>';
		echo '<a class="button" href="Project">>Projet</a>';
		echo '<a class="button" href="Save">>Backup</a>';
		echo '<a class="button" href="logOff">>Déconnexion</a>';
	}
	else if ($_SESSION['statut'] == 'Admin' )
	{
		echo '<a class="button" href="Home">>Home</a>';
		echo '<a class="button" href="About">>À propos</a>';
		echo '<a class="button" href="Project">>Projet</a>';
		echo '<a class="button" href="Save">>Backup</a>';
		echo '<a class="button" href="Admin">>Admin</a>';
		echo '<a class="button" href="logOff">>Déconnexion</a>';
	}
	else
	{
		echo '<a class="button" href="logOff">>Connexion</a>';
		echo '<a class="button" href="About">>À propos</a>';
		echo '<a class="button" href="Project">>Projet</a>';
		echo '<a class="button" href="https://willow.loly.ovh" target="_blank">>WillowBook</a>';
	}
	echo '</div>';
?>
