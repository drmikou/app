<?php
    session_start();
    $titre = "Recettes";
    include("includes/start.php");
?>

    <body>
        <div id="bloc_page">
            <!-- Corps de recettes-->
            <section>
               <?php include("includes/search.php");?>

                <article>
                    <h1><img src="images/carotte.jpg" alt="Image flottante2" class="imageflottante"width="100" heigh="100" />La carotte dans tous ses etats !</h1>
                    <p>En entrée, en accompagnement ou même en thème principal, découvrer toutes nos recettes de carote!!</p>
                    <p>De la plus courante à la plus originale !! </p>    
                </article>

                <article>
                    <h1><img src="images/brocolis.jpg" alt="Image flottante1" class="imageflottante" width="150" heigh="150" />Souvenez-vous: les legumes oublies !</h1>
                    <p>Vous souhaitez redécouvrir des saveurs oubliées, alors n'hésitez plus et cliquez tout est expliqué !</p>
                    <p>Mangez la cuisine de nos aïeux!</p>
                </article>
            </section>
        </div>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
               
    </body>
</html>
