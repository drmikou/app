<!-- CONNEXION A LA DB -->
    <?php
        include("includes/database_connection.php");
    ?>

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


                    <?php

                        if($id !=0)
                        {
                            $query= $db->prepare('SELECT message_read FROM message WHERE message_destination= :login');       //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
                            $query->bindValue('login',$pseudo, PDO::PARAM_STR);             //PDOStatement::bindValue — Associe une valeur à un paramètre
                            $query->execute(); // Exécute la préparation

                            while($data= $query->fetch())
                            {
                                if($data['message_read'] == 0)
                                {
                                    $notification= 0;
                                    break;
                                }
                                else
                                {
                                    $notification = 1;
                                }
                            }
                    ?>

                    <?php
                            if($notification== 0)
                            {
                    ?>
                                <a href="mon_profil.php">
                                    <div id="image_message">
                                        <img  src="images/message.png" class="imageflottante" alt="noti_message" id="noti_message" width="70" heigh="100" />
                                    </div>
                                </a>
                    <?php
                            }
                    ?>

                            <a href="deconnexion.php">
                                <div id="image_logout">
                                    <img  src="images/logout.png" class="imageflottante" alt="logout" id="logout" width="40" heigh="100" />
                                </div>
                            </a>
                    <?php       
                        }    
                    ?>


                    </a>
                </h1>
                <br>

                <div id="sous_titre">
                    Votre site d'échanges
                </div>
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
                            <div id="image_home">
                                <a href="home.php">
                                    <img  src="images/home.png" class="imageflottante" alt="logo" id="logo" width="40" heigh="100" />
                                </a>
                            </div>
                        </dl>
                        
                        <!-- Fruits et légumes -->
                        <dl>
        	                <dt><a href="fruits_et_legumes.php">Fruits et Légumes</a></dt>
        	            </dl>
                          
                        <!-- Page d'achats -->
        	            <dl>
        	                <dt><a href="echange.php"> Echanges </a></dt>  
        	            </dl>
                         
                        <!--  Actualités -->
                        <dl>
                            <dt><a href='news.php'> Actualités </a></dt>
                        </dl>

                        <!-- Page de recettes -->         
        	            <dl>
        	                <dt><a href="recette.php">Recettes</a></dt>
        	            </dl>                                                            
                                                             
                         <!-- Connexion -->
                        <dl>
                            <dt><a href="connexion.php">Connexion</a></dt>
                        </dl>
                                    
                        <!-- Inscription -->
                        <dl>
                            <dt><a href="inscription.php">S'inscrire</a></dt>
                        </dl>
                                    
                    </div>
                </div>
            </nav>
        </div>
    <?php
        }
        elseif($admin==0)
        {
    ?>
        <div class="centrage">
            <nav>
                <div id="conteneur_menu">
                    <div id="menu">

                        <!-- Page d'accueil -->
                        <dl>
                            <div id="image_home">
                                <a href="home.php">
                                    <img  src="images/home.png" class="imageflottante" alt="logo" id="logo" width="40" heigh="100" />
                                </a>
                            </div>
                        </dl>

                        <!-- Fruits et légumes -->
                        <dl>
                            <dt><a href="fruits_et_legumes.php">Fruits et Légumes</a></dt>
                        </dl>

                        <!-- Page d'achats -->
                        <dl>
                            <dt><a href="echange.php"> Echanges </a></dt>  
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
                                                     
                        <!-- Profil -->
                        <dl>
                            <dt><a href="mon_profil.php"><?php echo $pseudo ?></a></dt>
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

                        <!-- Page d'accueil -->
                        <dl>
                            <div id="image_home">
                                <a href="home.php">
                                    <img  src="images/home.png" class="imageflottante" alt="logo" id="logo" width="40" heigh="100" />
                                </a>
                            </div>
                        </dl>

                        <!-- Page d'achats -->
                        <dl>
                            <dt><a href="echange.php"> Echanges </a></dt>  
                        </dl>

                        <!--  Actualités -->
                        <dl>
                            <dt><a href='news.php'> Actualités </a></dt>
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
                            <dt><a href="fruits_et_legumes.php">Fruits / Légumes</a></dt>
                        </dl>                 
                                        
                        <!-- Forum -->
                        <dl>
                            <dt><a href="#">Forum</a></dt>
                        </dl>
                                         
                        <!-- Administration -->
                        <dl>
                            <dt><a href="administration.php">Administration</a></dt>
                        </dl>
                                    
                    </div>
                </div>
            </nav> 
        </div>
    <?php    
        }
    ?>          
</header>

