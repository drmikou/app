<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
    <fieldset>
        <legend>Ajouter une actualité</legend>
            <p>
                <label for="titre">Titre:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="titre" id="titre" value=""/>
            </p>

            <p>
                <label for="contenu">Contenu :</label> 
                <textarea type="text" name="contenu" id="contenu" value="" row="30" cols="120"></textarea>
            </p>
            
            <p>
                <input type="submit" name="submit" value="Ajouter une actualité" />
            </p>
    </fieldset>
    
</form>