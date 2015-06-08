<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
    <fieldset>
        <legend>Voir les membres</legend>

            <p>
                <label for="membre_search">Voir le membre</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="membre_search" id="membre_search" value=""/>
            </p>
            
            <p>
                <input type="submit" name="submit" value="Afficher le membre" />
            </p>

            <p>
                <a href="" onClick="javascript:window.history.go(-1)">Retour à la page précédente</a> 
            </p>
    
