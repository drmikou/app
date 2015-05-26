<?php
    session_start();
    $titre = "Ajouter";
    include("includes/start.php");
?>

    <body>
        <!-- Aside de l'échange-->
        <?php include("includes/aside_echange.php"); ?>
        
	<!-- Corps de l'échange-->
        <?php include("includes/echange_proposer.php"); ?>
            
        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
    </body>

</html>
