<div id="bloc_chat" class="centrage">
	<article>
		<?php // VISITEUR
			if($id==0)
			{
		?>
				<div id="chat">					
				<?php
					$allmsg = $db->query('SELECT * FROM chat ');
					while($msg = $allmsg->fetch())
					{
				?>
						<b>
							<?php echo $msg['chat_pseudo'];?> :</b> <?php echo date($msg['chat_date']) ; ?> <?php echo $msg['chat_message']; ?>
						<br>
				<?php
					}
				?>
				</div>
		<?php
			}
			else
			{
		?>
				<div id="chat">					
				<?php
					$allmsg = $db->query('SELECT * FROM chat ');
					while($msg = $allmsg->fetch())
					{
				?>
						<b>
							<?php echo $msg['chat_pseudo']; ?> :</b> <?php echo date($msg['chat_date']) ; ?>   	<?php echo $msg['chat_message']; ?>
						<br>
				<?php
					}
				?>
					</div>
						<div id="saisie_chat" >
							<b><?php if(isset($pseudo)){ echo $pseudo ;}?></b>
							<form method="post" action=""> 
								<textarea type="text" name="message" placeholder"MESSAGE"></textarea><br>
								<input type="submit" value="Envoyer" />					
							</form>
						</div>
		<?php
			}
		?> 
	</article>
</div>
