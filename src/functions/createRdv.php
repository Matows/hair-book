<?php
function createRdv($prestation, $rdvtime, $personne, $who, $profilCap="---")
{
    global $db;
    $sql="INSERT INTO `rdv` (`id`, `prestation`, `date`,duration, `client`,`personnel`, `profilCap`) VALUES (NULL, $prestation, $rdvtime, $personne, $who, $profilCap);";
    mysqli_query($db, $sql);
}