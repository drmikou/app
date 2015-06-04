<?php
    session_start();
    $titre = "Actualité";
    include("includes/start.php");
?>

    <body>
    	<div id="news_voir">

    		<!-- Formulaire -->
			<?php include("includes/news_form.php"); ?>
		
			<!-- Traitement -->
   			<?php include("includes/news.php"); ?>
   			
   		</div>
   
	</body>
        <?php include("includes/footer.php"); ?>
 

</html>