<?php

function afficheprestation($pres)
{
    # fonction qui affiche les differente prestations sous forme d'un tableau html. 
    #entrée:tableau des prestation
    #sortie:rien affiche juste les prestation
    foreach ($pres as $key) {
        echo '<table class="prestation">';
        echo '<tr>';
        echo '<th class="titre">'.array_keys($pres, $key, TRUE)[0].'</th>';
        echo '</tr>';
        echo '<tr>';
        echo '<td class="description" rowspan=2>'.$key['description'].'</td>';
        echo '<td class="prix">'.$key['prix'].'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td class="type cheveux">'.$key['type cheveux'].'</td>';
        echo '</tr>';
        echo "</table>";
    }    
}
?>