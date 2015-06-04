<?php
    session_start();
    $titre = "Actualité";
    include("includes/start.php");
?>

    <body>

    	<!-- Formulaire -->
		<?php include("includes/news_form.php"); ?>

		<!-- Traitement -->
   		<?php include("includes/news.php"); ?>
   
   
   </body>
        <?php include("includes/footer.php"); ?>
 

</html>