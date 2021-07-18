<?php
    if($_SESSION['statut'] == 'VIP')
    {
        $logo = '<img style="border: 0.1em solid rgb(255, 200, 0);" class="logo" src="img/NewCatVIP.jpg">';
    }
    else
    {
        $logo = '<img style="border: 0.1em solid rgb(0, 255, 60);" class="logo" src="img/NewCat.jpg">';
    }
    include('view/v_header.php');
?>