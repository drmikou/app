<!-- TRAITEMENT-->	  
					<?php
                                        }
						else 
						{	// Déclaration des variables 
						    $pseudo_erreur1 = NULL;
						    $pseudo_erreur2 = NULL;
						    $mdp_erreur = NULL;
						    $email_erreur1 = NULL;
                                                    $email_erreur2 = NULL;
                                                    $birth_erreur = NULL ;
                                                    $street_erreur = NULL ; 
                                                    $town_erreur = NULL ;
                                                    $surname_erreur = NULL ;
                                                    $name_erreur = NULL ;
                                                    
                                                    
						}
					?>	
                                        
                                      
?>
					<?php // Récupération des variables
						if (!empty($_POST['name']) || !empty($_POST['surname']) || !empty($_POST['birth'])  )
						{
						    $i = 0;
						    $temps = time();
						    $name = $_POST['name'];
						    $surname = $_POST['surname'];
						    $birth = $_POST['birth'];
						    $pseudo = $_POST['pseudo'];
						    $password = $_POST['password'];
						    $street = $_POST['street'];
						    $sup = $_POST['sup'];
						    $town = $_POST['town'];
						    $email = $_POST['email'];
                                                    
                                                    
						}

					   //Vérification du pseudo
    $query=$db->prepare('SELECT COUNT(*) AS nbr FROM user WHERE user_login =:pseudo');
    $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
    $query->execute();
    $pseudo_free=($query->fetchColumn()==0)?1:0;
    $query->CloseCursor();
    if(!$pseudo_free)
    {
        $pseudo_erreur1 = "Votre pseudo est déjà utilisé par un membre";
        $i++;
    }

    if (strlen($pseudo) < 3 || strlen($pseudo) > 15)
    {
        $pseudo_erreur2 = "Votre pseudo ne correspond pas au format demandé";
        $i++;
    }

    //Vérification du mdp
    if ($pass != $confirm || empty($confirm) || empty($pass))
    {
        $mdp_erreur = "Votre mot de passe et votre confirmation ne correspondent pas ou ne sont pas remplis";
        $i++;
    }
    
    if (empty($_POST['name']))
    { $name_erreur = 'Les champs suivants doivent être obligatoirement remplis :
    <br/><br/>Votre nom';
    $i++;
    }
    if (empty($_POST['surname']))
    {$surname_erreur = "Erreur. Les champs suivants doivent être obligatoirement remplis :
    <br/><br/>Votre prénom<br/>";
    $i++;
    }
    if (empty($_POST['birth']))
    { 
        $birth_erreur = 'Erreur. Les champs suivants doivent être obligatoirement remplis :
    Votre date de naissance';
    $i++;
    }
    if (empty($_POST['street']))
    {$street_erreur = "Erreur. Les champs suivants doivent être obligatoirement remplis :
    <br/><br/>Votre rue<br/>";
    $i++;
    }
    if (empty($_POST['town']))
    {
       $town_erreur = 'Erreur. Les champs suivants doivent être obligatoirement remplis :
    <br/><br/>Votre ville<br/>';
    $i++;
    }
 //Il faut que l'adresse email n'ait jamais été utilisée

    $query=$db->prepare('SELECT COUNT(*) AS nbr FROM user WHERE user_email =:mail');

    $query->bindValue(':mail',$email, PDO::PARAM_STR);

    $query->execute();

    $mail_free=($query->fetchColumn()==0)?1:0;

    $query->CloseCursor();

    

    if(!$mail_free)

    {

        $email_erreur1 = 'Votre adresse email est déjà utilisée par un membre';

        $i++;

    }
    ?>
    
    <?php

   if ($i==0)

   {

    echo'<h1>Inscription terminée</h1>';

        echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['pseudo'])).' vous êtes maintenant inscrit sur le forum</p>

    <p>Cliquez <a href="./connexion.php">ici</a> pour vous connecter</p>';

 
    
    
 $query=$db-> prepare ('INSERT INTO user(user_login,user_password,user_name,user_surname,user_mail,user_birth, user_sup, user_town, user_street,user_region,user_photo,user_phone) VALUES (:pseudo,:password,:name,:surname,:birth,:sup,:town,:street,:photo,:phone)');
       $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);

    $query->bindValue(':password', $password, PDO::PARAM_INT);

    $query->bindValue(':email', $email, PDO::PARAM_STR);

    $query->bindValue(':street', $street, PDO::PARAM_STR);

    $query->bindValue(':town', $town, PDO::PARAM_STR);

    $query->bindValue(':sup', $sup, PDO::PARAM_STR);

    $query->bindValue(':photo', $photo, PDO::PARAM_STR);

    $query->bindValue(':name', $name, PDO::PARAM_STR);

    $query->bindValue(':surname', $surname, PDO::PARAM_STR);
    
    $query->bindValue(':birth', $birth, PDO::PARAM_STR);
    
    $query->bindValue(':phone', $phone, PDO::PARAM_STR);
    
     $query->execute();
      
      $_SESSION['pseudo'] = $pseudo;

      $_SESSION['id'] = $db->lastInsertId(); ;

        $query->CloseCursor();
   }
   else{
        echo'<h1>Inscription interrompue</h1>';

        echo'<p>Une ou plusieurs erreurs se sont produites pendant l incription</p>';

        echo'<p>'.$i.' erreur(s)</p>';

        echo'<p>'.$pseudo_erreur1.'</p>';

        echo'<p>'.$pseudo_erreur2.'</p>';

        echo'<p>'.$mdp_erreur.'</p>';

        echo'<p>'.$email_erreur1.'</p>';

        echo'<p>'.$street_erreur.'</p>';

        echo'<p>'.$birth_erreur.'</p>';

        echo'<p>'.$town_erreur.'</p>';

        echo'<p>'.$name_erreur.'</p>';

        echo'<p>'.surname_avatar_erreur.'</p>';

        echo'<p>'.$avatar_erreur3.'</p>';

       

        echo'<p>Cliquez <a href="./register.php">ici</a> pour recommencer</p>';

    }



?>
   }
    
?>
