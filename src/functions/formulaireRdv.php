<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> TITRE </title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		
<?php 
function formulaireRdv()
{
	$stringRet="
	<form method='post'>
		<article>
			<h5>Prestations</h5>";
			$prestations=getPrestations();
			//getPrestations = renvoie la liste des prestations avec leur cout et temps
			foreach ($prestations as $prestation => $value) {
				$stringRet=$stringRet."
				<article>
				<label for='prestations'>$prestation('name')</label>
				<label for='prestations'>$prestation('cost') €</label>
				<label for='prestations'>$prestation('time') m</label>
				<input type='checkbox' name='prestations'>
				</article>";
			}
			$stringRet=$stringRet."</article>
			<article><label for='hairdresser'>Coiffeur choisi (laisser vide si pas de préférences)</label><input list='hairdresser' id='hairdressers' name='hairdressers' /><datalist for='hairdresser' id='hairdresser'>
    <option value='Personne1'>
    <option value='Personne2'>
    <option value='Personne3'>
    <option value='Personne4'>
    <option value='Personne5'>
</datalist></article>
			<article><label for='dateRdv'>Date et heure du rendez-vous :</label><input type='datetime-local' name='dateRdv'></article><article><input type='submit' name ='setNewRdv' value='Définir un nouveau rendez-vous'></article></form>";
	return $stringRet;
}
echo formulaireRdv();
 ?>
	</body>
</html>
<?php
function getPrestations()
{
	return [];
}