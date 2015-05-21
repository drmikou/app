 <article2>
 <!-- FORMULAIRE -->
    <form method="get" action="recherche.php">
      Recherche:
      <input type="text" name="barre_recherche"/>
      <input type="submit" value="Recherche!"/>
     </form> 
         <?php
            $table=$titre;
            include("includes/search.2.php"); 
        ?>
 </article2>
