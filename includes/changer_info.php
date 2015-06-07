<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- Formulaire -->
	<?php include("includes/changer_info_form.php"); ?>


<!-- Changement de mot de passe-->
	<?php


		if (isset($_POST['mdp_actuel']) && isset($_POST['mdp_new']) && isset($_POST['mdp_new_check']) && isset($pseudo) )
		{
			
			$mdp_actuel= $_POST['mdp_actuel'];
			$mdp_new= $_POST['mdp_new'];
			$mdp_new_check= $_POST['mdp_new_check'];


			$query = $db->prepare('SELECT user_password FROM user WHERE user_login= :login'); //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
			$query->execute(array('login' => $pseudo)); // Exécute la préparation
			$data = $query->fetch();

			if($data['user_password'] == $mdp_actuel && $mdp_new == $mdp_new_check)
			{
				$query= $db->prepare('UPDATE user SET user_password = :mdp WHERE user_login= :login');
				$query->execute(array('mdp'=> $mdp_new ,'login'=> $pseudo)); // Exécute la préparation
				echo "Votre mot de passe a bien été changé!";
			}
			elseif($data['user_password'] != $mdp_actuel)
			{
				echo "Votre mot de passe est faux!";
			}
			elseif ($mdp_new != $mdp_new_check)
			{
				echo "Votre nouveau mot de passe ne correspond pas!";
			}
		}

	?>