<?php
    session_start();
    $titre = "Inscription";
    include("includes/start.php");
    if ($id!=0) erreur(ERR_IS_CO);
?>

<!-- CONNEXION A LA DB -->
<?php
	include("includes/database_connection.php");
	?>

    <body>
		<div id="bloc_page">    
			<!-- Corps de l'inscription'-->	            
			<section>
				<article>
					<h1>Inscription</h1>

					<!-- FORMULAIRE-->	  
					<?php
						if (empty($_POST['pseudo'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
						{
					?>

							<form method="post" action="register.php" enctype="multipart/form-data">

								<fieldset><legend>Identité </legend>
									<label for="name">* Nom :</label>  <input name="name" type="text" id="name" /><br/>
									<label for="surname">* Prénom :</label>  <input name="surname" type="text" id="surname" /><br/>
									<label for="birth">* Date de naissance:</label>  <input name="birth" type="date" id="birth" /><br/>
								</fieldset>

								<fieldset><legend>Identifiants</legend>
									<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" /> (le pseudo doit contenir entre 3 et 15 caractères)<br/>
									<label for="password">* Mot de Passe : </label><input type="password" name="password" id="password" /><br/>
									<label for="confirm">* Confirmer le mot de passe : </label><input type="password" name="confirm" id="confirm"/>
								</fieldset>
									
								<fieldset><legend>Adresse</legend>
									<label for="street">Rue : </label><input type="text" name="street" id="street" />
									<label for="sup">Complément d'adresse : </label><input type="text" name="sup" id="sup" /> <br/>
									<label for="town">* Ville : </label><input type="text" name="town" id="town" />
								</fieldset>
								
								<fieldset><legend>Contacts</legend>
									<label for="email">* Votre adresse Mail : </label><input type="text" name="email" id="email" /><br/>
									<label for="phone">* Votre numéro de téléphone: </label><input type="text" name="phone" id="phone" /><br/>
								</fieldset>


								<!--<fieldset><legend>Profil sur le forum</legend>
									<<label for="avatar">Choisissez votre avatar :</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko<br />
									<label for="signature">Signature :</label><textarea cols="40" rows="4" name="signature" id="signature">La signature est limitée à 200 caractères</textarea>
								</fieldset>-->

								<p>Les champs précédés d un * sont obligatoires</p>
								<p><input type="submit" value="S'inscrire" /></p>
							</form>

					<!-- TRAITEMENT-->	  
					<?php
						}
						else 
						{	// Déclaration des variables 
						    $pseudo_erreur1 = NULL;
						    $pseudo_erreur2 = NULL;
						    $mdp_erreur = NULL;
						    $email_erreur1 = NULL;
						}
					?>	
<!--
					<?php // Récupération des variables
						if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['birth'])  )
						{
						    $i = 0;
						    $temps = time();
						    $name = $_POST['name'];
						    $surname = $_POST['surname'];
						    $birth = $_POST['birth'];
						    $pseudo = $_POST['pseudo'];
						    $password = $_POST['password'];
						    $confirm = $_POST['confirm'];
						    $street = $_POST['street'];
						    $sup = $_POST['sup'];
						    $town = $_POST['town'];
						    $email = $_POST['email'];
						    $phone = $_POST['phone'];
						}

					    // Vérification du pseudo
					    $query = $db->prepare('SELECT COUNT(*) AS nbr FROM forum_membres WHERE membre_pseudo =:pseudo');
					    $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
					    $query->execute();
					    $pseudo_free=($query->fetchColumn()==0)?1:0;
					    $query->CloseCursor();
					?>
-->
				</article>
			</section>
		</div>

					
		<!-- Footer-->
		<?php include("includes/footer.php"); ?>	
		
    </body>
</html>
