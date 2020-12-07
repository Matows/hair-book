<?php
$erreurs=[]
if (bonnePrestation()&&bonnePersonne()&&bonTpsRdv()) {
	if (isset($_POST['profilCap'])&&bonProfCap()) {
		createRdv($_POST['prestations'], $_POST['dateRdv'], $_SESSION['client']['id'], $personnel, $_POST['profilCap']);
	}
	else {
		createRdv($_POST['prestations'], $_POST['dateRdv'], $_SESSION['client']['id'], $personnel);
	}
}
else {
	$_SESSION['erreur']=$erreurs
	header('Location:./index.php?page=rdv')
}


function bonnePrestation()
{
	if !(isset($_POST['prestations'])&&array_key_exists($_POST['prestations'], $_prestations)) {
		$erreurs=$erreurs+['prestations'];
		return False;
	}
	return True;
}

function bonnePersonne()
{
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
	$erreurs=$erreurs+[$valCurr];
	return False;
}

function bonTpsRdv()
{
	if (isset($_POST['dateRdv'])&& is_available()) {
		return True;
	}
	$erreurs=$erreurs+['dateRdv'];
	return False;
}

function bonProfCap()
{
	if (isset($_POST['profilCap'])) {
		$profCaps=getProfilsCaps();
		while ($profil=mysqli_fetch_assoc($profCaps)) {
			if ($_POST['profilCap']=$profil['longueur'].", ".$profil['qualite'].", ".$profil['couleur']) {
				return True
			}
		}
	}
	$erreurs=$erreurs+['profilCap'];
	return False;
}

function getProfilsCaps()
{
	global $db;
	$sql="SELECT $_SESSION['idCompteConnecte'] FROM client";
	$res=mysqli_query($db, $sql);
	$client=mysqli_fetch_assoc($res);
	$client=$client['id'];	
	$sql="SELECT * FROM profilCap WHERE `id_client`=$client";
	$res=mysqli_query($db, $sql);
	return $res
}