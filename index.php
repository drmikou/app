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
						<input type="text" placeholder="Saisir un fruit ou un légume" name="q" />
						<input type="submit" value="lancer la recherche" id="bouton_valider"/>
					</form>

						
					<?php
					require"connection_database.php";

					?> 

					<!-- Footer-->
                        <?php include("footer.php"); ?>

              </section>
            </div>
    </body>

</html>
