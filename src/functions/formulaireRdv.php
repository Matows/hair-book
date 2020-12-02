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
</script>
<?php
function formulaireRdv()
{
	$stringRet="
	<form method='post'>
		<article>

			<h5>Prestations</h5><select name='prestations' size='1'>";

			foreach ($_prestations as $prestation => $infos) {
				$stringRet=$stringRet."<option id=$infos['type prestations']>$prestation";
			}

			$stringRet=$stringRet."</select><select name='profilCap' size='1'>"

			$profCaps=getProfilsCaps();
			foreach ($profCaps as $profCap => $infos) {
				$stringRet=$stringRet."<option>$profCap['longueur'], $profCap['qualite'], $profCap['couleur']";
			}
			$stringRet=$stringRet."</select>"

			$stringRet=$stringRet."<select name=hairdresser size='1'><option selected>N'importe"

			foreach ($_liste_personnel as $personne) {
				if $personne['coiffure']{
					$stringRet=$stringRet."<option>$personne['nom']"
				}
			}
			$stringRet=$stringRet."</select><select name=visagiste size='1'><option selected>N'importe"
			foreach ($_liste_personnel as $personne) {
				if !$personne['coiffure']{
					$stringRet=$stringRet."<option>$personne['nom']"
				}
			}

			$stringRet=$stringRet."</select>
			<article><label for='dateRdv'>Date et heure du rendez-vous :</label><input type='datetime-local' name='dateRdv' min=date('yyyy-MM-ddThh:mm')></article><article><input type='submit' method='post' name ='setNewRdv' value='Définir un nouveau rendez-vous'></article></form>";
	return $stringRet;
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
?>