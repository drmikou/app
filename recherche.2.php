# app
<?php
    session_start();
    $titre = "Recherche";
    include("includes/start.php");
?>
    <body>

        <article2>
           <?$table='recette';
            $param1='titre';
            $param2='contenu';
            include("includes/search.php"); ?>
        </article2>
            <!-- Footer-->
         <?php include("includes/footer.php"); ?>
        

    </body>

</html>
