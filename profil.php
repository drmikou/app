<?php
    session_start();
    $titre = "Mon Profil";
    include("includes/start.php");
?>
    <body>
		<div id="bloc_page">
            <h1>Votre compte</h1>

        	<!-- Côté du profil-->   
            <div class="cote">
                <section>
                    <div class="box">                          
                        <ul class="titre_list"> Communauté </ul>
                            <li> Votre profil</li>
                            <li> Tous vos commentaires </li>
                            <li> Mes évaluations </li>
                    </div>
                        </section>
                        
                <section>
                    <div class="box">                          
                        <ul class="titre_list"> Paramètre du compte </ul>
                            <li> Mes informations </li>
                            <li> Changer mes informations </li>
                            <li> Gérer mes alertes</li>
                            <li> Supprimer mon compte</li>
                    </div>
                </section>            
            </div>

		</div>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    </body>

</html>
