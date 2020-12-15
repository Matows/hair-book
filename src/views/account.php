<?php 
if (isset($_SESSION["userLogedIn"]) and $_SESSION["userLogedIn"] ){
	global $conn;
	?>
	<h2>Votre Profil</h2>
	<?php 
	echo "<p>Votre pseudo : ".getUsername($conn,$_SESSION["idUser"]) . "</p>";
	echo "<p>Votre email : ".getmail($conn,$_SESSION["idUser"]) . "</p>";
	?>
	<h3>Déconnexion</h3>
	<button type="button" onclick="location.href='index.php?logout=true'">Logout</button>
	<?php
}
?>
