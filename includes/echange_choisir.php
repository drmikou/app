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

        <div class="dropper">
            <div class="draggable">pomme</div>
            <div class="draggable">#2</div>
        </div>

        <div class="dropper">
            <div class="draggable">#3</div>
            <div class="draggable">#4</div>
        </div>

        <script>
            (function() {
        
                var dndHandler =
                {   // Fonction du drag & drop
                    draggedElement: null,                 

                    applyDragEvents: function(element)      // -------- Rend déplaçable element --------
                    {
                        element.draggable = true;
                        var dndHandler = this;              // Cette variable est nécessaire pour que l'événement "dragstart" ci-dessous accède facilement au namespace "dndHandler"
                
                        element.addEventListener('dragstart', function(e)
                        {
                            dndHandler.draggedElement = e.target; // On sauvegarde l'élément en cours de déplacement
                            e.dataTransfer.setData('text/plain', 'document.write(this.id);'); // Nécessaire pour Firefox
                        }, false);
                
                    },
     
                    applyDropEvents: function(dropper)
                    {
                        dropper.addEventListener('dragover', function(e)
                        {
                            e.preventDefault();                     // On autorise le drop d'éléments
                            this.className = 'dropper drop_hover';  // Et on applique le design adéquat à notre zone de drop quand un élément la survole
                        }, false);
                
                        dropper.addEventListener('dragleave', function()
                        {
                            this.className = 'dropper'; // On revient au design de base lorsque l'élément quitte la zone de drop
                        });
                
                        var dndHandler = this; // Cette variable est nécessaire pour que l'événement "drop" ci-dessous accède facilement au namespace "dndHandler"

                        dropper.addEventListener('drop', function(e)
                        {
                            var target = e.target,
                            draggedElement = dndHandler.draggedElement,         // 1) Récupération de l'élément concerné
                            clonedElement = draggedElement.cloneNode(true);     // 2) On créé immédiatement le clone de cet élément
                    
                            while(target.className.indexOf('dropper') == -1)    // Cette boucle permet de remonter jusqu'à la zone de drop parente
                            { 
                                target = target.parentNode;
                            }

                            target.className = 'dropper';                       // 3) Application du design par défaut
                    
                            clonedElement = target.appendChild(clonedElement);  // 4) Ajout de l'élément cloné à la zone de drop actuelle
                            dndHandler.applyDragEvents(clonedElement);          // 5) Nouvelle application des événements qui ont été perdus lors du cloneNode()
                    
                            draggedElement.parentNode.removeChild(draggedElement); // 6) Suppression de l'élément d'origine
                            alert(e.dataTransfer.getData('text/plain')); // Affiche le contenu du type MIME « text/plain »
                        });
                    }
                };
        
                var elements = document.querySelectorAll('.draggable'),
                elementsLen = elements.length;
        
                for(var i = 0 ; i < elementsLen ; i++)
                {
                    dndHandler.applyDragEvents(elements[i]); // Application des paramètres nécessaires aux élément déplaçables
                }
        
                var droppers = document.querySelectorAll('.dropper'),
                droppersLen = droppers.length;
        
                for(var i = 0 ; i < droppersLen ; i++)
                {
                    dndHandler.applyDropEvents(droppers[i]); // Application des événements nécessaires aux zones de drop
                }

            })();
        </script>
        
        <p>
            <input type="submit" name="submit" value="Ajouter au panier" />
        </p>

    </fieldset>
    
</form>
