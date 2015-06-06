<?php
    session_start();
    $titre = "Mon profil";
    include("includes/start.php");
?>

<body>

	<div id="bloc_page">
        <h1>Votre compte</h1>
    </div>

    <!-- Côté du profil-->  
        <?php include("includes/aside_profil.php"); ?>


    <!-- Mon profil public --> 
        <?php include("includes/database_profil.php"); ?>

        <div id="mon_profil_public">
            <?php include("includes/mon_profil_public.php"); ?>
        </div>   

        <script type="text/javascript">
            afficher_cacher('mon_profil_public');
        </script> 


    <!-- Mes informations --> 
        <div id="mes_informations">
            <?php include("includes/mes_informations.php"); ?>
        </div>   

        <script type="text/javascript">
            afficher_cacher('mes_informations');
        </script>

    <!-- Boite de réception --> 
        <div id="message_voir">
            <?php include("includes/message_voir.php"); ?>
        </div>   

        <script type="text/javascript">
            afficher_cacher('message_voir');
        </script>
	

    <!-- Envoyer un messsage --> 
        <div id="message_envoyer">
            <?php include("includes/message_envoyer.php"); ?>
        </div>   

        <script type="text/javascript">
            afficher_cacher('message_envoyer');
        </script>

</body>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    

</html>
