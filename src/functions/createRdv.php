<?php
function createRdv($prestation, $rdvtime, $personne, $who, $profilCap="---")
{
    global $conn;
    global $_prestations;
    $res=$_prestations[$prestation]['duree maximale'];
    $sql="INSERT INTO rdv(`prestation`, `date`,`duration`, `client`,`personnel`, `profilCap`) VALUES ('$prestation','$rdvtime','$res',$personne,'$who','$profilCap');";
    mysqli_query($conn, $sql);
}