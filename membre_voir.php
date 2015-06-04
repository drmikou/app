<?php
    session_start();
    $titre = "Administration";
    include("includes/start.php");
?>


    <body>
<?php
    if($admin == 1)
    {
?>

		<?php include("includes/membre_voir.php"); ?>




        <!-- Footer-->
        <?php include("includes/footer.php"); ?>
    </body>

    
<?php
    }else{
        echo "Vous n'êtes pas un administrateur! Veuillez vous connecter svp.";
    }
?>

</html>