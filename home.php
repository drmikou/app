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
    	
		<!-- Corps de l'accueil-->
			<div id="bloc_page">    
                            <?php include("news.php"); ?>
			            
				<section>

					<article>
						<h1>Qui sommes nous?</h1>
							<p>Une association à but non lucratif qui a pour objectif de mettre à disposition des habitants d'un quartier , 
								d'une commune ou d'une ville, un site Web d'achat ou d'échange de fruits et légumes frais cultivés à proximité
								de chez vous. </p>
			                    <p></p>
			                    <p></p>
					</article>

					<!-- Aside-->
						<?php include("aside.php"); ?>
				</section>
                        </div>
				<!-- Footer-->
					<?php include("footer.php"); ?>
		
    </body>

</html>
