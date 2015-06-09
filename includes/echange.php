<?php // VISITEUR
    if($id==0)
    {
    ?>
        <br><?php 
                  include("includes/echange_baniere.php"); 
                  include("includes/echange_recherche.php"); 
/*                  include("includes/echange_affichage.php");*/
    }
    else // Membre du site
    {
        include("includes/echange_baniere.php");
        include("includes/echange_form.php");
        include("includes/echange_recherche.php"); 
/*        include("includes/echange_affichage.php");*/ ?>

<?php
}
?> 
