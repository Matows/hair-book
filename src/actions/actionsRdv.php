<?php
$erreurs=array();
if (bonnePrestation()&&bonnePersonne()&&bonTpsRdv()) {
	if (isset($_POST['profilCap'])&&bonProfCap()) {
		createRdv($_POST['prestations'], $_POST['dateRdv'], $_SESSION['client']['id'], $personnel, $_POST['profilCap']);
	}
	else {
		createRdv($_POST['prestations'], $_POST['dateRdv'], $_SESSION['client']['id'], $personnel);
	}
}
else {
	$_SESSION['erreur']=$erreurs;
}

//header('Location:./index.php?page=rdv');
function bonnePrestation()
{
	global $_prestations;
	if (!(isset($_POST['prestations'])&&array_key_exists($_POST['prestations'], $_prestations))) {
		$erreurs[]='prestations';
		return False;
	}
	return True;
}

function bonnePersonne()
{
	global $_liste_personnel;
	$valCurr="any";
	if (isset($_POST['hairdresser'])) {
		$personnel=$_POST['hairdresser'];
		$valCurr="hairdresser";
	}
	elseif (isset($_POST['visagiste'])) {
		$personnel=$_POST['visagiste'];
		$valCurr="visagiste";
	}
	if (isset($personnel)) {
		foreach ($_liste_personnel as $checkP) {
			if ($checkP['nom']==$personnel) {
				return True;
			}
		}
	}
	$erreurs[]=$valCurr;
	return False;
}

function bonTpsRdv()
{
	if (isset($_POST['dateRdv'])&& is_available()) {
		return True;
	}
	$erreurs[]='dateRdv';
	return False;
}

function bonProfCap()
{
	if (isset($_POST['profilCap'])) {
		$profCaps=getProfilsCaps();
		while ($profil=mysqli_fetch_assoc($profCaps)) {
			if ($_POST['profilCap']=$profil['longueur'].", ".$profil['qualite'].", ".$profil['couleur']) {
				return True;
			}
		}
	}
	$erreurs[]='profilCap';
	return False;
}
function getProfilsCaps()
{
	global $conn;
	$client=$_SESSION['idCompteConnecte'];
	$sql = 'SELECT client.id,nom,longueur,qualite,couleur FROM client JOIN profilCap ON client.id_profile=profilCap.id WHERE client.id = ' . $client;
	$res=mysqli_query($conn, $sql);
	return $res;
}
