<?php
    session_start();
    $titre = "Messages";
    include("includes/start.php");
?>
    <body>
		<div id="bloc_page">    
			<!-- Corps de l'accueil-->	            
			<section>
				<article>
					<h1>Mes messages</h1>
					<p>les infos</p>
					<p></p>
				</article>

				<!-- Aside-->
				<?php include("includes/aside.php"); ?>
			</section>
		</div>
                
		<!-- Footer-->
		<?php include("includes/footer.php"); ?>	
		
    </body>
</html>
