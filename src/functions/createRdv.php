<?php
function createRdv($prestation, $rdvtime, $personne, $who, $profilCap="---")
{
	global $db;
	$sql="INSERT INTO `rdvs` (`id`, `prestation`, `date`, `client`,`personnel`, `id_profile`) VALUES (NULL, $prestation, $rdvtime, $personne, $who, $profilCap);";
    mysqli_query($db, $sql);
}
