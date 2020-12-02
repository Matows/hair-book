<section>
	<?php
		include("formulaire_choix.php");
	?>
	<?php
		if (formulaire_choix_submit='choix_formulaire_connection') {
			include("formulaire_capilaire.php");
		}
		include ("formulaire_paliraire_nonconnect.php");
	?>
</section>