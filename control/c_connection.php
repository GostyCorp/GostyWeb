<?php 
	if(!isset($_GET['act']))
	{
		$_GET['act'] = 'login';
	}
	$act = $_GET['act'];
	switch($act)
	{
		case 'login':
		{
			include("view/v_connection.php");
			break;
		}
		case 'verify':
		{
			$login = $_REQUEST['login'];
			$pwd = $_REQUEST['pwd'];
			$guest = $bdd->getUsers($login, $pwd);
			if(!isset($guest) || $guest != $login)
			{
				include("view/v_connection.php");
				echo "<h3>Erreur Login</h3>";
			}
			else
			{
				$_SESSION['login'] = $login;
				include("view/v_home.php");
			}
			break;
		}
		case 'disco':
		{
			$_SESSION['login'] = null;
			include("view/v_connection.php");
			break;
		}
		default :
		{
			include("view/v_connection.php");
			break;
		}
	}
?>