<?php
	require_once("model/bdd.php");
	session_start();
	$bdd = Bdd::getBdd();
	if ((!isset($_GET['req']) || !isset($_SESSION['login']) || !isset($_SESSION['statut'])) && $_GET['req'] != 'project' &&  $_GET['req'] != 'about')
	{
		$_GET['req'] = 'login';
		$_SESSION['login'] = null;
		$_SESSION['statut'] = null;
		$_SESSION['vip'] = null;
	}
	$req = $_GET['req'];
	include("control/c_header.php");
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
		case 'admin':
		{
			include("control/c_admin.php");
			break;
		}
	}
	include("view/v_footer.php");
?>