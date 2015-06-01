<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- Formulaire -->
	<?php include("includes/actualite_ajouter_form.php"); ?>


<!-- Ajout dans la base -->
	<?php
		if (isset($_POST['titre']))
		{
			$titre= $_POST['titre'];
			$contenu= $_POST['contenu'];
		}

		$query=$db->prepare('INSERT INTO news (news_title, news_content) VALUES (:titre, :contenu)');
		$query->bindValue(':titre', $titre, PDO::PARAM_STR);
		$query->bindValue(':contenu', $contenu, PDO::PARAM_STR);
		$query->execute();
	?>