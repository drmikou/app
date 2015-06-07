<?php
    session_start();
    $titre = "Changer mes informations";
    include("includes/start.php");
?>


    <body>

    	<div id="message_envoyer">
			<?php include("includes/changer_info.php"); ?>
		</div>


        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
    </body>


</html>