<?php
	include("control/c_summary.php");
	if($_SESSION['statut'] == 'Admin' || $_SESSION['statut'] == 'Developer')
	{
		if(!isset($_GET['act']))
		{
			$_GET['act'] = '#';
		}
		$act = $_GET['act'];
		switch($act)
		{
			default:
			{
				include("view/v_backup.php");
				break;
			}
		}
	}
