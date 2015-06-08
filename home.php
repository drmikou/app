<?php
    session_start();
    include("includes/start.php");
	include("includes/php_chat.php");
?>
    <body>
		<!-- Corps de l'accueil-->
			<div id="bloc_page"> 

				<div id="home_image">
					<img  src="images/fruits-et-legumes-de-saison.jpg" class="imageflottante" alt="verger" id="verger" width="105%"/>
				</div>

				<div class="information"> 
					<?php
						$reponse= $db->query('SELECT news_title, news_content FROM news ORDER BY news_id DESC LIMIT 0, 4');		//PDO::prepare — Prépare une requête à l'exécution et retourne un objet
						while($data = $reponse->fetch())
						{
					?>

							<section>
								<div class="boite">
									<h2 class="titre"> <?php echo $data['news_title']?> </h2>
									<div class="contenu">
										<p> <?php echo $data['news_content']?> </p>
									</div>
									<p class="bouton"><a href="#">Plus de détails</a></p>
								</div>
							</section>
							
					<?php				
						}
					?>
				</div>
				
			<?php include("includes/chat.php"); ?>
		</div>
	</body>
			<!-- Footer-->
				<?php include("includes/footer.php"); ?>
    
</html>
