<?php
    session_start();
    $titre = "Connexion";
    include("includes/start.php");
?>
    <body>

        <!-- Corps de la connexion-->
        <article>
            <?php include("includes/login.php"); ?>
        </article>

        <article>
            <a href="inscription.php">S'inscrire</a>
        </article>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    </body>

</html>
