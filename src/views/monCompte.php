<section>
	<?php
		if($_SESSION['connected']==False){
			affichenonconnect();
		}
		else{
			afficheconnect();
			affichechoixconnect();
		}
	?>
</section>
<?php
function affichenonconnect(){
	echo "<div class='box' class='has-background-danger-light'>";
	echo "<h4 class='title' class='has-background-danger'>vous n'etes pas connecter</h4>";
	echo "</div>";	
}

function afficheconnect(){
	$nom = $_SESSION['username'];
	echo "<div class='hero-body'>";
    echo "<div class='container has-text-centered'>";
    echo "<h2 class='title' class='has-text-centered' class='has-text-primary'>".$nom."</h2>";
    echo "</div>";
	echo "</div>";

}

function affichechoixconnect(){
	echo "<div class='hero-foot'>";
	echo "<nav class='tabs is-boxed is-fullwidth'>";
	echo "<div class='container'>";
	echo "<ul>";
	echo "<li class='is-active'>";
	echo "<h2>nom</h2>";
	echo "</li>";
	echo "<li>";
	echo "<h2>profil capilaire</h2>";
	echo "</li>";
	echo "</ul>";
	echo "</div>";
	echo "</nav>";
	echo "</div>";
}
?>