
	<?php
	include("database_connection.php");
	?>
	
	<form method="post" action="new_password.php" enctype="multipart/form-data">
	
	<label for="email">* Rentrez votre adresse email :</label>  <input name="email" type="email" id="email" /><br/>
	<p><input type="submit" name="valider" value="Lancer la reinitialisation de mot de passe" /></p>

	<?php
		if (isset($_POST['email']))
		{
			$email = $_POST['email'];
		
			function generer_mot_de_passe($nb_caractere)
			{
				$mot_de_passe = "";
			   
				$chaine = "abcdefghjkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ02346789";
				$longeur_chaine = strlen($chaine);
		   
				for($i = 1; $i <= $nb_caractere; $i++)
				{
					$place_aleatoire = mt_rand(0,($longeur_chaine-1));
					$mot_de_passe .= $chaine[$place_aleatoire];
				}

				return $mot_de_passe;   		
			}
			
			generer_mot_de_passe(10);
			$mdp = generer_mot_de_passe(10);
			
			if($email !=null)
			{
				$query= $db->prepare('UPDATE user SET user_password = :mdp WHERE user_mail= :mail');
				$query->execute(array('mdp'=> $mdp ,'mail'=> $email)); // Exécute la préparation
				
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

$mail->Subject = 'Changement de votre mot de passe';
$mail->Body    = 'Bonjour nous vous envoyons un mail faisant suite a votre demande de changement de mot de passe. Votre nouveau mot de passe est : '.stripslashes(htmlspecialchars ($mdp)).'. Vous pourrez le changer a tout moment une fois connecte sur notre site. Bonne continuation ! De la part de toute l\equipe VegATable!';
				  

$mail->AltBody = 'Le mail est envoyé';

if(!$mail->send()) {
    echo 'Le message n\'a pas été envoyé, vérifiez votre adresse email.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Un mail pour recuperer votre mot de passe a ete envoye a votre adresse mail.';
}

			}
			else
			{
				echo "Le champ est vide";
				
			}
		}
	?>

   
	




	

	
    
