<?php
global $conn;
//initialise la session comme non login
if (!isset($_SESSION["userLogedIn"])){
	$_SESSION["userLogedIn"]=false;
	$_SESSION["username"]="";
}

//si on veut se connecter
if (isset($_POST) && isset($_POST["wantToLog"]) && $_POST["wantToLog"]=="Login") {
	//on charge les users
	$users=chargeusers($conn);
	$errorInForm=False;
	//on recupère l'username et on vérifie si il n'y a pas d'erreurs
	if (isset($_POST["username"]) && trim($_POST["username"]) && isuser($users,$_POST["username"])) {
		$_SESSION["username"]=htmlspecialchars($_POST["username"],ENT_QUOTES);
	}else{
		$_SESSION["username"]="error";
		$errorInForm=True;
	}

	//même chose pour le mot de passe
	if (!$errorInForm &&isset($_POST["passwd"]) && trim($_POST["passwd"]) && password_verify($_POST["passwd"], getpassword($users,$_SESSION["username"]))) {
		$_SESSION["userLogedIn"]=true;
		$_SESSION["id"]=getUserID($conn,$_SESSION["username"]);
		header("Location: ./index.php?page=accueuil");
	}else{
		$_SESSION["passwd"]="error";
		$errorInForm=True;
	}
	
	if ($errorInForm){
		var_dump(isuser($users,$_POST["username"]));
		var_dump(password_verify($_POST["passwd"], getpassword($users,$_SESSION["username"])));
		header("Location: ./index.php?page=login&signoption=in&error=true");
	}


}

//si on veut se creer un compte
if ( isset($_POST) && isset($_POST["wantToLog"]) && $_POST["wantToLog"]=="SignUp") { 
	$users=chargeusers($c);
	$errorInForm=False;
	//on recupère l'username et on vérifie si il n'y a pas d'erreurs
	if (isset($_POST["username"]) && trim($_POST["username"]) && !isuser($users,$_POST["username"])) {
		$_SESSION["username"]=htmlspecialchars($_POST["username"],ENT_QUOTES);
	}else{
		$_SESSION["username"]="error";
		$errorInForm=true;
	}

	//même chose pour le nom
	if (isset($_POST["name"]) && trim($_POST["name"]) && preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $_POST["name"]) && mailIsValid($users,$_POST["name"])) {
		$_SESSION["name"]=htmlspecialchars($_POST["name"],ENT_QUOTES);
	}else{
		$_SESSION["name"]="error";
		$errorInForm=true;
	}

	//même chose pour le mot de passe
	if (isset($_POST["passwd"]) && trim($_POST["passwd"])) {
		// on hash le mdp
		$hash=crypt($_POST["passwd"],"ddazddfzeà+@Qé&kç6djopv4k8kr");
		$_SESSION["passwd"]=$_POST["passwd"];
	}else{
		$_SESSION["passwd"]="error";
		$errorInForm=true;
	}

	//si les champs sont valides
	var_dump($errorInForm);
	if (!$errorInForm) {
		//on ajoute l'user
		insertUser($c,$_SESSION["username"],$_SESSION["name"],$hash);
		//on detruit les variables de sessions inutiles
		unset($_SESSION['name']);
		unset($_SESSION['passwd']);
		//on reviens sur la page login, connecté 
		$_SESSION["userLogedIn"]=false;
		header("Location: ./index.php?page=login&signoption=in");
		
	}
	else{
		header("Location: ./index.php?page=login&signoption=up&error=true");
	}
		
}

//si on veut se déconnecter
if (isset($_GET) && isset($_GET["logout"]) && $_GET["logout"] == "true") {
		$_SESSION["userLogedIn"]=false;
		$_SESSION["username"]="";
		$_SESSION["idUser"]=-1;
		header("Location: ./index.php");
}
?>
