<?php
global $conn;

if (!isset($_SESSION["userLogedIn"])){
	$_SESSION["userLogedIn"]=false;
	$_SESSION["username"]="";
}


if (isset($_GET) && isset($_PAGE)){
	$_PAGE=$_GET["page"];
}else{
	$_PAGE="accueil";
}


if (isset($_POST) && isset($_POST["connect"]) && $_POST["connect"]=="Login") {

	$users=chargeusers($conn);
	$errorInForm=False;
	
	if (isset($_POST["username"]) && trim($_POST["username"]) && isuser($users,$_POST["username"])) {
		$_SESSION["username"]=htmlspecialchars($_POST["username"],ENT_QUOTES);
	}else{
		$_SESSION["username"]="error";
		$errorInForm=True;
	}


	if (!$errorInForm &&isset($_POST["passwd"]) && trim($_POST["passwd"]) && password_verify($_POST["passwd"], getpassword($users,$_SESSION["username"]))) {
		$_SESSION["userLogedIn"]=true;
		$_SESSION["idUser"]=getUserID($conn,$_SESSION["username"]);
		header("Location: ./index.php?page=accueil");
	}else{
		$_SESSION["passwd"]="error";
		$errorInForm=True;
	}
	
	if ($errorInForm){
		var_dump(isuser($users,$_POST["username"]));
		var_dump(password_verify($_POST["password"], getpassword($users,$_SESSION["username"])));
		header("Location: ./index.php?page=login&signoption=in&error=true");
	}


}


if ( isset($_POST) && isset($_POST["connect"]) && $_POST["connect"]=="SignUp") { 
	$users=chargeusers($conn);
	$errorInForm=False;

	if (isset($_POST["name"]) && trim($_POST["name"]) && !isuser($users,$_POST["name"])) {
		$_SESSION["name"]=htmlspecialchars($_POST["name"],ENT_QUOTES);
	}else{
		$_SESSION["name"]="error";
		$errorInForm=true;
	}


	if (isset($_POST["username"]) && trim($_POST["username"]) && preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $_POST["username"])) {
		$_SESSION["username"]=htmlspecialchars($_POST["username"],ENT_QUOTES);
	} else {
		$_SESSION["username"]="error";
		$errorInForm=true;
	}
}


if (isset($_POST["passwd"]) && trim($_POST["passwd"])) {
	$_SESSION["passwd"]=$_POST["passwd"];
}else{
	$_SESSION["passwd"]="error";
	$errorInForm=true;
}


if (!$errorInForm) {
	insertUser($conn,$_SESSION["username"],$_SESSION["nom"]);
	
	unset($_SESSION['nom']);
	unset($_SESSION['passwd']);
	
	$_SESSION["userLogedIn"]=false;
	header("Location: ./index.php?page=login&signoption=in");
	
} else{
	header("Location: ./index.php?page=login&signoption=up&error=true");
}

//si on veut se déconnecter
if (isset($_GET) && isset($_GET["logout"]) && $_GET["logout"] == "true") {
	$_SESSION["userLogedIn"]=false;
	$_SESSION["username"]="";
	$_SESSION["idUser"]=-1;
	header("Location: ./index.php");
}
