<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

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
		$reponse = $db->query('SELECT * FROM echanges');		// Initialisation de la variable réponse
		$barre_recherche = $_GET['barre_recherche'];						// On récupère tout le echanges_prod2 de la barre de recherche:
		$s = explode(" ",$barre_recherche);								// On divise ce echanges_prod2 en mots
		$request = "SELECT * FROM echanges";					// On récupère tout le echanges_prod2 de la table echange:
		echo $request;

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
				$request = $request."echange_prod1 OR echange_prod2 LIKE '%$mot%' ";
				$i=$i+1;
			}
		}
		echo $request;

		$reponse = $db->query($request);
		$presence_reponse = 0;
		while ($donnees = $reponse->fetch()){
			?>
			<article3>

                        <h2>Echange proposé par <?php echo $donnees['echange_pseudo'];?></h2>
                        <p>numéro de l'offre: <?php echo $donnees['echange_id'];?></p>
                        <p>date de parution de l'offre: <?php echo $donnees['echange_date'];?></p>
                    

                        <table>
                            <tr>
                                <td>
                                    <table border="1" >
                                        <tr>
                                            <td> <?php echo '<img src="images/fruits_legumes/'.$donnees['echange_prod1'].'.jpg" alt="Image flottante2" title="'.$donnees['echange_prod1'].'" class="imageflottante"width="100" heigh="100" />';?> </td>
                                         
                                        </tr>
                                        <tr>
                                            <td>  <?php echo $donnees['echange_qte_prod1'];?> kg</td>
                                        </tr>
                                    </table>
                                </td>

                                <td> Contre </td>

                                <td>
                                    <table border="1" >
                                        <tr>
                                           <td> <?php echo'<img src="images/fruits_legumes/'.$donnees['echange_prod2'].'.jpg" alt="Image flottante2" title="'.$donnees['echange_prod2'].'" class="imageflottante"width="100" heigh="100" />';?></td>
                                          
                                        </tr>
                                        <tr>
                                            <td> <?php echo $donnees['echange_qte_prod2'];?> kg </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </article3>
											
			<?php
		}
		$reponse->closeCursor(); // Termine le traitement de la requête
	}
?>
