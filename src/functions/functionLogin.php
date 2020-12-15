<?php
global $conn;

function chargeusers($conn){
	global $conn;
	$sql="SELECT * FROM users";
	$result=  mysqli_query($conn, $sql);


	$tableau = [];
	while ($row=mysqli_fetch_assoc($result)) {
		$tableau[] = $row;
	}
	return $tableau;
}

 
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
	$sql="SELECT client.id FROM hairbook WHERE client.username = '$user';";
    $result =  mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row["id"];
}



function getpassword($users,$user){
	foreach ($users as $id => $userdata) {
		if ($user==$userdata["username"]) {
			$password=$userdata["password"];
		}

	}
	return $password;
}

function insertUser($username,$nom,$passwd){
	global $conn;
	$sql="INSERT INTO `username` (`ìd_profile`,`nom`,`passwd`,`username`) VALUES (0,'$nom','$passwd','username');";
	var_dump($sql);
	mysqli_query($c, $sql);

}

function afficheNomChamp(){
	echo "<p>";
	if (isset($_SESSION["nom"]) && $_SESSION["nom"]=='error'){
		echo "<input class='formInput errorFormulaire' type='text' name='nom' id='nom' placeholder='nom'>";
	}
	
	elseif (!isset($_SESSION["nom"])) {
		echo "<input class='formInput' type='text' name='nom' id='nom' placeholder='nom'>";
	}
	
	else{
		echo "<input class='formInput' type='text' name='nom' id='nom' placeholder='nom' value=".$_SESSION["nom"].">";
	}
	echo "</p>";
}

function afficheUserNameChamp(){
	echo "<p>";

	if (isset($_SESSION["username"]) && $_SESSION["username"]=='error'){
		echo "<input class='formInput errorFormulaire' type='username' name='username' id='username' placeholder='username'>";
	}

	elseif (!isset($_SESSION["username"])) {
		echo "<input class='formInput' type='username' name='username' id='username' placeholder='username'>";
	}

	else{
		echo "<input class='formInput' type='username' name='username' id='username' placeholder='username' value=".$_SESSION["username"].">";
	}
	echo "</p>";

}

function affichePasswordChamp(){
	echo "<p>";

	if (isset($_SESSION["passwd"]) && $_SESSION["passwd"]=='error'){
		echo "<input class='formInput errorFormulaire' type='password' name='passwd' id='passwd' placeholder='Password'>";
	}

	elseif (!isset($_SESSION["passwd"])) {
		echo "<input class='formInput' type='password' name='passwd' id='password' placeholder='passwd'>";
	}

	else{
		echo "<input class='formInput' type='password' name='passwd' id='passwd' placeholder='passwd' value=".$_SESSION["passwd"].">";
	}
	echo "</p>";
}


function afficheFormSignUp(){
	echo "<section class='form-center'>";
	echo "<article>";
	echo "<h2>S'inscrire</h2>";
	echo "<form action='index.php' method='post'>";

	afficheUserChamp();

	afficheMailChamp();
	
	affichePasswordChamp();
	
	echo "<p>";
	echo "<input type='submit' value='SignUp' name='connect'>";
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

	afficheUserChamp();

	affichePasswordChamp();

	echo "<p>";
	echo "<input type='submit' value='Login' name='connect'>";
	echo "</p>";
	echo "</form>";
	echo "</article>";
	echo "</section>";
}




?>