<?php
    session_start();
    $titre = "Mes informations";
    include("includes/start.php");
?>

    <body>
    	<div id="bloc_page">
            <h1>Votre compte</h1>

            <!-- Côté du profil-->  
            <?php include("includes/aside_profil.php"); ?>

            <!-- Mes informations --> 
            <?php include("includes/database_profil.php"); ?>
            <?php include("includes/mes_informations.php"); ?>
                
    	</div>
    </body>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    

</html>
