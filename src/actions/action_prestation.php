<?php

function afficheprestation($pres) {
    # fonction qui affiche les differente prestations sous forme d'un tableau html. 
    #entrée:tableau des prestation
    #sortie:rien affiche juste les prestation
    echo '<div class="content"><ul>';
    foreach ($pres as $nomPresta => $carac) {
        foreach ($carac['prix'] as &$p) {
            $p = $p . '€';
        }

        ?>
        <li class="box">
            <strong class="has-text-primary"><?= $nomPresta ?></strong>
            <ul>
                
                <?= !empty($carac['description']) ? '<li>' . $carac['description'] . '</li>' : '' ?>
                <li>Prix : <?= implode(" ou ", $carac['prix']) ?></li>
                <li>Type de cheveux accepter : <?= $carac['type cheveux'] == 'all' ? 'tous' : $carac['type cheveux'] ?></li>
            </ul>
        </li>
        <?php
    }    
    echo '</ul></div>';
}
?>
