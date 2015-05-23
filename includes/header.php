<header>
    <div class="centrage">
        <div id="logo_titre">
            <a href="home.php">
                <img  src="images/Logo.png" class="imageflottante" alt="logo" id="logo" width="200" heigh="200" />
            </a>
                                
            <div id="titre_principal">
                <h1>
                    <a href="home.php">
                        Veg A table
                    </a>
                </h1>
            </div>
        </div>
    </div>
    
    <?php // VISITEUR
        if($id==0)
        {
    ?>
        <div class="centrage">
            <nav>
                <div id="conteneur_menu">
                    <div id="menu">
                        
                        <!-- Page d'accueil -->
                        <dl>
                            <dt><a href='home.php'> Accueil </a></dt>
                        </dl>
                        
                        <!-- Fruits et légumes -->
                        <dl>
        	                <dt><a href="#">Fruits et Légumes</a></dt>
        	            </dl>
                          
                        <!-- Page d'achats -->
        	            <dl>
        	                <dt><a href="echanges.php"> Echanges </a></dt>  
        	            </dl>
                          
                        <!-- Page de recettes -->         
        	            <dl>
        	                <dt><a href="recette.php">Recettes</a></dt>
        	                    <dd>
        	                        <ul>
        	                            <li>Top recettes</li>
        	                        </ul>
        	                    </dd>
        	            </dl>                                                            
                                                             
                        <!-- Panier -->
                        <dl>
        	                <dt><a href="panier.php">Panier</a></dt>
        	            </dl>

                         <!-- Connexion -->
                        <dl>
                            <dt><a href="connexion.php">Connexion</a></dt>
                        </dl>
                                    
                    </div>
                </div>
            </nav>
        </div>
    <?php
        }
        else
        {
    ?>
        <div class="centrage">
            <nav>
                <div id="conteneur_menu">
                    <div id="menu">
                        <!-- Page d'achats -->
                        <dl>
                            <dt><a href="echanges.php"> Echanges </a></dt>  
                        </dl>
                                        
                        <!-- Page de recettes -->         
                        <dl>
                            <dt><a href="recette.php">Recettes</a></dt>
                                <dd>
                                    <ul>
                                        <li>Top recettes</li>
                                    </ul>
                                </dd>
                        </dl>
                                        
                        <!-- Fruits et légumes -->
                        <dl>
                            <dt><a href="#">Fruits et Légumes</a></dt>
                        </dl>
                                          
                        <!-- Profil -->
                        <dl>
                            <dt><a href="profil.php"><?php echo $pseudo ?></a></dt>
                                <dd>
                                    <ul>
                                        <li><a href="messages.php">Mes messages</a></li>
                                        <li><a href="parametre.php">Paramètres</a></li> 
                                    </ul>
                                </dd>
                        </dl>
                                        
                        <!-- Forum -->
                        <dl>
                            <dt><a href="#">Forum</a></dt>
                        </dl>
                                        
                        <!-- Déconnexion -->
                        <dl>
                            <dt><a href="deconnexion.php">Déconnexion</a></dt>
                        </dl>
                                         
                        <!-- Panier -->
                        <dl>
                            <dt><a href="panier.php">Panier</a></dt>
                        </dl>
                                    
                    </div>
                </div>
            </nav> 
        </div>
    <?php
        }
    ?>          
</header>

