<!-- FORMULAIRE -->
<form method="get" action="echange.php">
	Recherche:
	<input type="text" name="barre_recherche"/>
	<input type="submit" value="Recherche!"/>
</form>

<!-- RECHERCHE -->
<?php
	if (isset($_GET['barre_recherche']))	//On vérifie qu'il y a un echanges_prod2 dans la barre de recherche:
	{
		$reponse = $db->query('SELECT * FROM echange');		// Initialisation de la variable réponse
		$barre_recherche = $_GET['barre_recherche'];						// On récupère tout le echanges_prod2 de la barre de recherche:
		$s = explode(" ",$barre_recherche);								// On divise ce echanges_prod2 en mots
		$request = "SELECT * FROM echange";					// On récupère tout le echanges_prod2 de la table echange:
		//echo $request;

		$i=0;
		foreach($s as $mot)		// Parcours $s, incrémente $mot à chaque mot rencontré 
		{
			if(strlen($mot) > 3)	// Si la taille de la chaine est au dessus de 3 / strlen: calcule la taille d'une chaîne 
			{
				if ($i==0)			 
				{
					$request = $request." WHERE ";
				}
				else
				{
					$request = $request."OR ";
				}
				$request = $request."echange_prod1 LIKE '%$mot%' ";
				$i=$i+1;
			}
		}
		//echo $request;

		$reponse = $db->query($request);
		$presence_reponse = 0;
		while ($donnees = $reponse->fetch()){
			?>
		<div id="affiche_echange">
			<h4><?php echo $donnees['echange_pseudo']; ?> : <?php echo date($donnees['echange_date']) ; ?></h4>
			<div id="bloc_echange">								
				<div class="bloc_echange1">
					<?php echo $donnees['echange_prod1']; 
						  echo $donnees['echange_qte_prod1'] ;
						  echo '<img src="images/fruits_legumes/'.$donnees["echange_prod1"].'.jpg" title="'.$donnees["echange_prod1"].'"alt="Image 														flottante2" width="150" heigh="150" />';
					?>	
				</div>
				<!--<div id="fleche">
				<img src="images/fleche.jpg" title=""alt="Imageflottante2" width="100" heigh="100" />
				</div>-->
				<div class="bloc_echange2">
					<?php echo '<img src="images/fruits_legumes/'.$donnees["echange_prod2"].'.jpg" title="'.$donnees["echange_prod2"].'"alt="Image flottante2" width="150" heigh="150" />';
						  echo $donnees['echange_prod2']; 
						  echo $donnees['echange_qte_prod2']; ?>	
				</div>
			</div>
				<div id="bloc_commentaire">
					<br><?php echo $donnees['echange_commentaire']; ?>	
				</div>	
		</div>			
	<?php
	}
		$reponse->closeCursor(); // Termine le traitement de la requête
	}
	//  AFFICHAGE PAR DEFAUT ORDONNER PAR DATE La PLUS RECENTE
	else
	{
		include("includes/echange_affichage.php");
	}
?>
