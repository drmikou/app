<!-- CONNEXION A LA DB -->

	<?php
		include("includes/database_connection.php");?>


<!-- Recherche des informations de profil -->

<?php
	$query = $db->prepare('SELECT user_name, user_surname, user_mail, user_birth, user_adress, user_region, user_phone FROM user WHERE user_id= :id');
	$query->bindValue('id',$id);
	$query->execute(); // Exécute la préparation
	$data = $query->fetch();
?>