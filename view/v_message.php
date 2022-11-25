<?php
    require_once "../model/bdd.php";
    $bdd = Bdd::getBdd();
    $messages = $bdd->getMessages();
    if($messages != null)
    {
        foreach($messages as $message)
        {   
            if($message['ID'] == $_REQUEST['id'])
            {
                echo "<div class='right'>";
			}
            else
            {
                echo "<div class='left'>";
			}
			echo "<div>";
			echo $message['name'], " - ", date('D d H:i:s', strtotime($message['date']));
                //echo "<hr>";
                echo "<div>";
                    echo $message['message'];
                echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }