<?php
	session_start();
	session_destroy();
	$titre="Déconnexion";
	include("includes/start.php");
?>

	<body>
		<article>
			<?php
				if ($id==0) erreur(ERR_IS_NOT_CO);
				echo 'Vous êtes déconnecté. <br />';
				echo 'Cliquez <a href="'.htmlspecialchars($_SERVER['HTTP_REFERER']).'">ici</a> pour revenir à la page précédente.<br />';
				header('Location: home.php');  
			?>
		</article>

		<!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    </body>

</html>


