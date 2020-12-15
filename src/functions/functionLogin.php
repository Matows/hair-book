<?php
//charge les utilisateurs
function chargeusers(){
	//requete
	global $conn;
	$sql="SELECT * FROM client";
	$result=  mysqli_query($conn, $sql);

	//on met dans un tableau
	$tableau = [];
	while ($row=mysqli_fetch_assoc($result)) {
		$tableau[] = $row;
	}
	return $tableau;
}

//verifie si user existe 
function isuser($users,$user){
	$exist=false;
	foreach ($users as $id => $userdata) {
		if ($user==$userdata["username"]) {
			$exist=true;
		}
	}
	return $exist;
}

function getUserID($user){
	global $conn;
	$sql="SELECT client.id FROM users WHERE client.username = '$user';";
    $result =  mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row["id"];
}


//recupère le password de user
function getpassword($users,$user){
	foreach ($users as $id => $userdata) {
		if ($user==$userdata["username"]) {
			$password=$userdata["password"];
		}

	}
	return $password;
}

function insertUser($username,$name){
	global $conn;
	$sql="INSERT INTO `client` (`id`,`id_profile`,`nom`,`passwd`, `username`) VALUES (NULL,0,'$name','$passwd','$username');";
	var_dump($sql);
	mysqli_query($conn, $sql); //on fait la requete

}
function afficheUserChamp(){
	echo "<p>";
	//si il y a une erreur dans le champ
	if (isset($_SESSION["username"]) && $_SESSION["username"]=='error'){
		echo "<input class='formInput errorFormulaire' type='text' name='username' id='username' placeholder='Username'>";
	}
	//si c'est la première fois que la page est chargée
	elseif (!isset($_SESSION["username"])) {
		echo "<input class='formInput' type='text' name='username' id='username' placeholder='Username'>";
	}
	//si la champs est valide
	else{
		echo "<input class='formInput' type='text' name='username' id='username' placeholder='Username' value=".$_SESSION["username"].">";
	}
	echo "</p>";
}


function afficheNameChamp(){
	echo "<p>";
	//si il y a une erreur dans le champ
	if (isset($_SESSION["name"]) && $_SESSION["name"]=='error'){
		echo "<input class='formInput errorFormulaire' type='text' name='name' id='name' placeholder='Username'>";
	}
	//si c'est la première fois que la page est chargée
	elseif (!isset($_SESSION["name"])) {
		echo "<input class='formInput' type='text' name='username' id='name' placeholder='name'>";
	}
	//si la champs est valide
	else{
		echo "<input class='formInput' type='text' name='name' id='name' placeholder='name' value=".$_SESSION["name"].">";
	}
	echo "</p>";
}
function afficheMailChamp(){
	echo "<p>";
	//si il y a une erreur dans le champ
	if (isset($_SESSION[""]) && $_SESSION["mail"]=='error'){
		echo "<input class='formInput errorFormulaire' type='text' name='nom' id='nom' placeholder='Name'>";
	}
	//si c'est la première fois que la page est chargée
	elseif (!isset($_SESSION["mail"])) {
		echo "<input class='formInput' type='mail' name='mail' id='mail' placeholder='Mail'>";
	}
	//si la champs est valide
	else{
		echo "<input class='formInput' type='mail' name='mail' id='mail' placeholder='Mail' value=".$_SESSION["mail"].">";
	}
	echo "</p>";

}

function affichePasswordChamp(){
	echo "<p>";
	//si il y a une erreur dans le champ
	if (isset($_SESSION["passwd"]) && $_SESSION["passwd"]=='error'){
		echo "<input class='formInput errorFormulaire' type='password' name='passwd' id='passwd' placeholder='Password'>";
	}
	//si c'est la première fois que la page est chargée
	elseif (!isset($_SESSION["password"])) {
		echo "<input class='formInput' type='password' name='passwd' id='passwd' placeholder='Password'>";
	}
	//si la champs est valide
	else{
		echo "<input class='formInput' type='password' name='passwd' id='passwd' placeholder='Password' value=".$_SESSION["passwd"].">";
	}
	echo "</p>";
}


function afficheFormSignUp(){
	echo "<section class='form-center'>";
	echo "<article>";
	echo "<h2>Sign up</h2>";
	echo "<form action='index.php' method='post'>";
	//user
	afficheUserChamp();
	//mail
	afficheMailChamp();
	//password
	affichePasswordChamp();
	//submit bouton
	echo "<p>";
	echo "<input type='submit' value='SignUp' name='wantToLog'>";
	echo "</p>";
	echo "</form>";
	echo "</article>";
	echo "</section>";
}


function afficheFormMDP(){
	echo "<section class='form-center'>";
	echo "<article>";
	echo "<h2>Login</h2>";
	echo "<form action='index.php' method='post'>";
	//user
	afficheUserChamp();
	//password
	affichePasswordChamp();
	//submit bouton
	echo "<p>";
	echo "<input type='submit' value='Login' name='wantToLog'>";
	echo "</p>";
	echo "</form>";
	echo "</article>";
	echo "</section>";
}




?>