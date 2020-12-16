
<script type="text/javascript">
function Affiche()
    {
        var selection = document.getElementById('prestations').value;
        var coiffure1 = document.getElementById('profilCap');
        var coiffure2 = document.getElementById('hairdresser');
        var visage = document.getElementById('visagiste');
        
        if(selection == "coiffure")
            {
                coiffure1.style.display = "block";
                coiffure2.style.display = "block";
                visage.style.display = "none";
                }
        else if (selection == "visage")
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
    window.setInterval(function(){Affiche()},20);
</script>
<?php
function formulaireRdv()
{
	global $_prestations;
	global $_liste_personnel;
	global $conn;
	$sql = 'SELECT * FROM rdv where date >= CURDATE()';
	$res = mysqli_query($conn, $sql);
	$tab = mysqli_fetch_all($res, MYSQLI_ASSOC);
	$stringRet="
	<form method='post'>
		<article>

			<h5>Prestations</h5><select name='prestations' id='prestations' size='1'><option value='' selected>---";

			foreach ($_prestations as $prestation => $infos) {
				$typePres=$infos['type prestations'];
				$stringRet=$stringRet."<option value=$typePres>$prestation";
			}
			if ($_SESSION['connected']){
				$stringRet=$stringRet."</select><select name='profilCap' id='profilCap' size='1'>";
				$profCaps=getProfilsCaps();
				while ($row = mysqli_fetch_assoc($profCaps)) 
				{
					$long=$row['longueur'];
					$qual=$row['qualite'];
					$coul=$row['couleur'];
					$stringRet=$stringRet."<option>$long, $qual, $coul";
				}
				$stringRet=$stringRet."</select>";
			}
			else{
			$stringRet=$stringRet."</select><section id='profilCap'>
	<ul>
		<li>
			<SELECT name='type de cheveux' size='1'>
				<OPTION>frisé</OPTION>
				<OPTION>plat</OPTION>
			</SELECT>
		</li>
		<li>
			<SELECT name='longueur' size='1'>
				<OPTION>court</OPTION>
				<OPTION>mi-long</OPTION>
				<OPTION>long</OPTION>
			</SELECT>
		</li>
		<li>
			<SELECT name='couleur' size='1'>
				<OPTION>roux</OPTION>
				<OPTION>noir</OPTION>
				<OPTION>brun</OPTION>
				<OPTION>blond</OPTION>
			</SELECT>
		</li>
	</ul>
	</section>";
			
}
			$stringRet=$stringRet."<select name='hairdresser' id='hairdresser' size='1'><option selected>N'importe";

			foreach ($_liste_personnel as $personne) {
				if ($personne['metier']=='Coiffeur'){
					$name=$personne['nom'];
					$stringRet=$stringRet."<option>$name";
				}
			}
			$stringRet=$stringRet."</select><select name='visagiste' id='visagiste' size='1'><option selected>N'importe";
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
