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
		<!-- Formulaire -->
			<?php include("includes/inscription_form.php"); ?>
	    
		<!-- Traitement-->	  
			<?php include("includes/inscription_database.php"); ?>
	</body>		


	<!-- Footer-->
		<?php include("includes/footer.php"); ?>	
                  
</html>
