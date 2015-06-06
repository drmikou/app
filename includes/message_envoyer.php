<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- Formulaire -->
	<?php include("includes/message_envoyer_form.php"); ?>


<!-- Ajout dans la base -->
	<?php

		$error = 0;

		if (isset($_POST['destinataire']) && isset($_POST['contenu']))
		{
			
			$destination= $_POST['destinataire'];
			$contenu= $_POST['contenu'];

			$reponse= $db->query('SELECT user_login FROM user');

			while($data= $reponse->fetch())
			{

				if($data['user_login']== $destination)
				{
					$query=$db->prepare('INSERT INTO message (message_sender, message_destination, message_content) VALUES (:sender, :destination, :contenu)');
					$query->bindValue(':sender', $pseudo, PDO::PARAM_STR);
					$query->bindValue(':destination', $destination, PDO::PARAM_STR);
					$query->bindValue(':contenu', $contenu, PDO::PARAM_STR);
					$query->execute();
					echo "Votre message a bien été envoyé!";
					break;
				}
				else
				{
					$error = 1;
				}
		
			}

			if($error == 1 && !$destination == "")
			{
				echo "Le destinataire n'existe pas!";
			}

			if($destination == "")
			{
				echo "Vous avez oublié le destinataire!";
			}
		}
	?>