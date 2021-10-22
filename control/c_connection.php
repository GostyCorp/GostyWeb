<?php
	if(!isset($_GET['act']))
	{
		$_GET['act'] = 'login';
	}
	if(isset($_SESSION['login']) && isset($_SESSION['statut']))
	{
		header('Location: Home');
	}
	$act = $_GET['act'];
	include_once("control/c_summary.php");
	switch($act)
	{
		case 'login':
		{
			include("view/v_connection.php");
			break;
		}
		case 'register':
		{
			include("view/v_register.php");
			break;
		}
		case 'verifyLogin':
		{
			include_once("view/v_connection.php");
			$login = $_REQUEST['login'];
			$pwd = hash("sha256", $_REQUEST['pwd']);
			$guest = $bdd->getUser($login, $pwd);
			if(!isset($guest) || $guest['name'] != $login)
			{
				echo "<h5>Erreur Login</h5>";
			}
			else if ($guest['pwd'] != $pwd)
			{
				echo "<h5>Erreur Password</h5>";
			}
			else if ($guest['statut'] == 'Guest')
			{
				echo "<h5>No Permission</h5>";
				echo "<h5>Contact Admins/Moderators</h5>";
			}
			else
			{
				$_SESSION['id'] = $guest['ID'];
				$_SESSION['login'] = $guest['name'];
				$_SESSION['statut'] = $guest['statut'];
				$_SESSION['vip'] = $guest['vip'];
				header('Location: Home');
			}
			break;
		}
		case 'verifyRegister':
		{
			include_once("view/v_register.php");
			$login = $_REQUEST['login'];
			$pwd = $_REQUEST['pwd'];
			$vfpwd = $_REQUEST['vfpwd'];
			$email = $_REQUEST['email'];
			$guest = $bdd->getUsername($login);
			if($guest == $login)
			{
				echo "<h5>Username already exist</h5>";
			}
			else if ($pwd != $vfpwd)
			{
				echo "<h5>The password are not equal</h5>";
			}
			else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				echo "<h5>The email are not good</h5>";
			}
			else
			{
				$pwd = hash("sha256", $_REQUEST['pwd']);
				$bdd->registerUser($login, $pwd, $email);
				$bdd->registerStatut($login);
				header('Location: Login');
			}
			break;
		}
		case 'logOff':
		{
			session_unset();
			header('Location: Login');
		}
		default :
		{
			header('Location: Login');
			break;
		}
	}
?>