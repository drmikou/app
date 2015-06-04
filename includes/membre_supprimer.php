<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- Formulaire -->
	<?php include("includes/membre_supprimer_form.php"); ?>


<!-- Ajout dans la base -->
	<?php

		if (isset($_POST['membre_supp']))
		{
			$membre_supp= $_POST['membre_supp'];

			$req = $db->prepare('DELETE FROM user WHERE user_login = :membre_supp');
			$req->execute(array(
			'membre_supp' => $membre_supp

			));

		}
	?>