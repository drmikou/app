<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">

    <fieldset>
        <legend>Choisir un fruit / légume</legend>
            <p>
                <label for="login"> Fruit / légume :</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="add" id="add" value=""/>
            </p>

            <p>
                <label for="nbr">Quantité :</label> 
                <input type="number" name="nbr" id="kg" value="" min="0" />
                    kg
                <input type="number" name="nbr" id="g" value="" min="0" />
                    g
            </p>

            <p>
                <input type="submit" name="submit" value="Ajouter au panier" />
            </p>
    </fieldset>
    
</form>
