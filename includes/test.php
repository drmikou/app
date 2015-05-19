<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">

	<!-- Champ Login -->
	<p>
		<label for="login">Ajouter un fruit :</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
		<input type="text" name="add" id="add" value=""/>
	</p>

	<!-- Champ quanité -->
	<p>
		<label for="nbr">Quantité :</label> 
		<input type="number" name="nbr" id="password" value="" />
	</p>

	<!-- Validation -->
	<p>
		<input type="submit" name="submit" value="Identification" />
	</p>

</form>