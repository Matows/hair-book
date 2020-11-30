<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Hair-Book </title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
		<h1 id="Titre">Hair-Cut</h1>
		<aside>
			<ul class="Admin"><li>Administration</li></ul>
		</aside>
		<nav>
			<ul class="Menu-Deroul">
				<li>Rendez-Vous</li>
				<li>Présentation</li>
				<li>Prestations</li>
				<li>Contact</li>
			</ul>
		</nav>
		<section>
			<!-- Si $PAGE vaut Présentation on affiche les horraires sur la droite de la page -->
			<?php
				if ($PAGE=presentation){
				<div>lorem ipsum</div>

					echo'<aside class="Horaires">';
					include 'src/views/$PAGE';
					<br/>
					<br/>
					include 'src/views/plan.php';
					echo(</aside>);
									   }
			?>
			<!-- Fin Présentation -->
			<!-- Page Personnel-->
			<?php
				if ($PAGE=personnel){
					echo'<section>';
					include'src/views/$PAGE'
					echo'</section>';
									}
			<!--Fin Page Personnel -->
			?>
			<!-- Page Profil Capilaire-->
			<?php 
				if ($PAGE=reservation){
					<!-- Tableau de préstation là-->
					echo'<section>';
						include'src/views/$Page'
					echo'</section>';
									}

			?>
			<?php 
				if ($PAGE=Formulaire){
					include 'src/views/$PAGE'
									}
			?>
			<?php 
				if ($PAGE=CompteClient){
				include'src/views/$PAGE'
			}
			?>
		</section>
	<footer>
		<section>
		</section>
	</footer>
</body>
</html>