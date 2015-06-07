<!-- Côté du profil-->   

    <script type="text/javascript" src="afficher_cacher_div.js"></script>

    <div class="cote">
        <section>
            <div class="box">
                <img  src="images/communaute.png" class="imageflottante" alt="communaute" id="communaute" width="30" />                          
                <ul class="titre_list"> Communauté </ul>
                    <li><span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('mon_profil_public');">Mon profil public</span> </li>
                    <li> Tous vos commentaires </li>
                    <li> Mes évaluations </li>
            </div>
        </section>
                        
        <section>
            <div class="box">
                <img  src="images/config.png" class="imageflottante" alt="config" id="config" width="30" />                          
                <ul class="titre_list"> Paramètre du compte </ul>
                    <li><span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('mes_informations');">Mes informations</span> </li>
                    <li><a href='changer_info.php'> Changer mes informations </a> </li>
                    <li> Supprimer mon compte</li>
            </div>
        </section>        

        <section>
            <div class="box">                          
                <img  src="images/message_aside.png" class="imageflottante" alt="message" id="message" width="30" />
                <ul class="titre_list"> Mes messages </ul> 
                    <li><span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('message_voir');">Boite de réception</span> </li>
                    <li><a href='message_envoyer.php'> Envoyer un message </a> </li>
            </div>
        </section>                                              

    </div>