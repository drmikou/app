<div id="profil_data">

    <?php
        if(isset($id))
        {
            $query= $db->prepare('SELECT * FROM user WHERE user_id= :id');        //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
            $query->bindValue('id',$id, PDO::PARAM_STR);             //PDOStatement::bindValue — Associe une valeur à un paramètre
            $query->execute(); // Exécute la préparation
            $data = $query->fetch();
        }
    ?>

    <div class="titre">  Mon profil </div>

        <div class="bloc"> 
             <img  src="images/profil.png" class="imageflottante" alt="profil" id="profil" width="30" /><div class= "decalage">Pseudo :</div> <br>     <div class="donnee"> <?php echo $_SESSION['pseudo'] ?> </div> <br>
        </div>

        <div class="bloc">
             <img  src="images/profil_mail.png" class="imageflottante" alt="mail" id="mail" width="30" /><div class= "decalage"> E-mail : </div><br>     <div class="donnee"> <?php echo $data['user_mail'] ?> </div> <br>
        </div>

        <div class="bloc">
              <img  src="images/region.png" class="imageflottante" alt="region" id="region" width="30" /><div class= "decalage">Ma région : </div><br>     <div class="donnee"> <?php echo $data['user_region'] ?> </div> <br>
        </div>

        <div class="bloc">
              <img  src="images/note.png" class="imageflottante" alt="note" id="note" width="30" /><div class= "decalage">Ma note : </div><br>     <div class="donnee"> <?php echo $data['user_rate'] ?> </div> <br>
        </div>

        <div class="bloc">
            Ma photo : <br> <br>
        </div>

</div>