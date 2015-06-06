<!-- CONNEXION A LA DB -->
	<?php
	header( 'content-type: text/html ; charset=UTF-8 ');
		include("includes/database_connection.php");
	?>

<form method="get" action="fruits_et_legumes.php">
      Recherche:
      <input type="text" name="barre_recherche"/>
      <input type="submit" value="Recherche!"/>
     </form> 
<!-- RECHERCHE -->
<?php
	if (isset($_GET['barre_recherche']))	//On vérifie qu'il y a un contenu dans la barre de recherche:
	{
		$reponse = $db->query('SELECT * FROM fruit_legumes');		// Initialisation de la variable réponse
		$barre_recherche = $_GET['barre_recherche'];						// On récupère tout le contenu de la barre de recherche:
		$s = explode(" ",$barre_recherche);								// On divise ce contenu en mots
		$request = "SELECT * FROM fruit_legumes";					// On récupère tout le contenu de la table recette:
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
				$request = $request."fruit_Legumes_nom LIKE '%$mot%' ";
				$i=$i+1;
			}
		}
		$request=$request." ORDER BY fruit_Legumes_nom ";
		echo $request;
		$reponse = $db->query($request);
		while ($donnees = $reponse->fetch()){
?>
<?php 
				$c2=$donnees["fruit_legumes_nom"];
				foreach ($s as $mot) {
					
					echo'<article> <h1>'.$c2.':</h1> <h1> <img src="images/fruits_legumes/'.$c2.'.jpg" alt="Image flottante2" class="imageflottante"width="100" heigh="100" /> </h1>'; 
					echo'<h2> Qu\'est ce qu\'un(e) "'.$c2.'" ?</h2> <p>'.$donnees["fruit_legumes_description"].'</p> </br> <a href="echange.php?barre_recherche='.$donnees["fruit_legumes_nom"].'">voir les echanges en rapport avec '.$donnees["fruit_legumes_nom"].'</a> </article>';
				}
		}
	$reponse->closeCursor(); // Termine le traitement de la requête
	}
	else{
		echo'<article> <p>Votre recherche n\'a pas abouti.</p> <p> Veuillez remplir le champ de la barre de recherche</p></article>';
	}
?>
