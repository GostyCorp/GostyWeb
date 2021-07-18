<?php
	if(isset($_SESSION['statut']) && isset($_SESSION['login']))
	{
		$statut = $_SESSION['statut'];
	}
	else
	{
		$statut = null;
	}

	if ($statut == 'Guest')
	{
		include("view/v_summaryGuest.php");
	}
	else if ($statut == 'User')
	{
		include("view/v_summaryUser.php");
	}
	else if ($statut == 'Dev' )
	{
		include("view/v_summaryAdmin.php");
	}
	else if ($statut == 'Admin' )
	{
		include("view/v_summaryAdmin.php");
	}
	else
	{
		echo '<div class="three columns">';
		echo '<a class="button" href="https://willow.loly.ovh" target="_blank">>WillowBook</a>';
		echo '</div>';
	}
?>
