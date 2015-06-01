<?php
    $msg_erreur = "Erreur. Les champs suivants doivent être obligatoirement remplis :";
    $msg_ok = "Votre demande a bien été prise en compte.";
    $message = $msg_erreur;
    
    if (empty($_POST['name']))
    {
        $message .= "Votre nom";
    }

    if (empty($_POST['surname']))
    {
        $message .= "Votre prénom";
    }

    if (empty($_POST['birth']))
    {
        $message .= "Votre date de naissance<br/>";
    }

    if (empty($_POST['pseudo']))
    {
        $message .= "Votre pseudo";
    }
    
    if (empty($_POST['password']))
    {
        $message .= "Votre mot de passe";
    }

    if (empty($_POST['confirm_password']))
    {
        $message .= "Confirmez votre mot de passe";
    }
    
    if (empty($_POST['street']))
    {
        $message .= "Votre rue";
    }

    if (empty($_POST['town']))
    {
        $message .= "Votre ville";
    }

    if((strlen(password) > 3) AND (strlen(password) < 15))
    {
        $message = "Votre mot de passe ne correspond pas au format demandé";

        if($_POST['pasword'] != $_POST['confirm_pasword'])
            {
                $message = "Vos deux mots de passe ne correspondent pas";
            }
    
        if($_POST['mail'] != $_POST['confirm_email'])
        {
            $message = "Vos deux adresses mail ne correspondent pas";
        }
    
        if (strlen($message) > strlen($msg_erreur))
        {
            echo $message;
        } 
        else
        {
            foreach($_POST as $index => $valeur)
            {
                $$index = mysql_real_escape_string(trim($valeur));
            }
        }
        
        $sql = "INSERT INTO user('','user_login','user_password,'user_name','user_surname','user_mail','user_birth', 'user_sup', 'user_town', 'user_street',user_region','user_photo','user_phone') VALUES ('', '".$login."','".$password."','".$name."','".$surname."','".$birth."','".$sup."','".$town."','".$street."',  '".$photo."','".$phone."')";
        $res = mysql_query($sql);
     
        if ($res)
        {
            echo $msg_ok;
        }
        else
        {
            echo mysql_error();
        }
    }
?>
