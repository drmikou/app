<?php
    session_start();
    $titre = "Echanges";
    include("includes/start.php");
?>

    <body>
        <!-- Aside de l'échange-->
        <?php include("includes/aside_echange.php"); ?>
        
	<!-- Ajouter -->
        <div id="ajouter">
            <?php include("includes/echange_ajouter.php"); ?>
        </div>
        
        <script type="text/javascript">
            afficher_cacher('ajouter');
        </script>

        <!-- Choisir -->
        <div id="choisir">
            <?php include("includes/echange_choisir.php"); ?>
        </div>
        
        <script type="text/javascript">
            afficher_cacher('choisir');
        </script>
        
         <div id="bloc_echange">
            <section>
                <?php include("includes/search_echange.php"); ?>
            </section>
        </div>
        
        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
    </body>

</html>

