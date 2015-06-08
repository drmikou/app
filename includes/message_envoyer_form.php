<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
        <h4>Envoyer un message</h4>
            <p>
                <label for="destinataire">Login du destinataire:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="destinataire" id="destinataire" value=""/>
            </p>

            <p>
                <label for="contenu">Contenu :</label> 
                <textarea type="text" name="contenu" id="contenu" value="" row="30" cols="120"></textarea>
            </p>
            
            <p>
                <input type="submit" name="submit" value="Envoyer mon message" />
            </p>
    
</form>