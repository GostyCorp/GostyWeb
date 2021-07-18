<?php
	if ($_SESSION['statut'] == 'Guest')
	{
		include("view/v_summaryGuest.php");
	}
	else if ($_SESSION['statut'] == 'User')
	{
		include("view/v_summaryUser.php");
	}
	else if ($_SESSION['statut'] == 'Dev' )
	{
		include("view/v_summaryAdmin.php");
	}
	else if ($_SESSION['statut'] == 'Admin' )
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
