<?php
    session_start();
    $titre = "Mon Profil";
    include("includes/start.php");
?>
    <body>


		<div id="bloc_page">
        	<!-- Côté du profil-->   
                    <h1>Mon profil</h1>
                    
                    <div class="sidebar">
                        
                        <section>
                            <div class="box">                          
                                    <h2> Titre </h2>
                                        <ul class="titre_list"> Sous Titre 1</ul>
                                            <li> Contenu</li>
                                            <li> Contenu 2</li>
                                            <li> Contenu 3</li>
                                            <li> Contenu 4</li>
                                            <li> Contenu 5</li>
                                        </ul>

                            </div>
                        </section>
                        
                        <section>
                            <div class="box">                          
                                    <h2> Titre </h2>
                                        <ul class="titre_list"> Sous Titre 1</ul>
                                            <li> Contenu</li>
                                            <li> Contenu 2</li>
                                            <li> Contenu 3</li>
                                            <li> Contenu 4</li>
                                            <li> Contenu 5</li>
                                        </ul>

                            </div>
                        </section>
                        
                    </div>
		</div>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    </body>

</html>
