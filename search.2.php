<!-- CONNEXION A LA DB -->
<?php
	include("includes/database_connection.php");
	header( 'content-type: text/html ; charset=UTF-8');
?>


<!-- RECHERCHE -->
<?php
	if (isset($_GET['barre_recherche']))	//On vérifie qu'il y a un contenu dans la barre de recherche:
	{       $request='SELECT * FROM '.$table;               // On récupère tout le contenu de la table recette:
		$reponse = $db->query($request);		// Initialisation de la variable réponse
		$barre_recherche = $_GET['barre_recherche'];						// On récupère tout le contenu de la barre de recherche:
		$s = explode(" ",$barre_recherche);								// On divise ce contenu en mots
							
		//echo $request; //affichage de la requete pour verifier si cela fonctionne

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
				$request = $request."titre OR contenu LIKE '% $mot%' ";
				$i=$i+1;
			}
		}
		//echo $request;
		$reponse = $db->query($request);
		$presence_reponse = 0;
		while ($donnees = $reponse->fetch()){
			$presence_réponse = 1;
			?>
			<article>
			<?php 
				$j=0;
				$c2=$donnees['titre'];
				foreach ($s as $mot) {
					if(strlen($mot) > 3){
						$j++;
						if($j>4){$j=1;}
							$c2= str_ireplace( $mot,'<span class="surlign'.$j.'">'.$mot.'</span>', $c2);
						}
					}
			?>
				<h1> <?php echo $c2; ?></h1>
			<?php 
				$i=0;
				$c=$donnees['contenu'];
				foreach ($s as $mot) {
				if(strlen($mot) > 3){
					$i++;
					if($i>4){$i=1;}
						$c= str_ireplace( $mot,'<span class="surlign'.$i.'">'.$mot.'</span>', $c);
					}
				}
			?>
				<p> <?php echo $c; ?></p>
                        <?php
                        if($table== offre  || échange ){
                        ?>
                            <p><?php echo $donnees['prix']; ?></p>
                            <p><?php echo $donnees['id']; ?></p>
                            <img src="<?php echo $donnees['image']; ?>" alt="Image flottante2" class="imageflottante"width="100" heigh="100" />
                        <?php 
                        }
                        if($table== recette ){
                        ?>   
                            <img src="<?php echo $donnees['image']; ?>" alt="Image flottante2" class="imageflottante"width="100" heigh="100" />
                        <?php 
                        }
                        ?>
			</article>
											
			<?php
		}
		if($presence_réponse != 1 ){ 
		?> 
		<article>
			<p> <?php echo "Votre recherche n'a pas aboutie! "; ?></p>
			<p> <?php echo "Veuillez modifiez les paramètres de cette dernière.";?></p>
		</article>
		<?php 
		}
		$reponse->closeCursor(); // Termine le traitement de la requête
	}
	else{
	?>
	 <article>
		<p> le champ de recherche est vide !</p>
	</article>
	<?php
}
?>
