<?php
    session_start();
    $titre = "Panier";
    include("includes/start.php");
?>
    <body>

    	<!-- Corps du panier -->
	    	<div id="bloc_page">
				<section>
					<article>
						<form>
							<h1> Mon panier</h1>
							<table>
			                    <tr><td><img src="images/user.png" alt="" width="100" heigh="100" /></td>
			                        <td><p>offre: xxx</p></td>
			                        <td>quantité demandée: X</td>
			                        <td><a href="#" class="ajout_panier"> <img src="images/delete.gif" alt="" id="bouton_supression" /></a></td>
			                    </tr>
			                    <tr><td><img src="images/user.png" alt="" width="100" heigh="100" /></td>
			                        <td><p>offre: xxx</p></td>
			                        <td>quantité demandée: X</td>
			                        <td><a href="#" class="ajout_panier"> <img src="images/delete.gif" alt="" id="bouton_supression" /></a></td>
			                    </tr>
			                    <tr><td><img src="images/user.png" alt="" width="100" heigh="100" /></td>
			                        <td><p>offre: xxx</p></td>
			                        <td>quantité demandée: X</td>
			                        <td><a href="#" class="ajout_panier"> <img src="images/delete.gif" alt="" id="bouton_supression" /></a></td>
			                    </tr>
			                </table>
						</form>
	           		</article>

	            	<!-- Aside-->
					<?php include("includes/aside.php"); ?>

				</section>
			</div>

		<!-- Footer-->
		<?php include("includes/footer.php"); ?>
			
    </body>
</html>