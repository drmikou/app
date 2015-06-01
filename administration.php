<?php
    session_start();
    $titre = "Echanges";
    include("includes/start.php");
?>

    <body>

        <!-- Aside de l'administration-->
        <?php include("includes/aside_administration.php"); ?>
        

    	<!-- Ajouter une actualite -->
            <div id="ajouter">
                <?php include("includes/actualite_ajouter.php"); ?>
            </div>
            
            <script type="text/javascript">
                afficher_cacher('ajouter');
            </script>

        
        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
    </body>

</html>