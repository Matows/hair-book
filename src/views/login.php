<?php 
if (!isset($_SESSION['idUser']) or $_SESSION['idUser']=-1){
	afficheFormMDP();
	unset($_SESSION['username']);
	unset($_SESSION['mail']);
	unset($_SESSION['password']);
	?>
	<p>Or</p>
	<button type="button" onclick="location.href='index.php?page=signUp'">S'inscrire</button>
	<?php
}
else{header("Location: ./index.php?page=accueil");}
?>