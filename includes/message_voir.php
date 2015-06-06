<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

	<!-- Affichage tableau -->
	<div class= "titre">

		<div class= "de">
			De:
		</div>

		<div class= "date">
			Date:
		</div>

		<div class= "contenu">
			Contenu:
		</div>

	</div>

	<!-- Traitement -->
	<?php

			$query= $db->prepare('SELECT * FROM message WHERE message_destination= :login');		//PDO::prepare — Prépare une requête à l'exécution et retourne un objet
			$query->bindValue('login',$pseudo, PDO::PARAM_STR);				//PDOStatement::bindValue — Associe une valeur à un paramètre
			$query->execute(); // Exécute la préparation

			while($data= $query->fetch())
			{
	?>
				<br>
				<div class= "data">
					<div class= "de2">
						<?php echo $data['message_sender'] ?>
					</div>

					<div class= "date2">
						<?php echo $data['message_date'] ?>
					</div>

					<div class= "contenu2">
						<?php echo $data['message_content'] ?>
					</div> 
				</div>
				<br>

	<?php			
			}
	?>


</div>
