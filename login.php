<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- CONSTANTES ET VARIABLES -->
<?php
	$message = '';      // Message à afficher à l'utilisateur
?>


<!-- FORMULAIRE -->
		<!-- htmlspecialchars — Convertit les caractères spéciaux en entités HTML -->
		<!-- "'" (guillemet simple) devient &#039; uniquement lorsque ENT_QUOTES est utilisée. -->
		<!-- $_SERVER — Variables de serveur et d'exécution -->
		<!-- REQUEST_URI' - L'URI qui a été fourni pour accéder à cette page. Par exemple : '/index.html'. -->
<?php
	echo '<h1>Connexion</h1>';
	if ($id!=0) erreur(ERR_IS_CO);
?>

<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
	<fieldset>	<!-- Used to group related elements in a form. Draws a box around the related elements. -->
		<legend>Identifiant</legend> <!-- defines a caption for the <fieldset> element. -->
			<!-- Champ Login -->
			<p>
				<label for="login">Login :</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
				<input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])){echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>"/>
			</p>

			<!-- Champ Password -->
			<p>
				<label for="password">Mot de passe :</label> 
            	<input type="password" name="password" id="password" value="" />
			</p>
			<p>
            	<input type="submit" style="text-decoration:none" name="submit" value="Identification" />
            </p>
    </fieldset>
</form>

<!-- VERIFICATION -->
	<?php
		if(!empty($_POST))	// Si le tableau $_POST existe alors le formulaire a été envoyé
		{
			if(empty($_POST['login']))										// Le LOGIN est-il rempli ?
			{
				$message = 'Veuillez indiquer votre login svp !';			// Non
			}
			elseif(empty($_POST['password']))								// Le MOT DE PASSE est-il rempli?
			{
				$message = 'Veuillez indiquer votre mot de passe svp !';	// Non
			}
			else
			{	
				$query = $db->prepare('SELECT user_id, user_login, user_password FROM user WHERE user_login= :login'); //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
				$query->bindValue('login',$_POST['login'], PDO::PARAM_STR); //PDOStatement::bindValue — Associe une valeur à un paramètre
				$query->execute(array('login' => $_POST['login'])); // Exécute la préparation
				$data = $query->fetch();

				if($_POST['password'] == $data['user_password'])			// Le MOT DE PASSE est-il correct? / md5: permet de chiffrer une chaîne de caractère en un entier hexadécimal de 32 caractères.
				{
					$message = 'Bienvenue '. $data['user_login'] .' ! Vous êtes maintenant connecté sur notre communauté!';			// Identification réussit
					$_SESSION['pseudo'] = $data['user_login'];
	    			$_SESSION['id'] = $data['user_id'];
				}
				else
				{
					$message = 'Un erreur est survenue! Veuillez réessayer svp.';				// Non
				}
			}
		}
	?>

<!-- REPONSE -->
<?php if(!empty($message)) : ?>
<p><?php echo $message; ?></p>
<?php endif; ?>