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
			<article><label for='hairdresser'>Coiffeur choisi (laisser vide si pas de préférences)</label><input list='hairdressers' id='hairdressersInput' name='hairdressers' /><datalist for='hairdresser' id='hairdresser'>"
			$hairdresserList=getHairdressers();
			foreach ($hairdresserList as $hairdresser) {
				$stringRet=$stringRet."<option value='$hairdresser'>"
			}

			$stringRet=$stringRet."</datalist>    </article>
			<article><label for='dateRdv'>Date et heure du rendez-vous :</label><input type='datetime-local' name='dateRdv'></article><article><input type='submit' name ='setNewRdv' value='Définir un nouveau rendez-vous'></article></form>";
	return $stringRet;
}
function getPrestations()
{
	//à créer
	return [];
}
function getHairdressers()
{
	//à créer
	return [];
}
