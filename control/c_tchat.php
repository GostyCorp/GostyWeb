<?php
    include_once("control/c_summary.php");
	if(!isset($_GET['act']))
	{
		$_GET['act'] = '#';
	}
	$act = $_GET['act'];
	switch($act)
	{
		case "newSend":
		{
			$message = nl2br(htmlspecialchars($_REQUEST['text']));
			$date = date('Ymd H:i:s');
			$bdd->newMessage($_SESSION['id'], $message, $date);
			header('Location: Tchat');
			break;
		}
		default:
		{
			include("view/v_tchat.html");
			break;
		}
	}