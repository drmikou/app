<?php
    session_start();
    $titre = "Mon profil";
    include("includes/start.php");
?>

<body>
	<div id="bloc_page">
        <h1>Votre compte</h1>

        <!-- Côté du profil-->  
        <?php include("includes/aside_profil.php"); ?>

        <!-- Mes informations --> 
        <?php include("includes/database_profil.php"); ?>
        <?php include("includes/mon_profil.php"); ?>
            
	</div>
</body>

        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
        
    

</html>
