<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">

        <h4>Changer mon mot de passe</h4>
            <p>
                <label for="mdp_actuel">Mot de passe actuel</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="password" name="mdp_actuel" id="mdp_actuel" value=""/>
            </p>
            
            <p>
                <label for="mdp_new">Nouveau mot de passe:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="password" name="mdp_new" id="mdp_new" value=""/>
            </p>

            <p>
                <label for="mdp_new_check">Confirmation du nouveau mot de passe:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="password" name="mdp_new_check" id="mdp_new_check" value=""/>
            </p>

            <p>
                <input type="submit" name="submit" value="Changer mon mot de passe" />
            </p>

</form>

<br>
<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post"> 
        <h4>Changer mon adresse mail</h4>
            <p>
                <label for="mdp_actuel_mail">Mot de passe actuel</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="password" name="mdp_actuel_mail" id="mdp_actuel_mail" value=""/>
            </p>
            
            <p>
                <label for="mail_new">Nouvelle adresse mail:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="email" name="mail_new" id="mail_new" value=""/>
            </p>

            <p>
                <label for="mail_new_check">Confirmation de l'adresse mail:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="email" name="mail_new_check" id="mail_new_check" value=""/>
            </p>

            <p>
                <input type="submit" name="submit" value="Changer mon adresse mail" />
            </p>
</form>
<br>

<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
        <h4>Changer mon adresse</h4>
            <p>
                <label for="street_new">Ma nouvelle rue:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="street_new" id="street_new" value=""/>
            </p>

            <p>
                <label for="town_new">Ma nouvelle ville:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="town_new" id="town_new" value=""/>
            </p>

            <p>
                <label for="region_new">Ma nouvelle région:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="region_new" id="region_new" value=""/>
            </p>

            <p>
                <input type="submit" name="submit" value="Changer mon adresse" />
            </p>
</form>

<br>

<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
        <h4>Changer mon numéro de téléphone</h4>
            <p>
                <label for="phone_new">Mon nouveau numéro de téléphone:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="tel" name="phone_new" id="phone_new" value=""/>
            </p>

            <p>
                <input type="submit" name="submit" value="Changer mon numéro de téléphone" />
            </p>
    
</form>
