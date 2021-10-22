<?php
	date_default_timezone_set('Europe/Paris');
	require_once "model/bdd.php";
	session_start();
	$bdd = Bdd::getBdd();
	if ((!isset($_GET['req']) || !isset($_SESSION['id'])) && $_GET['req'] != 'project' &&  $_GET['req'] != 'about')
	{
		$_GET['req'] = 'login';
		$_SESSION['id'] = null;
		$_SESSION['login'] = "Guest";
		$_SESSION['statut'] = null;
		$_SESSION['vip'] = null;
	}
	$_COOKIE['toto'] = "fuck";
	$req = $_GET['req'];
	require_once "control/c_header.php";
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
		case 'tchat':
		{
			include("control/c_tchat.php");
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
		case 'admin':
		{
			include("control/c_admin.php");
			break;
		}
	}
	require_once "view/v_footer.php";
?>