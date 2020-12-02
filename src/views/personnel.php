<section>
	<h1>Présentation du personnel :</h1>
	<div>
		<div>
			<h2>Directeur</h2>
			<p>nomDirecteur</p>
			<img src="<?= $_STATIC ?>/img/directeur.jpg"></img>
		</div>
		<div>
			<?php 
				foreach ($_liste_coiffeur as $nom) {
					echo'<table class="employes">';
					echo '<tr>';
					echo '<th class="titre">'.array_keys($_liste_coiffeur, $key, TRUE)[0].'</th>';
			        echo '</tr>';
    			    echo '<tr>';
        			echo '<td class="description" rowspan=2>'.$key['description'].'</td>';
        			echo '<td class="prix">'.$key['prix'].'</td>';
        			echo '</tr>';
        			echo '<tr>';
        			echo '<td class="type cheveux">'.$key['type cheveux'].'</td>';
        			echo '</tr>';
        			echo "</table>";
    }    

				}


			?>
			<?php /* <h2>Employés :</h2>
			<ul>
				<li>
					employé1
				</li>
				<li>
					employé2
				</li>
				<li>
					employé3
				</li>
				<li>
					employé4
				</li>
				<li>
					employé5
				</li>
			</ul> */?>
		</div>
	</div>
</section>
