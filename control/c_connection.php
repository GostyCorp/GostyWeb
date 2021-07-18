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
			session_unset();
			include("control/c_summary.php");
			include("view/v_connection.php");
			break;
		}
		case 'register':
		{
			session_unset();
			include("control/c_summary.php");
			include("view/v_register.php");
			break;
		}
		case 'verifyLogin':
		{
			$login = $_REQUEST['login'];
			$pwd = $_REQUEST['pwd'];
			$guest = $bdd->getUsers($login, $pwd);
			if(!isset($guest) || $guest['name'] != $login)
			{
				include("control/c_summary.php");
				include("view/v_connection.php");
				echo "<h5>Erreur Login</h5>";
			}
			else if ($guest['pwd'] != $pwd)
			{
				include("control/c_summary.php");
				include("view/v_connection.php");
				echo "<h5>Erreur Password</h5>";
			}
			else if ($guest['statut'] == 'Guest')
			{
				include("control/c_summary.php");
				include("view/v_connection.php");
				echo "<h5>No Permission</h5>";
				echo "<h5>Contact Admins/Moderators</h5>";
			}
			else
			{
				$_SESSION['login'] = $guest['name'];
				$_SESSION['statut'] = $guest['statut'];
				header('Location: Home');
			}
			break;
		}
		case 'verifyRegister':
		{
			$login = $_REQUEST['login'];
			$pwd = $_REQUEST['pwd'];
			$vfpwd = $_REQUEST['vfpwd'];
			$email = $_REQUEST['email'];
			$guest = $bdd->getUsername($login);
			if($guest == $login)
			{
				include("control/c_summary.php");
				include("view/v_register.php");
				echo "<h5>Username already exist</h5>";
			}
			else if ($pwd != $vfpwd)
			{
				include("control/c_summary.php");
				include("view/v_register.php");
				echo "<h5>The password are not equal</h5>";
			}
			else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				include("control/c_summary.php");
				include("view/v_register.php");
				echo "<h5>The email are not good</h5>";
			}
			else
			{
				$bdd->registerUsers($login, $pwd, $email);
				$bdd->registerStatus($login);
				header('Location: Login');
			}
			break;
		}
		default :
		{
			header('Location: Login');
			break;
		}
	}
?>