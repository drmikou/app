<?php
        include("includes/database_connection.php");
    ?>

                        <table>
                            <tr>
                                <td>
                                    <table border="1" >
                                        <tr>
                                            <td>             
                                                 <select name="département">
                                                  <?php
                                                    $reponse = $db->query('SELECT * FROM fruitslegumes ORDER BY FruitsLegumes_nom'); // requête sql "selectionne tout dans la table region"
                                                    // On affiche chaque entrée une à une
                                                    while ($donnees = $reponse->fetch()){
                                                       $print='<option accesskey=""value="'.$donnees['FruitsLegumes_nom'].'">'.$donnees['FruitsLegumes_nom'].'</option>';
                                                            echo $print;
                                                    }
                                                    $reponse->closeCursor(); // Termine le traitement de la requête
                                                     ?>
                                                </select>
                                            </td>
                                            <td> <input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" />  </td>
                                        </tr>
                                        <tr>
                                            <td>             
                                                 <select name="département">
                                                  <?php
                                                    $reponse = $db->query('SELECT * FROM fruitslegumes ORDER BY FruitsLegumes_nom'); // requête sql "selectionne tout dans la table region"
                                                    // On affiche chaque entrée une à une
                                                    while ($donnees = $reponse->fetch()){
                                                       $print='<option accesskey=""value="'.$donnees['FruitsLegumes_nom'].'">'.$donnees['FruitsLegumes_nom'].'</option>';
                                                            echo $print;
                                                    }
                                                    $reponse->closeCursor(); // Termine le traitement de la requête
                                                     ?>
                                                </select>
                                            </td>
                                            <td> <input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /> </td>
                                        </tr>
                                    </table>
                                </td>

                                <td><img src="images/fleche.jpg" width="50" heigh="50"/></td>

                                <td>
                                    <table border="1" >
                                        <tr>
                                            <td>             
                                                 <select name="département">
                                                  <?php
                                                    $reponse = $db->query('SELECT * FROM fruitslegumes ORDER BY FruitsLegumes_nom'); // requête sql "selectionne tout dans la table region"
                                                    // On affiche chaque entrée une à une
                                                    while ($donnees = $reponse->fetch()){
                                                       $print='<option accesskey=""value="'.$donnees['FruitsLegumes_nom'].'">'.$donnees['FruitsLegumes_nom'].'</option>';
                                                            echo $print;
                                                    }
                                                    $reponse->closeCursor(); // Termine le traitement de la requête
                                                     ?>
                                                </select>
                                            </td>
                                            <td><input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /></td>
                                        </tr>
                                        <tr>
                                            <td>             
                                                 <select name="département">
                                                  <?php
                                                    $reponse = $db->query('SELECT * FROM fruitslegumes ORDER BY FruitsLegumes_nom'); // requête sql "selectionne tout dans la table region"
                                                    // On affiche chaque entrée une à une
                                                    while ($donnees = $reponse->fetch()){
                                                       $print='<option accesskey=""value="'.$donnees['FruitsLegumes_nom'].'">'.$donnees['FruitsLegumes_nom'].'</option>';
                                                            echo $print;
                                                    }
                                                    $reponse->closeCursor(); // Termine le traitement de la requête
                                                     ?>
                                                </select>
                                            </td>
                                            <td><input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /></td>

                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
