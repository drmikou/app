<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Page de connexion</title>
        <?php session_start(); ?>
    </head>
    
    <body>
	   <!-- Header -->
        <?php include("header.php"); ?>
        
        <!-- Corps de la connexion-->
        <article>
            <?php include("identifiants.php"); ?>
            <?php include("login.php"); ?>
        </article>

        <!-- Footer-->
        <?php include("footer.php"); ?>
        
    </body>

</html>
