

<?php
    session_start();
    $titre = "delete_profil";
		include("includes/database_connection.php");
	?>
	
	<?php
		include("includes/start.php");
		?>
		<?php
		if (isset($pseudo)) // Si on la variable est non vide, on considére qu'on est sur la page pour supprimer le profil
						{
						?>
	
	<body>
        <div id="bloc_page">
	<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    <fieldset>
        <legend>Supprimer mon profil</legend>
            <p>
                <label for="mdp_actuel">Tapez votre mot de passe</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="password" name="mdp_actuel" id="mdp_actuel" value=""/>
            </p>
			<p><input type="submit" name="valider" value="Supprimer mon profil VegATable" /></p>
			
						<?php
						}
						
			
			
			


		if (isset($_POST['mdp_actuel'])  && isset($pseudo) )
		{
			
			$mdp_actuel= $_POST['mdp_actuel'];
			


			$query = $db->prepare('SELECT user_password FROM user WHERE user_login= :login'); //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
			$query->execute(array('login' => $pseudo)); // Exécute la préparation
			$data = $query->fetch();

			if($data['user_password'] == $mdp_actuel)
			{
				$query= $db->prepare('DELETE from user  WHERE user_login= :login');
				$query->execute(array('login'=> $pseudo)); // Exécute la préparation
				echo "Votre compte a bien été supprimé!";
				
	session_unset ();
	session_destroy();

	
	$titre="Déconnexion";
	

	
	if ($id==0) erreur(ERR_IS_NOT_CO);
				echo 
				'<p>Cliquez <a href="./home.php">ici</a> pour retourner sur la page d\'accueil.</p>';
				
			}
			
			elseif($data['user_password'] != $mdp_actuel)
			{
				echo "Votre mot de passe est faux!";
			}
		}
				?>
				
				</div>
        
        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    </body>

</html>
