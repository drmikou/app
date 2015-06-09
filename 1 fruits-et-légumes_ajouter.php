<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- Formulaire -->
	<?php include("includes/fruits_legumes_ajouter_form.php"); ?>


<!-- Ajout dans la base -->
	<?php
		if (isset($_POST['fruit_legumes_nom']) && isset($_POST['fruit_legumes_description']))
		{
			$fruit_legumes_nom= $_POST['fruit_legumes_nom'];
			$fruit_legumes_description= $_POST['fruit_legumes_description'];
		

		$query=$db->prepare('INSERT INTO fruit_legumes (fruit_legumes_nom, fruit_legumes_description) VALUES (:fruit_legumes_nom, :fruit_legumes_description)');
		$query->bindValue(':fruit_legumes_nom', $fruit_legumes_nom, PDO::PARAM_STR);
		$query->bindValue(':fruit_legumes_description', $fruit_legumes_description, PDO::PARAM_STR);
		$query->execute();
		}
	?>
