<?php
    session_start();
    include("includes/start.php");
?>
    <body>
		<!-- Corps de l'accueil-->
			<div id="bloc_page"> 

				<div id="home_image">
					<img  src="images/orange.jpg" class="imageflottante" alt="verger" id="verger" width="100%"/>
				</div>

				<div class="information"> 

						<section>
							<div class="boite">
								<h2 class="titre">Top recette</h2>
								<div class="contenu">
									<p>Venez découvrir les meilleures recettes de votre site!</p>
								</div>
								<p class="bouton"><a href="#">Plus de détails</a></p>
							</div>
						</section>

						<section>
							<div class="boite">
								<h2 class="titre">La FAQ</h2>
								<div class="contenu">
									<p>Cette foire aux questions répondra à toute vos interrogations!</p>
								</div>
								<p class="bouton"><a href="#">Plus de détails</a></p>
							</div>
						</section>
						
						<section>
							<div class="boite">
								<h2 class="titre">Nouvelle page de profil!</h2>
								<div class="contenu">
									<p>La nouvelle page de profil de Veg A Table fait son apparition! Vous pouvez désormais modifier à votre guise votre profil.</p>
								</div>
								<p class="bouton"><a href="#">Plus de détails</a></p>
							</div>
						</section>

						<section>
							<div class="boite">
								<h2 class="titre">Forum</h2>
								<div class="contenu">
									<p>Rejoignez notre communauté Veg A Table dès maintenant! Le forum est ouvert à tous, il vous permettra d'échanger toutes les informations dont vous avez besoin! </p>
								</div>
								<p class="bouton"><a href="#">Plus de détails</a></p>
							</div>
						</section>
				</div>
				<div id="bloc_chat" class="centrage">
				<article>
					<?php // VISITEUR
						if($id==0)
					{
				    ?>
					<div id="chat">					
						<?php
						$allmsg = $db->query('SELECT * FROM chat ');
							while($msg = $allmsg->fetch())
							{
						?>
						<b><?php echo $msg['chat_pseudo']; ?> :</b> <?php echo date($msg['chat_date']) ; ?>   	<?php echo $msg['chat_message']; ?><br>
						<?php
							}
						?>
						</div>
					<?php
					}
						else
					{
					?>
					<div id="chat">					
						<?php
						$allmsg = $db->query('SELECT * FROM chat ');
							while($msg = $allmsg->fetch())
							{
						?>
						<b><?php echo $msg['chat_pseudo']; ?> :</b> <?php echo date($msg['chat_date']) ; ?>   	<?php echo $msg['chat_message']; ?><br>
						<?php
							}
						?>
						</div>
					<div id="saisie_chat" >
							<b><?php if(isset($pseudo)){ echo $pseudo ;}?></b>
						<form method="post" action=""> 
							<textarea type="text" name="message" placeholder"MESSAGE"></textarea><br>
							<input type="submit" value="Envoyer" />					
						</form>
					</div>
					<?php
					}
					?> 
				</article>
			</div>
		</div>
	</body>
			<!-- Footer-->
				<?php include("includes/footer.php"); ?>
    
</html>
