<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

	<!-- Affichage option -->
	<div id="option">
		<?php
			include("includes/message_voir_form.php");
		?>
	</div>

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

			$query= $db->prepare('SELECT * FROM message WHERE message_destination= :login ORDER BY message_id DESC');		//PDO::prepare — Prépare une requête à l'exécution et retourne un objet
			$query->bindValue('login',$pseudo, PDO::PARAM_STR);				//PDOStatement::bindValue — Associe une valeur à un paramètre
			$query->execute(); // Exécute la préparation

			while($data= $query->fetch())
			{
	?>
				<?php			
					if($data['message_read'] == 1)
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
					else
					{
				?>		
						<br>
						<div class= "data_red">
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
				

	<?php			
			}
	?>

	<!-- Marqué comme lu -->
		<?php
			if (isset($_POST['message_check']))
			{
				$query= $db->prepare('UPDATE message SET message_read = 1 WHERE message_destination= :login');
				$query->execute(array('login'=> $pseudo)); // Exécute la préparation
			}
		?>


</div>
