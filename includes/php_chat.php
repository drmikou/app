<?php
include("includes/database_connection.php");
    if(isset($user))
    {
        $pseudo = $user;
    }
	if(isset($_POST['message']) AND !empty($_POST['message']))
		{
			$message = htmlspecialchars($_POST['message']);
			$insertmsg = $db->prepare('INSERT INTO chat(chat_pseudo, chat_message,chat_date) VALUES(?, ?,NOW())');
			$insertmsg -> execute(array($pseudo, $message));
		}
?>
