<?php 
	if(!isset($_GET['act']))
	{
		$_GET['act'] = '#';
	}
	$act = $_GET['act'];
	switch($act)
	{
		default:
		{
			include("view/v_project.php");
			break;
		}
	}
?>
