<?php
	if (empty($_POST['pseudo'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
	{
?>

		<form method="post" action="register.php" enctype="multipart/form-data">

			<h4>Idedede</h4>
				<label for="name">* Nom :</label>  <input name="name" type="text" id="name" /><br/>
				<label for="surname">* Prénom :</label>  <input name="surname" type="text" id="surname" /><br/>
				<label for="birth">* Date de naissance:</label>  <input name="birth" type="date" id="birth" /><br/>
			

			<fieldset><legend>Identifiants</legend>
				<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" /> (le pseudo doit contenir entre 3 et 15 caractères)<br/>
				<label for="password">* Mot de Passe : </label><input type="password" name="password" id="password" /><br/>
				<label for="confirm">* Confirmer le mot de passe : </label><input type="password" name="confirm" id="confirm"/>	
			</fieldset>
									
			<fieldset><legend>Adresse</legend>
				<label for="street">*Rue : </label><input type="text" name="street" id="street" />
				<label for="sup">Complément d'adresse : </label><input type="text" name="sup" id="sup" /> <br/>
				<label for="town">* Ville : </label><input type="text" name="town" id="town" />
				<label for="Département">* Département : </label>

				<select name="Région">
                	<?php
                        $reponse = $db->query('SELECT * FROM departement'); // requête sql "selectionne tout dans la table region"
                                                                                        
                            while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
                            {
                                $print='<option accesskey=""value="'.$donnees['departement_nom'].'">'.$donnees['departement_nom'].'</option>';
                            	echo $print;
                        	}

                        $reponse->closeCursor(); // Termine le traitement de la requête
                	?>
            	</select>             
			</fieldset>
								
			<fieldset><legend>Contacts</legend>
				<label for="email">* Votre adresse Mail : </label><input type="email" name="email" id="email" /><br/>
				<label for="phone">Votre numéro de téléphone: </label><input type="tel" name="phone" id="phone" /><br/>
			</fieldset>

								<p>Les champs précédés d un * sont obligatoires</p>
			<p><input type="submit" value="S'inscrire" /></p>
		</form>
<?php
	}
?>