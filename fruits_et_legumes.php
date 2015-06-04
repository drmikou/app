<?php
    session_start();
    $titre = "Fruit et Légume";
    include("includes/start.php");
?>

    <body>
        <div id="bloc_page">
            <!-- Corps de recettes-->
            <section>
               <?php include("includes/search.2.php");?>

            </section>
        </div>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
               
    </body>
</html>
