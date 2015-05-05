<!DOCTYPE html>
<html>

    <head>
    	<!-- Titre -->
    	<?php
			if (!empty($titre))							// Si le titre n'est pas vide
			{
				echo '<title> '.$titre.' </title>';		// On affiche le titre
			}
			else 										//Sinon, on écrit Veg A Table par défaut
			{
				echo '<title> Veg A Table </title>';
			}
		?>
		<!-- xxxxx -->

        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />

    </head>

    <!-- Variable de session -->
	<?php
		$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
		$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
		$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
	?>

	<!-- Header -->
		<?php include("includes/header.php"); ?>
