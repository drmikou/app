<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
    <fieldset>
        <legend>Options</legend>
            <p>
                <label for="message_check">Marquer tous les messages comme lus</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="checkbox" name="message_check" id="message_check" value="" />
            </p>
            
            <p>
                <input type="submit" name="submit" value="Appliquer" />
            </p>
    </fieldset>
    
</form>