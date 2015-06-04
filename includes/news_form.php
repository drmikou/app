<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
    <fieldset>
        <legend>Les actualités</legend>
            <p>
                <label for="news_check">Voir toutes les actualités</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="checkbox" name="news_check" id="news_check" value="" />
            </p>

            <p>
                <label for="news_search">Titre de l'article</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="news_search" id="news_search" value=""/>
            </p>
            
            <p>
                <input type="submit" name="submit" value="Afficher l'actualité" />
            </p>
    </fieldset>
    
</form>