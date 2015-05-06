<?php
    session_start();
    $titre = "Recherche";
    include("includes/start.php");
?>

    <body>

		<!-- Corps de la recherche-->
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
						if (isset($_GET['q']))
						{
							require"includes/database_connection.php"; 			// Si c'est le cas on se connecte à la base de donnée:
							$reponse = $db->query('SELECT * FROM recette');		// Initialisation de la variable réponse

							$q=$_GET['q'];										// On récupère tout le contenu de la barre de recherche:
							$s=explode(" ",$q);									// On divise ce contenu en mots

							$request="SELECT * FROM recette ";					// On récupère tout le contenu de la table offres:
							//$reponse = $bdd->query("SELECT * FROM offres");

							// Si tout va bien, on peut continuer, tant qu'il y a des mots dans la chaine S on les ajoutent à notre requette PDO
							$i=0;
							foreach ($s as $mot)
							{
								if(strlen($mot) > 3)
								{
									if ($i==0)
									{
										//$reponse=$reponse.$bdd->query("WHERE");
										$request=$request."WHERE ";
									}
									else
									{
										//$reponse=$reponse.$bdd->query("OR");
										$request=$request."OR ";
									}

									//$reponse=$reponse.$bdd->query("contenu LIKE '%$mot%' ");
									$request=$request."titre OR contenu LIKE '% $mot%' ";
									$i=$i+1;
								}
							}
							echo "Voici votre requête ".$request;
						}
					?>

					<?php
						$reponse = $db->query($request);
						$presence_réponse = 0;

						// On affiche chaque entrée une à une
						while ($donnees = $reponse->fetch())
						{
							$presence_réponse = 1;
						}
					?>

					<article>
						<?php 
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
						?>

						<h1> <?php echo $c2; ?> </h1>
						
						<?php 
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
						?>
							
						<p> <?php echo $c; ?></p>
					</article>
											
					<?php
					
						if($presence_réponse != 1 )
						{ 
						}
					?> 

					<article>
						<p> <?php echo "Votre recherche n'a pas aboutie! "; ?></p>
						<p> <?php echo "Veuillez modifier les paramètres de cette dernière svp.";?></p>
					</article>
						
					<?php 
						$reponse->closeCursor(); // Termine le traitement de la requête
					?>

					<article>
						<p> le champ de recherche est vide !</p>
					</article>


					<!-- Footer-->
                        <?php include("footer.php"); ?>

             	</section>
            </div>
    </body>
</html>
