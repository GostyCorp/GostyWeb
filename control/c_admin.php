<?php
	include("control/c_summary.php");
	if($_SESSION['statut'] == 'Admin')
	{
		if(!isset($_GET['act']))
		{
			$_GET['act'] = 'admin';
		}
		$act = $_GET['act'];
        $users = $bdd->getUsers();
		switch($act)
		{
			case 'changeStatus':
            {
                foreach($users as $user)
                {
                    if(isset($_POST[$user['name']]) && $_POST[$user['name']] == "checked")
                    {
                        if($_POST['role'] != "")
						{

							$bdd->alterStatut($user['ID'], $_POST['role']);
						}
						if($_POST['vip'] == "VIP")
						{
							$bdd->alterVIP($user['ID'], 1);
						}
						else if($_POST['vip'] == "NoVIP")
						{
							$bdd->alterVIP($user['ID'], 0);
						}
                    }
                }
                header('Location: Admin');
				break;
            }
			default:
			{
				include("view/v_admin.php");
				break;
			}
		}
	}
?>
