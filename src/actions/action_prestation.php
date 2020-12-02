<?php

function afficheprestation($pres)
{
    # fonction qui affiche les differente prestations sous forme d'un tableau html. 
    #entrée:tableau des prestation
    #sortie:rien affiche juste les prestation
    foreach ($pres as $key => $value) {
        $size=count($value['prix']);
        echo '<table class="prestation">';
        echo '<tr>';
        echo '<th class="titre">'.$key.'</th>';
        echo '</tr>';
        echo '<tr>';
        echo '<td class="description" rowspan=2>'.$value['description'].'</td>';
        echo'<td class="prix">';
        foreach ($value['prix'] as $price) {
            echo ($price.' € ');
         }
        echo'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td class="type cheveux">'.$value['type cheveux'].'</td>';
        echo '</tr>';
        echo "</table>";
    }    
}
?>