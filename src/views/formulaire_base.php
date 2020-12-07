<section>
	<?php
		include("formulaire_choix.php");
	?>
	<?php
		if (isset($_POST['choix_formulaire_connection'])) {
			include("formulaire_capilaire.php");
		}
		else{	
			include ("formulaire_paliraire_nonconnect.php");
			}
	?>
</section>