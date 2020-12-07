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
    'Vendredi'=>['8h-12h', '14h-17h'],
    'Samedi'=>['8h-12h', '14h-17h'],
    'Dimanche'=>['Fermé']
    ];
// $_horaires = ['8h-18h'];
$_prestations = [
    //coupes
    'Coupe simple' => [
        'prix' => [10],
        'type cheveux' => 'all',
        'type prestations'=>'coiffure',
        'description' => '',
        'duree maximale' => '30',
    ],
    'Coloration' => [
        'prix' => [20],
        'type cheveux' => 'all',
        'type prestations'=>'coiffure',
        'description' => '',
        'duree maximale' => '30',
    ],
    'Coupe - Coiffure'=> [
        'prix' => [25],
        'type cheveux' => 'all',
        'type prestations'=>'coiffure',
        'description' => 'Coupe avec Shampoing et Coiffure ensuite',
        'duree maximale' => '30',
    ],
    'Coupe - Coiffure - Soin Divers' => [
        'prix' => [25],
        'type cheveux' => 'all',
        'type prestations'=>'coiffure',
        'description' => 'Coupe avec Shampoing, coiffure & soins divers des cheveux',
        'duree maximale' => '30',
    ],

    'Suppléments Couleurs' => [
        'prix' => [9,15,21],
        'type cheveux' => 'all',
        'type prestations'=>'coiffure',
        'description' => 'Coloration en supplément à une coupe',
        'duree maximale' => '30',
    ],
    //Mèches 
    'Mèches' => [
        'prix' => [9,15,21],
        'type cheveux' => 'all',
        'type prestations'=>'coiffure',
        'description' => 'Coloration de mèches',
        'duree maximale' => '30',
    ],
    //BALAYAGE
    'Balayage' => [
        'prix' =>[33,39,45],
        'type cheveux' => 'all',
        'type prestations'=>'coiffure',
        'description' =>'Balayage Classique',
        'duree maximale' => '30',
    ],
    //PERMANENTE
    'Permanente' => [
        'prix'=>[68],
        'type cheveux' =>'all',
        'type prestations'=>'coiffure',
        'description' =>'Frisage de cheveux',
        'duree maximale' => '30',
    ],
    //Lissage
    'Lissage Brésilien' => [
        'prix' =>[79,89,99],
        'type cheveux' => 'all',
        'type prestations'=>'coiffure',
        'description' => 'soin des cheveux comblant le manque de kératine.',
        'duree maximale' => '30',
    ],
    //VISAGE
    'Epilation' => [
        'prix' => [9],
        'type cheveux' => 'all',
        'type prestations'=>'visage',
        'description' => 'Epilation de la face.',
        'duree maximale' => '30',
    ],
];
$_type_cheveux = [
    'longeur' => ['court', 'mi-long', 'long'],
    'qualité' => ['frisé', 'plat'],
    'couleur' => ['roux', 'noir', 'brun', 'blond']
];

$_liste_personnel = [
  ["nom" =>"Java",
   "prenom"=>"David",
   "metier" => 'Coiffeur', 
   "specialite"=> "évenementiel (mariage....)",
   "description" => "CAP à Lioncourt.... blalblabla"],

    ["nom" => "Web",
     "prenom" =>"Luc",
     "specialite" => "évenementiel (mariage....)",
     "metier" => 'Visagiste',
     "description" => "CAP à Lioncourt.... blalblabla",
  ],
  ["nom" =>'Empereur',
   "prenom"=>'Jean-Charles',
   "metier" => 'Coiffeur',
   "specialite" => "évenementiel (mariage....)",
    "description" => "Aggregation cheveux à Lioncourt..."],
];
 ?>