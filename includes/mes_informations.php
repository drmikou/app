<div id="profil_data">

    <div class="titre"> Mes informations</h2> </div>

        <div class="bloc">
            <b> Pseudo : </b> <br>     <div class="donnee"> <?php echo $_SESSION['pseudo'] ?> </div> <br>
        </div>

        <div class="bloc">
           <b> Nom :    </b> <br>     <div class="donnee"> <?php echo $data['user_name'] ?> </div> <br>
        </div>

        <div class="bloc">
            <b> Prénom : </b> <br>     <div class="donnee"> <?php echo $data['user_surname'] ?> </div> <br>
        </div>

        <div class="bloc">
            <b> E-mail : </b> <br>     <div class="donnee"> <?php echo $data['user_mail'] ?> </div> <br>
        </div>

        <div class="bloc">
            <b> Date de naissance : </b> <br>     <div class="donnee"> <?php echo $data['user_birth'] ?> </div> <br>
        </div>

        <div class="bloc">
            <b> Adresse : </b> <br>     <div class="donnee"> <?php echo $data['user_adress'] ?> </div> <br>
        </div>

        <div class="bloc">
            <b> Téléphone : </b> <br>     <div class="donnee"> <?php echo $data['user_phone'] ?> </div> <br>
        </div>

</div>