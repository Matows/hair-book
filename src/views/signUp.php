<?php 
if (isset($_SESSION["userLogedIn"]) and !$_SESSION["userLogedIn"]) {
	echo "<section class='form-center'>";
	echo "<h2>Connectez vous</h2>";
	afficheFormSignUp();
	?>
	<p>Or</p>
	<button type="button" onclick="location.href='index.php?page=login'">Se connecter</button>
	<?php
	echo "</section>";
}
?>