<div id="affichage echanges">					
	<?php
	$allech = $db->query('SELECT * FROM echange ');
	while($ech = $allech->fetch())
	{
	?>
		<div id="affiche_echange">
			<h4><?php echo $ech['echange_pseudo']; ?> : <?php echo date($ech['echange_date']) ; ?></h4>
			<div id="bloc_echange">								
				<div class="bloc_echange1">
					<?php echo $ech['echange_prod1']; 
						  echo $ech['echange_qte_prod1'] ;
						  echo '<img src="images/fruits_legumes/'.$ech["echange_prod1"].'.jpg" title="'.$ech["echange_prod1"].'"alt="Image 														flottante2" width="150" heigh="150" />';
					?>	
				</div>
				<!--<div id="fleche">
				<img src="images/fleche.jpg" title=""alt="Imageflottante2" width="100" heigh="100" />
				</div>-->
				<div class="bloc_echange2">
					<?php echo '<img src="images/fruits_legumes/'.$ech["echange_prod2"].'.jpg" title="'.$ech["echange_prod2"].'"alt="Image flottante2" width="150" heigh="150" />';
						  echo $ech['echange_prod2']; 
						  echo $ech['echange_qte_prod2']; ?>	
				</div>
			</div>
				<div id="bloc_commentaire">
					<br><?php echo $ech['echange_commentaire']; ?>	
				</div>	
		</div>			
	<?php
	}
	?>
</div>
