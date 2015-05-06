<!-- CONNEXION A LA DB -->
	<?php
		include("includes/database_connection.php");
	?>

<!-- FORMULAIRE -->
<form method="get" action="recherche.php">
	Recherche:
	<input type="text" name="barre_recherche"/>
	<input type="submit" value="Recherche!"/>
</form>

<!-- RECHERCHE -->
<?php
	if (isset($_GET['q']))	//On vérifie qu'il y a un contenu dans la barre de recherche:
	{
		$reponse = $db->query('SELECT * FROM recette');		// Initialisation de la variable réponse
		$q = $_GET['barre_recherche'];						// On récupère tout le contenu de la barre de recherche:
		$s = explode(" ",$q);								// On divise ce contenu en mots
		$request = "SELECT * FROM recette";					// On récupère tout le contenu de la table recette:

		$i=0;
		foreach($s as $mot)		// Parcours $s, incrémente $mot à chaque mot rencontré 
		{
			if(strlen($mot) > 3)	// Si la taille de la chaine est au dessus de 3 / strlen: calcule la taille d'une chaîne 
			{
				if ($i==0)			 
				{
					$request = $request."WHERE ";
				}
				else
				{
					$request = $request."OR ";
				}
				$request = $request."titre OR contenu LIKE '% $mot%' ";
				$i=$i+1;
			}
		}

		$reponse = $db->query($request);
		$presence_reponse = 0;
		while ($donnees = $reponse->fetch())	// On affiche chaque entrée une à une
		{	
			$presence_reponse = 1;
			$j=0;
			$c2=$donnees["titre"];

			foreach ($s as $mot)
			{
				if(strlen($mot) > 3)
				{
					$j++;
					if($j>4)
					{
						$j=1;
					}
					$c2= str_ireplace( $mot,'<span class="surlign'.$j.'">'.$mot.'</span>', $c2);
				}
			}

			$i=0;
			$c=$donnees["contenu"];
			foreach ($s as $mot)
			{
				if(strlen($mot) > 3)
				{
					$i++;
					if($i>4)
					{
						$i=1;
					}
					$c= str_ireplace( $mot,'<span class="surlign'.$i.'">'.$mot.'</span>', $c);
				}
			}								
		}
	}
?>