<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
    <fieldset>
        <legend>Supprimer une actualité</legend>
            <p>
                <label for="titre_supp">Titre de l'article à supprimer</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="titre_supp" id="titre_supp" value=""/>
            </p>
            
            <p>
                <input type="submit" name="submit" value="Supprimer l'article" />
            </p>
    </fieldset>
    
</form>