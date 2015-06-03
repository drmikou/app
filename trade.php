<?php
include("header.php");
TestIsConnected();
if (isset($_SESSION['login'])) {
    $user = selectUsersNonConnecte($_SESSION['login']);
    $transaction = "echange";
}
?>
<div id="bloc_page">

    <div id="banniere_image">
        <div id="banniere_description">
            <a href="panier.php" class="bouton_rouge">Voir Panier <img src="images/ico_liensexterne.png" alt="" /></a>
        </div>
    </div>

    <section>
        <div class="row">

            <article class="col-md-12 col-xs-12 ">
                <table border="0">
                    <tr>
                        <td><img src="images/user.png" alt="Image flottante2" class="img-circle img-responsive" width="60" heigh="60"></td>
                        <td><h1><?php
                                if (isset($_SESSION['nom_prenom'])) {
                                    echo $_SESSION['nom_prenom'];
                                }
                                ?></h1></td>
                    </tr>
                </table> 

                <hr>

                <form class="form-horizontal " action="#" method="POST">
                    <input type="text" value="<?php echo $_SESSION['login']; ?>" id="user" hidden disabled>
                    <div class="form-group">
                        <label for="inputQuantite" class="col-sm-2 control-label">Produit:</label>

                        <div class="col-sm-4">                            
                            <select name="nature" class="form-control" id="nature1" required>
                                <option value="" selected>Nature du produit</option>
                                <option value="legumes">Légumes</option>
                                <option value="fruits">Fruits</option>
                            </select>
                        </div> 
                        <label  for="inputQuantite" class="col-sm-1 control-label"></label>

                        <div class="col-sm-4">
                            <select name="produit" class="form-control" id="produit1"  required>
                                <option value="" selected="selected">Choisir...</option>

                                <?php
                                $prod = AfficherProduitsByUser($_SESSION['login']/* , $nature */);
                                while ($row = $prod->fetch_array()) {
                                    ?>
                                    <option class="conditional <?php echo $row['nature']; ?>" value="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></option>

                                <?php } ?>
                            </select> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputQuantite" class="col-sm-2 control-label">Quantité:</label>
                        <div class="col-sm-4">
                            <input type="number" max="" min="1" value="" class="form-control" id="quantite" name="quantite" required/>
                        </div>
                        <label for="inputQuantite" class="col-sm-1 control-label">Kg</label>

                    </div>
                    <hr>
                    <center> <h2><b><p>AVEC</p></b></h2></center>
                    <hr>
                    <div class="form-group">
                        <label for="user2" class="col-sm-2 control-label">Proprietaire:</label>

                        <div class="col-sm-4">                            
                            <select name="proprietaire" class="form-control" id="user2" required>
                                <?php
                                while ($row = $user->fetch_array()) {
                                    ?>
                                    <option value="<?php echo $row['id'] ?>">
                                        <?php echo $row['login']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="inputProduit" class="col-sm-2 control-label">Produit:</label>

                        <div class="col-sm-4">                            
                            <select name="nature2" class="form-control" id="nature2" required>
                                <option value="" selected >Nature du produit</option>
                                <option value="legumes">Légumes</option>
                                <option value="fruits">Fruits</option>
                            </select>
                        </div> 


                        <div class="col-sm-4">
                            <select name="produit2" class="form-control" id="produit2"  required>
                                <option value="" selected="selected" >Choisir...</option>

                                <?php
                                $prod2 = AfficherProduits();
                                while ($row = $prod2->fetch_array()) {
                                    ?>
                                    <option class="conditional <?php echo $row['nature'] . $row['user']; ?>" value="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></option>
                                <?php } ?>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputQuantite" class="col-sm-2 control-label">Quantité:</label>
                        <div class="col-sm-4">
                            <input type="number" value="" class="form-control" id="inputQuantite" name="quantite2" required/>
                        </div>
                        <label for="inputQuantite" class="col-sm-1 control-label">Kg</label>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-7 col-sm-4">
                            <button name="submit" type="submit" class="btn btn-default">Valider</button>
                        </div>
                    </div>

                </form>

            </article>



        </div>
    </section>
</div>



<?php
if (isset($_SESSION['login'])) {
    $user = selectUsersNonConnecte($_SESSION['login']);
}

if (isset($_POST['submit'])) {
    $quantite1 = $_POST['quantite'];
    $produit1 = $_POST['produit'];
    $nature1 = $_POST['nature'];
    $quantite2 = $_POST['quantite2'];
    $proprietaire = $_POST['proprietaire'];
    $produit2 = $_POST['produit2'];
    $nature2 = $_POST['nature2'];
    AjouterTransaction($_SESSION['login'], $proprietaire, $transaction,$quantite1,$quantite2,$produit1,$produit2,$nature1,$nature2);
    echo "<script type='text/javascript'>alert('Votre demande est trasférée ');</script>";
    
    
}

include("footer.php");
