<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>vAt accueil</title>
    </head>


    <body>

		<!-- Header -->
			<?php include("header.php"); ?>
    	
		<!-- Corps de recettes-->
            <div id="bloc_page">
            
                <section>	

                	<?php

					header( 'content-type: text/html ; charset=UTF-8 ')
					?>
					<form method="get" action="search.php">
						Recherche:
						<imput type="text"  name="q"/>
						<imput type="submit" value="cherche !"/>
					</form>
					<br>

					<?php

					//On vérifie qu'il y a un contenu dans la barre de recherche:
					if (isset($_GET['q'])){
						// si c'est le cas on se connecte à la base de donnée:
						require"connection_database.php";

						$reponse = $bdd->query('SELECT * FROM offres');// initialisation de la variable réponse

						$q=$_GET['q'];  // On récupère tout le contenu de la barre de recherche:
						$s=explode(" ",$q);// on divise ce contenu en mots


						// On récupère tout le contenu de la table offres:
						$request="SELECT * FROM offres ";
						//$reponse = $bdd->query("SELECT * FROM offres");

						// Si tout va bien, on peut continuer, tant qu'il y a des mots dans la chaine S on les ajoutent à notre requette PDO
						$i=0;
						foreach ($s as $mot) {

							if(strlen($mot) > 3){

								if ($i==0) {
								//$reponse=$reponse.$bdd->query("WHERE");
								$request=$request."WHERE ";
								}

								else{
								//$reponse=$reponse.$bdd->query("OR");
									$request=$request."OR ";
								}
								//$reponse=$reponse.$bdd->query("contenu LIKE '%$mot%' ");
								$request=$request."contenu LIKE '%$mot%' ";
								$i=$i+1;
						}
					}

					//echo "voila la requete ".$request;
					?>

					<?php

					$reponse = $bdd->query($request);
					$presence_réponse = 0;

					// On affiche chaque entrée une à une
					while ($donnees = $reponse->fetch()){
						$presence_réponse = 1;
						?>

						<article>
							<h1> <?php echo $donnees["nom_vendeur"]; ?></h1>
							<p> <?php echo $donnees["contenu"]; ?></p>
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

					// 13 min du tuto modif pour surligné l'affichage
								    
					?>
					<!-- Footer-->
                        <?php include("footer.php"); ?>

              </section>
            </div>
    </body>

</html>
