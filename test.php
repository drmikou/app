<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
		<!-- Champ Login -->
					<p>
						<label for="login">Ajouter un fruit :</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
						<input type="text" name="add" id="add" value="<?php if(!empty($_POST['login'])){echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>"/>
					</p>

					<!-- Champ Password -->
					<p>
						<label for="password">Mot de passe :</label> 
		            	<input type="password" name="password" id="password" value="" />
					</p>
					<p>
		            	<input type="submit" name="submit" value="Identification" />
		            </p>
</form>
