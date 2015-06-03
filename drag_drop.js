(function()
{

    var dndHandler =
    {	// Fonction du drag & drop
      
        applyDragEvents: function(element)		// -------- Rend déplaçable element --------
        {
        	element.draggable = true;

        	var dndHandler = this;								// Cette variable est nécessaire pour que l'événement « dragstart » accède facilement au namespace « dndHandler »

        	element.addEventListener('dragstart', function(e)
        	{
            	dndHandler.draggedElement = e.target; 				// On sauvegarde l'élément en cours de déplacement	/ The target event property returns the element that triggered the event.
            	e.dataTransfer.setData('text/plain', '');			// Nécessaire pour Firefox
        	}, false);


        applyDropEvents: function(dropper)		// -------- Gère les évènements au niveau des zones de drop --------
        {
        	dropper.addEventListener('dragover', function(e)	// Lorsqu'on passe sur la zone
        	{
            	e.preventDefault();									// On autorise le drop d'éléments  / preventdefault() :the default action of the event will not be triggered.
            	this.className = 'dropper drop_hover';				// Et on applique le style adéquat à notre zone de drop quand un élément la survole
        	}, false);
        
        	dropper.addEventListener('dragleave', function()	// Lorsqu'on quitte la zone
        	{
            	this.className = 'dropper';							// On revient au style de base lorsque l'élément quitte la zone de drop
        	});

        	dropper.addEventListener('drop', function(e)		// Lorsqu'on lache l'élément
        	{
    			var target = e.target,
        		draggedElement = dndHandler.draggedElement,			// 1) Récupération de l'élément concerné
        		clonedElement = draggedElement.cloneNode(true);		// 2) Création d'un clone de l'élément 			/ cloneNode(): Create a deep copy of the set of matched elements.
    			target.className = 'dropper';						// 3) Application du style par défaut sur l'élément
    			clonedElement = target.appendChild(clonedElement);	// 4) Ajout de l'élément cloné à la zone de drop actuelle
    			dndHandler.applyDragEvents(clonedElement); 			// 5) Nouvelle application des événements qui ont été perdus lors du cloneNode() / cloneNode() ne conserve pas les événements.
    			draggedElement.parentNode.removeChild(draggedElement); // 6) Suppression de l'élément d'origine
    		});
    	}	

    };

    // Utilise les fonctions

    var elements = document.querySelectorAll('.draggable'),
     elementsLen = elements.length;

    for (var i = 0 ; i < elementsLen ; i++) {
        dndHandler.applyDragEvents(elements[i]); // Application des paramètres nécessaires aux éléments déplaçables
    }

    var droppers = document.querySelectorAll('.dropper'),
        droppersLen = droppers.length;

    for (var i = 0 ; i < droppersLen ; i++) {
        dndHandler.applyDropEvents(droppers[i]); // Application des événements nécessaires aux zones de drop
    }

})();