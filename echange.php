<?php
    session_start();
    $titre = "Echanges";
    include("includes/start.php");
?>

    <body>
        <div id="bloc_echange">
            <section>
                <?php /*include("includes/search_echange.php"); */
		      include("includes/echange.php");?>
            </section>
        </div>
        
        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
    </body>

</html>
