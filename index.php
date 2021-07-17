<?php
	include("view/v_header.php");
	require_once("model/bdd.php");
	session_start();
	$bdd = Bdd::getBdd();
	if (!isset($_GET['req']) || !isset($_SESSION['login']) || !isset($_SESSION['statut']))
	{
		$_GET['req'] = 'login';
	}
	$req = $_GET['req'];
	switch($req)
	{
		case 'login':
		{
			include("control/c_connection.php");
			break;
		}
		case 'home':
		{
			include("control/c_home.php");
			break;
		}
		case 'about':
		{
			include("control/c_about.php");
			break;
		}
		case 'project':
		{
			include("control/c_project.php");
			break;
		}
		case 'backup':
		{
			include("control/c_backup.php");
			break;
		}
	}
	include("view/v_footer.php");
?>