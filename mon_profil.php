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

    <!-- Mes informations --> 
    <?php include("includes/database_profil.php"); ?>

    <div id="mon_profil">
        <?php include("includes/mon_profil.php"); ?>
    </div>   

    <script type="text/javascript">
        afficher_cacher('mon_profil');
    </script> 

	
</body>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    

</html>
