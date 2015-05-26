<?php
    session_start();
    $titre = "Echanges";
    include("includes/start.php");
?>

    <body>
        <!-- Aside de l'échange-->
        <?php include("includes/aside_echange.php"); ?>
        
	<!-- Corps de l'échange-->
        <?php include("includes/echange_choisir.php"); ?>
            
        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
    </body>

</html>
