<?php
    session_start();
    $titre = "Inscription";
    include("includes/start.php");
    if ($id!=0){
        erreur(ERR_IS_CO);
    }
?>

<!-- CONNEXION A LA DB -->
<?php
	include("includes/database_connection.php");
	?>


    <body>
		<div id="bloc_page">    
			<!-- Corps de l'inscription'-->	            
			<section>
				<article>
					<h1>Inscription</h1>

					<!-- FORMULAIRE-->	  
					²<?php
						if (empty($_POST['pseudo'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
						{
					
?>
							<form method="post" action="inscription.php" enctype="multipart/form-data">

								<fieldset><legend>Identité </legend>
									<label for="name">* Nom :</label>  <input name="name" type="text" id="name" /><br/>
									<label for="surname">* Prénom :</label>  <input name="surname" type="text" id="surname" /><br/>
									<label for="birth">* Date de naissance:</label>  <input name="birth" type="date" id="birth" /><br/>
								</fieldset>

								<fieldset><legend>Identifiants</legend>
									<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" /> (le pseudo doit contenir entre 3 et 15 caractères)<br/>
									<label for="password">* Mot de Passe : </label><input type="password" name="password" id="password" /><br/>
									<label for="confirm">* Confirmer le mot de passe : </label><input type="password" name="confirm" id="confirm"/>
								</fieldset>
									
								<fieldset><legend>Adresse</legend>
									<label for="street">*Rue : </label><input type="text" name="street" id="street" />
									<label for="sup">Complément d'adresse : </label><input type="text" name="sup" id="sup" /> <br/>
									<label for="town">* Ville : </label><input type="text" name="town" id="town" />
                                                                        <label for="Département">* Département : </label>
                                                                            <select name="dep">
                                                                                <?php
                                                                                $reponse = $db->query('SELECT * FROM departement'); // requête sql "selectionne tout dans la table region"
                                                                                        // On affiche chaque entrée une à une
                                                                                        while ($donnees = $reponse->fetch()){
                                                                                            $print='<option accesskey=""value="'.$donnees['departement_nom'].'">'.$donnees['departement_nom'].'</option>';
                                                                                            echo $print;
                                                                                        }
                                                                                        $reponse->closeCursor(); // Termine le traitement de la requête
                                                                                 ?>
                                                                            </select>             
								</fieldset>
								
								<fieldset><legend>Contacts</legend>
									<label for="email">* Votre adresse Mail : </label><input type="email" required name="email" id="email" /><br/>
									<label for="phone">Votre numéro de téléphone: </label><input type="tel" name="phone" id="phone" /><br/>
								</fieldset>


								<!--<fieldset><legend>Profil sur le forum</legend>
									<<label for="avatar">Choisissez votre avatar :</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko<br />
									<label for="signature">Signature :</label><textarea cols="40" rows="4" name="signature" id="signature">La signature est limitée à 200 caractères</textarea>
								</fieldset>-->

								<p>Les champs précédés d un * sont obligatoires</p>
								<p><input type="submit" name="valider" value="S'inscrire" /></p>
							</form>
						<?php
						
						}
						
						
							
							
							// Déclaration des variables 
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
                                                    
                                                   
						
					?>	
                                        
                                      
?>
					<?php // Récupération des variables
					if(isset($_POST['valider'])){
						
						    $i = 0;
						    $temps = time();
							 if(isset($_POST['pseudo'])){
								 $pseudo = $_POST['pseudo'];
							 }
                            if (isset($_POST['password'])){
								$password = $_POST['password'];
							}
                            if (isset($_POST['email'])){
								$email = $_POST['email'] ;
							}
							if (isset($_POST['confirm'])){
								$confirm = $_POST['confirm'];
							}
							if (isset($_POST['street'])){
								$street = $_POST['street'];
							}
							if (isset($_POST['town'])){
								$town = $_POST['town'] ;
							}
							if (isset($_POST['sup'])){
								$sup = $_POST['sup'];
							}
							if (isset($_POST['name'])){
								$name = $_POST['name'] ;
							}
							if (isset($_POST['surname'])){
								$surname = $_POST['surname'];
							}
							if (isset($_POST['birth'])){
								$birth = $_POST['birth'];
							}
							if(isset($_POST['phone'])){
								$phone = $_POST['phone'];
							}
							
							$dep = $_POST['dep'];
							
							
						
                                                    
                                                    
						

					   //Vérification du pseudo
    $query=$db->prepare('SELECT COUNT(*) AS nbr FROM user WHERE user_login = :pseudo');
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
    if ($_POST['password'] != $_POST['confirm'] || empty($_POST['confirm']) || empty($_POST['password']))
    {
        $mdp_erreur = "Votre mot de passe et votre confirmation de mot de passe ne correspondent pas ou ne sont pas remplis";
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
	?>
	
	<?php
 //Il faut que l'adresse email n'ait jamais été utilisée

    $query=$db->prepare('SELECT COUNT(*) AS nbr FROM user WHERE user_email =:email');

    $query->bindValue(':email',$email, PDO::PARAM_STR);

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

        echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['pseudo'])).' vous êtes maintenant inscrit sur le site VegATable !</p>

    <p>Cliquez <a href="./home.php">ici</a> pour retourner sur la page d\'accueil.</p>';
	
 
	$query=$db-> prepare ('INSERT INTO user(user_login,user_password,user_name,user_surname,user_mail,user_birth, user_sup, user_town, user_street,user_phone, user_region) VALUES (:pseudo,:password, :name, :surname, :email,:birth,:sup,:town,:street,:phone, :dep)');
    
	$query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);

    $query->bindValue(':password', $password, PDO::PARAM_INT);

    $query->bindValue(':email', $email, PDO::PARAM_STR);

    $query->bindValue(':street', $street, PDO::PARAM_STR);

    $query->bindValue(':town', $town, PDO::PARAM_STR);

    $query->bindValue(':sup', $sup, PDO::PARAM_STR);

    $query->bindValue(':name', $name, PDO::PARAM_STR);

    $query->bindValue(':surname', $surname, PDO::PARAM_STR);
    
    $query->bindValue(':birth', $birth, PDO::PARAM_STR);
    
    $query->bindValue(':phone', $phone, PDO::PARAM_STR);
	
	$query->bindValue(':dep', $dep, PDO::PARAM_STR);
    
     $query->execute();
      
      $_SESSION['pseudo'] = $pseudo;

      $_SESSION['id'] = $db->lastInsertId(); ;

        $query->CloseCursor();
		
		
		
<<<<<<< HEAD
		require 'phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;


		$mail->isSMTP();                                      
		$mail->Host = 'smtp.gmail.com';  
		$mail->SMTPAuth = true;                               
		$mail->Username = 'veegatable@gmail.Com';                 
		$mail->Password = 'lestomatescbon';                           
		$mail->SMTPSecure = 'tls';                            
		$mail->Port = 587;                                    

		$mail->From = 'Support@VegATable.com'; 
		$mail->FromName = 'VegATable';
		$mail->addAddress($email);     

		$mail->isHTML(true);                                  

		$mail->Subject = 'Confirmation de votre inscription a la communaute VegATable';
		$mail->Body    = 'Bonjour '.stripslashes(htmlspecialchars($_POST['name'])).' '.stripslashes(htmlspecialchars($_POST['surname'])).', nous avons le plaisir de confirmer votre inscription à la communaute VegATable dédiee aux achats et echanges de fruits et legumes proches de votre region !';
						  

		$mail->AltBody = 'Le mail est envoyé';

		if(!$mail->send())
		{
		    echo 'Le message n\'a pas été envoyé, vérifiez votre adresse email.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
		else
		{
		    echo 'Un mail de confirmation a été envoyé à votre adresse email.';
		}
=======
require 'includes/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;


$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'veegatable@gmail.Com';                 
$mail->Password = 'lestomatescbon';                           
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                                    

$mail->From = 'Support@VegATable.com'; 
$mail->FromName = 'VegATable';
$mail->addAddress($email);     

$mail->isHTML(true);                                  

$mail->Subject = 'Confirmation de votre inscription a la communaute VegATable';
$mail->Body    = 'Bonjour '.stripslashes(htmlspecialchars($_POST['name'])).' '.stripslashes(htmlspecialchars($_POST['surname'])).', nous avons le plaisir de confirmer votre inscription à la communaute VegATable dédiee aux achats et echanges de fruits et legumes proches de votre region !';
				  

$mail->AltBody = 'Le mail est envoyé';

if(!$mail->send()) {
    echo 'Le message n\'a pas été envoyé, vérifiez votre adresse email.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Un mail de confirmation a été envoyé à votre adresse email.';
}
>>>>>>> origin/master
   }
   else
   {
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

       

        echo'<p>Cliquez <a href="./inscription.php">ici</a> pour recommencer</p>';

    }


					}
?>
   
    

                                        
                                        
                              
					

				</article>
			</section>
		</div>

			</body>		
		<!-- Footer-->
		<?php include("includes/footer.php"); ?>	
		
		</html>
                
						
						
						

