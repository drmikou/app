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

    <div class="titre"> Mon profil</h2> </div>

        <div class="bloc">
            Pseudo : <br>     <div class="donnee"> <?php echo $_SESSION['pseudo'] ?> </div> <br>
        </div>

        <div class="bloc">
             E-mail : <br>     <div class="donnee"> <?php echo $data['user_mail'] ?> </div> <br>
        </div>

        <div class="bloc">
             Ma région : <br>     <div class="donnee"> <?php echo $data['user_region'] ?> </div> <br>
        </div>

        <div class="bloc">
             Ma note : <br>     <div class="donnee"> <?php echo $data['user_rate'] ?> </div> <br>
        </div>

        <div class="bloc">
            Ma photo : <br> <br>
        </div>

</div>