<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- Formulaire -->
	<?php include("includes/membre_voir_form.php"); ?>


<!-- Ajout dans la base -->
	<?php
		if (isset($_POST['membre_check']))
		{
			$reponse= $db->query('SELECT * FROM user');

			while($data= $reponse->fetch())
			{
				echo 'Login:  '. $data['user_login'] . 'Nom: '. $data['user_name'] . '<br />';
			} 
				
		}else{
			echo "pas check";
		}
	?>