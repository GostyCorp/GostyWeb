<?php
	include("control/c_summary.php");
	if($_SESSION['statut'] == 'Admin')
	{
		if(!isset($_GET['act']))
		{
			$_GET['act'] = 'guests';
		}
		$act = $_GET['act'];
        $guests = $bdd->getGuests();
		switch($act)
		{
            case 'guests':
            {
                include("view/v_admin.php");
				break;
            }
            case 'verifyGuests':
            {
                foreach($guests as $guest)
                {
                    if(isset($_POST[$guest['name']]) && $_POST[$guest['name']] == "checked")
                    {
                        $bdd->alterGuest($guest['ID'], $_POST['role']);
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
