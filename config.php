<?php

/* Fichier de configuration à destination du gérant du salon
 *
 */

$_horaires = ['8h-12h', '14h-17h'];
// $_horaires = ['8h-18h'];

$_prestations = [
    'Coupe classique' => [
        'prix' => 10,
        'type cheveux' => 'all'
    ],
    'Coloration' => [
        'prix' => 20,
        'type cheveux' => [
            'longeur' => ['moyen', 'long'],
            'qualité' => 'all'
        ]
    ]
];

$_type_cheveux = [
    'longeur' => ['court', 'moyen', 'long'],
    'qualité' => ['frisé', 'plat'],
    'couleur' => ['roux', 'noir']
];
