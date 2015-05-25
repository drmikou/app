<?php
    session_start();
    $titre = "Connexion";
    include("includes/start.php");
?>
    <body>
        <div id="bloc_page">
        <!-- Corps de la connexion-->
            <?php include("includes/login.php"); ?>
        

            <a href="inscription.php">S'inscrire</a>
        </div>
        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    </body>

</html>
