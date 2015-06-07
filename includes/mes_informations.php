<div id="profil_data">

    <div class="titre"> Mes informations</h2> </div>

        <div class="bloc">
            <img  src="images/profil.png" class="imageflottante" alt="profil" id="profil" width="30" /><div class= "decalage">Pseudo :</div> <br>     <div class="donnee"> <?php echo $_SESSION['pseudo'] ?> </div> <br>
        </div>

        <div class="bloc">
           <img  src="images/profil.png" class="imageflottante" alt="profil" id="profil" width="30" /><div class= "decalage">Nom :</div> <br>     <div class="donnee"> <?php echo $data['user_name'] ?> </div> <br>
        </div>

        <div class="bloc">
            <img  src="images/profil.png" class="imageflottante" alt="profil" id="profil" width="30" /><div class= "decalage">Prénom :</div> <br>     <div class="donnee"> <?php echo $data['user_surname'] ?> </div> <br>
        </div>

        <div class="bloc">
            <img  src="images/profil_mail.png" class="imageflottante" alt="mail" id="mail" width="30" /><div class= "decalage"> E-mail : </div> <br>     <div class="donnee"> <?php echo $data['user_mail'] ?> </div> <br>
        </div>

        <div class="bloc">
            <img  src="images/calendar.png" class="imageflottante" alt="calendar" id="calendar" width="30" /><div class= "decalage"> Date de naissance : </div> <br>     <div class="donnee"> <?php echo $data['user_birth'] ?> </div> <br>
        </div>

        <div class="bloc">
            <img  src="images/region.png" class="imageflottante" alt="region" id="region" width="30" /><div class= "decalage">Adresse : </div><br> <br>     <div class="donnee"> <?php echo $data['user_street'] ?> <?php echo $data['user_town'] ?> <?php echo $data['user_region'] ?> </div> <br>
        </div>

        <div class="bloc">
            <img  src="images/phone.png" class="imageflottante" alt="phone" id="phone" width="30" /><div class= "decalage">Téléphone : </div><br> <br>     <div class="donnee"> <?php echo $data['user_phone'] ?> </div> <br>
        </div>

</div>