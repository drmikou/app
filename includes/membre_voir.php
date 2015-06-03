<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- Formulaire -->
	<?php include("includes/membre_voir_form.php"); ?>


<!-- Ajout dans la base -->

	<div class= "bloc_membre_voir">
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
			Mail: <br>
		</div>
	<?php
		if (isset($_POST['membre_check']))
		{
			$reponse= $db->query('SELECT * FROM user');


			while($data= $reponse->fetch())
			{
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

	<?php			
			} 
				
		}else{
			echo "pas check";
		}

	?>
</div>
	</fieldset>
</form>