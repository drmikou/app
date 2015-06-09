<div id="banière_echange" ><br>
		<marquee id="id1" height="110" width="1000" scrollamount="2" loop="0">

                    <span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">

                        <?php 

                            $request='SELECT echange_prod1 FROM echange ORDER BY RAND()';
                        
                            $reponse = $db->query($request);

                            if(isset($reponse)){

                             while ($donnees = $reponse->fetch()){

                                echo' <a href="fruits_legumes.php?barre_recherche='.$donnees["echange_prod1"].'"><img src="images/fruits_legumes/'.$donnees["echange_prod1"].'.jpg" title="'.$donnees["echange_prod1"].'"alt="'.$donnees["echange_prod1"].'" class="imageflottante"width="100" heigh="100" /></a> ';
                             
                             }

                            }

                            $reponse->closeCursor(); // Termine le traitement de la requête */
                        ?>

                    </span>
                </marquee>
		</div>
