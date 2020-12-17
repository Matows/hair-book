<?php
$erreursRdv=array();
if (bonnePrestation()&&bonnePersonne()&&bonTpsRdv()&&bonProfCap()) 
	{
		if (isset($_POST['hairdresser'])) {
			$personnel=$_POST['hairdresser'];
		}
		else {
			$personnel=$_POST['visagiste'];
		}
		createRdv($_POST['prestations'], $_POST['dateRdv'], $_SESSION['idCompteConnecte'], $personnel, $_POST['profilCap']);
	}


else if(bonnePrestation() && bonnePersonne()&& bonTpsRdv() &&bonneCreationProfCap()) 
{
	if (isset($_POST['hairdresser'])) {
		$personnel=$_POST['hairdresser'];
	}
	else {
		$personnel=$_POST['visagiste'];
	}
	$qualite=$_POST['qualite'];
	$longueur=$_POST['longueur'];
	$couleur=$_POST['couleur'];
	$stringRet="".$_POST['longueur'].", ".$_POST['qualite'].", ".$_POST['couleur'];
	$sql="INSERT INTO profilCap(`longueur`, `qualite`,`couleur`) VALUES ('$longueur','$qualite','$couleur');";
	mysqli_query($conn,$sql);
	if(!isset($_SESSION['connected'])){$_SESSION['connected']=False;}
	if(!isset($_SESSION['idCompteConnecte'])){$_SESSION['idCompteConnecte']=1;}
	if ($_SESSION['connected']) {
		
		$sql2="SELECT * FROM profilCap WHERE (`longueur` ,`qualite`,`couleur`)=('$longueur', '$qualite', '$couleur');";
		$res=mysqli_query($conn,$sql2);
		$row=mysqli_fetch_assoc($res);
		$idProfileCaps=$row['id'];
		$usrId=$_SESSION['idCompteConnecte'];
		$sql3="UPDATE `client` SET `id_profile` = '$idProfileCaps' WHERE `id` = '$usrId';";
		mysqli_query($conn,$sql3);

		}
	createRdv($_POST['prestations'], $_POST['dateRdv'], $_SESSION['idCompteConnecte'], $personnel, $stringRet);
}
else{
	
	$_SESSION['erreur']=$erreursRdv;
}
function bonneCreationProfCap()
{
	global $_type_cheveux;
	// var_dump(isset($_POST['qualite']),isset($_POST['longueur']),isset($_POST['couleur']));
	if (isset($_POST['qualite'])&&isset($_POST['longueur'])&&isset($_POST['couleur'])) {
		if (in_array($_POST['qualite'], $_type_cheveux['qualité']) && in_array($_POST['longueur'], $_type_cheveux['longueur'])&&in_array($_POST['couleur'], $_type_cheveux['couleur'])){
			return True;
		}
	}
	$erreursRdv[]="Création Profil Capilaire";
	return False;
}
//header('Location:./index.php?page=rdv');
function bonnePrestation()
{
	global $_prestations;
	if (!isset($_POST['prestations'])) {
		$erreursRdv[]='prestations';
		return False;
	}
	else if (!array_key_exists($_POST['prestations'], $_prestations)) {
		$erreursRdv[]='prestations';
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
	else if (isset($_POST['visagiste'])) {
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
	$erreursRdv[]=$valCurr;
	return False;
}

function bonTpsRdv()
{
	if (isset($_POST['dateRdv'])) {
		return True;
	}
	$erreursRdv[]='dateRdv';
	return False;
}

function bonProfCap()
{
	if (isset($_POST['profilCap'])) {
		$profCaps=getProfilsCaps();
		while ($profil=mysqli_fetch_assoc($profCaps)) {
			if ($_POST['profilCap']==$profil['longueur'].", ".$profil['qualite'].", ".$profil['couleur']) {
				return True;
			}
		}
	}
	$erreursRdv[]='profilCap';
	return False;
}
function getProfilsCaps()
{
	global $conn;
	$client=$_SESSION['idCompteConnecte'];
	$sql = "SELECT client.id,nom,longueur,qualite,couleur FROM client JOIN profilCap ON client.id_profile=profilCap.id WHERE client.id = " . $client;
	$res=mysqli_query($conn, $sql);
	return $res;
}
function getIDprofile($id)
{
  global $conn;
  $sql="SELECT client.id_profile FROM client WHERE client.id = '$id';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row["id_profile"];
}