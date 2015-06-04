<?php
    session_start();
    $titre = "Connexion";
    include("includes/start.php");
?>
    <body>
        <div id="bloc_page">
        <!-- Corps de la connexion-->
            <?php include("includes/login.php"); ?>
        
        <div id= "inscription">
            <a href="inscription.php" style="text-decoration:none" >S'inscrire</a>
        </div>
        </div>
        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    </body>

</html>
