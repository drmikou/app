<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
    <fieldset>
        <legend>Changer mon mot de passe</legend>
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
    </fieldset>
    
</form>