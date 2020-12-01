<?php

/* Fichier de configuration à destination du gérant du salon
 *
 */
$_website_name= 'HairBook';
$_horaires = [
    'Lundi'=> ['8h-12h', '14h-17h'],
    'Mardi'=>['8h-12h', '14h-17h'],
    'Mercredi'=>['8h-12h', '14h-17h'],
    'Jeudi'=>['8h-12h', '14h-17h'],
    'Vendredi'=>['8h-12h', '14h-17h',
    'Samedi'=>['8h-12h', '14h-17h'],
    'Dimanche'=>['Fermé']
                  ];
// $_horaires = ['8h-18h'];
$_prestations = [
    //coupes
    'Coupe simple' => [
        'prix' => 10,
        'type cheveux' => 'all',
        'description' => '',
    ],
    'Coloration' => [
        'prix' => 20,
        'type cheveux' => 'all',
    ],
    'Coupe - Coiffure'=> [
    'prix' => 25,
    'type cheveux' => 'all',
    'description' => 'Coupe avec Shampoing et Coiffure ensuite',
    ],
    'Coupe - Coiffure - Soin Divers' => [
        'prix' => 25,
        'type cheveux' => 'all',
        'description' => 'Coupe avec Shampoing, coiffure & soins divers des cheveux',
    ],
    
    'Suppléments Couleurs' => [
        'prix' => ['longueur'=>['9,15,21']],
        'type cheveux' => 'all',
        'description' => 'Coloration en supplément à une coupe',
    ],
    //Mèches 
    'Mèches' => [
        'prix' => ['longueur'=>['9,15,21']],
        'type cheveux' => 'all',
        'description' => 'Coloration de mèches',
    ],
    //BALAYAGE
    'Balayage' => [
        'prix' =>['longueur'=>['33,39,45']],
        'type cheveux' => 'all',
        'description' =>'Balayage Classique',
    ],
    //PERMANENTE
    'Permanente' => [
        'prix'=> 68,
        'type cheveux' =>'all',
        'description' =>'Frisage de cheveux',
    ],
    //Lissage
    'Lissage Brésilien' => [
        'prix' =>'longueur'=>['79,89,99'],
        'type cheveux' => 'all',
        'description' => 'soin des cheveux comblant le manque de kératine.',
    ],
];
$_type_cheveux = [
    'longeur' => ['court', 'mi-long', 'long'],
    'qualité' => ['frisé', 'plat'],
    'couleur' => ['roux', 'noir', 'brun', 'blond']
];
$_PAGE_LIST = [
        'index'=>'Accueil',
        'RendezVous'=>'Rendez-Vous',
        'Presentation'=>'Presentation du salon',
        'Prestations'=>'Prestations proposées',
        'Contact'=>'Contact',
             ];