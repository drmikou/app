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
            
            <marquee id="id1" height="110" width="1000" scrollamount="2" loop="0">

                    <span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">

                        <?php 

                            $request='SELECT fruit_legumes_nom FROM fruit_legumes ORDER BY RAND()';
                        
                            $reponse = $db->query($request);

                            if(isset($reponse)){

                             while ($donnees = $reponse->fetch()){

                                echo' <a href="fruits_et_legumes.php?barre_recherche='.$donnees["fruit_legumes_nom"].'"><img src="images/fruits_legumes/'.$donnees["fruit_legumes_nom"].'.jpg" title="'.$donnees["fruit_legumes_nom"].'"alt="Image flottante2" class="imageflottante"width="100" heigh="100" /></a> ';
                             
                             }

                            }

                            $reponse->closeCursor(); // Termine le traitement de la requête */
                        ?>

                    </span>
                </marquee>
            </section>
        </div>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
               
    </body>
</html>
