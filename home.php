<?php
    session_start();
    include("includes/start.php");
?>
    <body>
		<!-- Corps de l'accueil-->
			<div id="bloc_page">    
				<?php include("includes/news.php"); ?>
			            
				<section>
					<article>
						<h1>Qui sommes nous?</h1>
							<p>
								Une association à but non lucratif qui a pour objectif de mettre à disposition des habitants d'un quartier, 
								d'une commune ou d'une ville, un site Web d'achat ou d'échange de fruits et légumes frais cultivés à proximité
								de chez vous.
							</p>
					</article>

					<!-- Aside-->
						<?php include("includes/aside.php"); ?>
				</section>
			</div>

			<!-- Footer-->
				<?php include("includes/footer.php"); ?>
    </body>
</html>
