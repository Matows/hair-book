
<script type="text/javascript">
function Affiche()
    {
        var selection = document.getElementById('prestations').value;
        var coiffure1 = document.getElementById('profilCap');
        var coiffure2 = document.getElementById('hairdresser');
        var visage = document.getElementById('visagiste');
        
        if(selection.id == "coiffure")
            {
                coiffure1.style.display = "block";
                coiffure2.style.display = "block";
                visage.style.display = "none";
                }
        else if (selection.id == "visage")
            {
                coiffure1.style.display = "none";
                coiffure2.style.display = "none";
                visage.style.display = "block";
                }
        else
        	{
        		coiffure1.style.display = "none";
                coiffure2.style.display = "none";
                visage.style.display = "none";
        		}
    }
    window.setInterval(function(){Affiche()},1);
</script>
<?php
function formulaireRdv()
{
	global $_prestations;
	global $_liste_personnel;

	$stringRet="
	<form method='post'>
		<article>

			<h5>Prestations</h5><select name='prestations' size='1'>";

			foreach ($_prestations as $prestation => $infos) {
				$typePres=$infos['type prestations'];
				$stringRet=$stringRet."<option id=$typePres>$prestation";
			}

			$stringRet=$stringRet."</select><select name='profilCap' size='1'>";

			$profCaps=getProfilsCaps();
			while ($row = mysqli_fetch_assoc($profCaps)) {
				$long=$row['longueur'];
				$qual=$row['qualite'];
				$coul=$row['couleur'];
				$stringRet=$stringRet."<option>$long, $qual, $coul";
			}
			$stringRet=$stringRet."</select>";

			$stringRet=$stringRet."<select name=hairdresser size='1'><option selected>N'importe";

			foreach ($_liste_personnel as $personne) {
				if ($personne['metier']=='Coiffeur'){
					$name=$personne['nom'];
					$stringRet=$stringRet."<option>$name";
				}
			}
			$stringRet=$stringRet."</select><select name=visagiste size='1'><option selected>N'importe";
			foreach ($_liste_personnel as $personne) {
				if ($personne['metier']=='Visagiste'){
					$name=$personne['nom'];
					$stringRet=$stringRet."<option>$name";
				}
			}
			$today=date('yyyy-MM-ddThh:mm');
			$stringRet=$stringRet."</select>
			<article><label for='dateRdv'>Date et heure du rendez-vous :</label><input type='datetime-local' name='dateRdv' min=$today></article><article><input type='submit' method='post' name ='setNewRdv' value='Définir un nouveau rendez-vous'></article></form>";
	return $stringRet;
}
?>
