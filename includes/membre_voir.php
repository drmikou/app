<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- Formulaire -->
	<div id= membre_voir>
		<?php include("includes/membre_voir_form.php"); ?>
	</div>

<!-- Affichage tableau -->

	<div class= "bloc_membre_voir">
		<div class= "bloc_titre">
			<div id= "bloc_login">
				Login:
			</div>

			<div id= "bloc_name">
				Nom:
			</div>

			<div id= "bloc_surname">
				Prénom:
			</div>

			<div id= "bloc_mail">
				Mail: 
			</div>

			<div id= "bloc_birth">
				Naissance: 
			</div>

			<div id= "bloc_region">
				Region: 
			</div>

			<div id= "bloc_phone">
				Téléphone:
			</div>

			<div id= "bloc_rate">
				Note: <br>
			</div>
		</div>

	<!-- Traitement -->
	<?php
		if (isset($_POST['membre_check']))
		{
			$reponse= $db->query('SELECT * FROM user');


			while($data= $reponse->fetch())
			{
	?>
			<div class= "ligne_voir">
				<div class= "affichage_login">
					<?php echo $data['user_login'] ?>
				</div>

				<div class= "affichage_name">
					<?php echo $data['user_name'] ?>
				</div> 

				<div class= "affichage_surname">
					<?php echo $data['user_surname'] ?> 
				</div>

				<div class= "affichage_mail">
					<?php echo $data['user_mail'] ?> 
				</div>

				<div class= "affichage_birth">
					<?php echo $data['user_birth'] ?> 
				</div>

				<div class= "affichage_region">
					<?php echo $data['user_region'] ?> 
				</div>

				<div class= "affichage_phone">
					<?php echo $data['user_phone'] ?> 
				</div>

				<div class= "affichage_rate">
					<?php echo $data['user_rate'] ?> 
				</div>
			</div>
				<br>

	<?php			
			}
		}
		elseif (isset($_POST['membre_search']))
		{
			$membre = $_POST['membre_search'];

			$query= $db->prepare('SELECT * FROM user WHERE user_login= :login');		//PDO::prepare — Prépare une requête à l'exécution et retourne un objet
			$query->bindValue('login',$membre, PDO::PARAM_STR);				//PDOStatement::bindValue — Associe une valeur à un paramètre
			$query->execute(); // Exécute la préparation
			$data = $query->fetch();

		?>

				<div class= "affichage_login">
					<?php echo $data['user_login'] ?>
				</div>

				<div class= "affichage_name">
					<?php echo $data['user_name'] ?>
				</div> 

				<div class= "affichage_surname">
					<?php echo $data['user_surname'] ?> 
				</div>

				<div class= "affichage_mail">
					<?php echo $data['user_mail'] ?> 
				</div>

				<div class= "affichage_birth">
					<?php echo $data['user_birth'] ?> 
				</div>

				<div class= "affichage_region">
					<?php echo $data['user_region'] ?> 
				</div>

				<div class= "affichage_phone">
					<?php echo $data['user_phone'] ?> 
				</div>

				<div class= "affichage_rate">
					<?php echo $data['user_rate'] ?> 
				</div>

				<br>
	<?php	
				if($data == null)
				{
					echo "Ce pseudo n'existe pas";
				}		
		}
	?>

	</div>
	</fieldset>
</form>