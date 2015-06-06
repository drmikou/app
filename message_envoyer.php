<?php
    session_start();
    $titre = "Envoyer un message";
    include("includes/start.php");
?>


    <body>

    	<div id="message_envoyer">
			<?php include("includes/message_envoyer.php"); ?>
		</div>


        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
    </body>


</html>