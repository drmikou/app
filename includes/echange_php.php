<?php
include("includes/database_connection.php");


    if(isset($pseudo))
    {
        $pseudo_echange = $pseudo;
    }
	if(isset($_POST['produit_1']) AND !empty($_POST['produit_1']) AND isset($_POST['quantite_produit_1']) AND !empty($_POST['quantite_produit_1']) AND 			isset($_POST['produit_2']) AND !empty($_POST['produit_2']) AND isset($_POST['quantite_produit_2']) AND !empty($_POST['quantite_produit_2']))
		{
			$produit_1 = $_POST['produit_1'];
			$quantite_produit_1 = $_POST['quantite_produit_1'];
			$produit_2 = $_POST['produit_2'];
			$quantite_produit_2 = $_POST['quantite_produit_2'];
			$commentaire = htmlspecialchars($_POST['commentaire']);

			$insertechange = $db->prepare('INSERT INTO echange(echange_pseudo, echange_prod1, echange_prod2, echange_qte_prod1, echange_qte_prod2, 									echange_commentaire, echange_date) VALUES(?, ?, ?, ?, ?, ?, NOW())');
			$insertechange -> execute(array($pseudo_echange, $produit_1, $produit_2, $quantite_produit_1, $quantite_produit_2, $commentaire));

			echo "<script type='text/javascript'>alert('Votre demande est transférée ');</script>";
		}
?>
