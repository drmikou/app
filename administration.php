<?php
    session_start();
    $titre = "Administration";
    include("includes/start.php");
?>

    <body>
<?php
    if($admin == 1)
    {
?>
        <!-- Aside de l'administration-->
        <?php include("includes/aside_administration.php"); ?>


        <!-- ACTUALITE -->
    	   <!-- Ajouter une actualite -->
            <div id="actualite_ajouter">
                <?php include("includes/actualite_ajouter.php"); ?>
            </div>
            
            <script type="text/javascript">
                afficher_cacher('actualite_ajouter');
            </script>

            <!-- Supprimer une actualité -->
            <div id="actualite_supprimer">
                <?php include("includes/actualite_supprimer.php"); ?>
            </div>
            
            <script type="text/javascript">
                afficher_cacher('actualite_supprimer');
            </script>

        <!-- Membres -->
            <!-- Voir les membres -->
            <div id="membre_voir">
                <?php include("includes/membre_voir.php"); ?>
            </div>
            
            <script type="text/javascript">
                afficher_cacher('membre_voir');
            </script>

            <!-- Supprimer un membre -->
            <div id="membre_supprimer">
                <?php include("includes/membre_supprimer.php"); ?>
            </div>
            
            <script type="text/javascript">
                afficher_cacher('membre_supprimer');
            </script>




        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
    </body>
<?php
    }else{
        echo "Vous n'êtes pas un administrateur! Veuillez vous connecter svp.";
    }
?>

</html>