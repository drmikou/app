<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- Formulaire -->
	<?php include("includes/recette_ajouter_form.php"); ?>


<!-- Ajout dans la base -->
	<?php
		if (isset($_POST['titre']) && isset($_POST['contenu']))
		{
			$titre= $_POST['titre'];
			$contenu= $_POST['contenu'];
		

		$query=$db->prepare('INSERT INTO recette (titre, contenu) VALUES (:titre, :contenu)');
		$query->bindValue(':titre', $titre, PDO::PARAM_STR);
		$query->bindValue(':contenu', $contenu, PDO::PARAM_STR);
		$query->execute();
		}
	?>
