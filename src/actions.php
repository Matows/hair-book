<?php
$_PAGE_LIST = [
    'accueil'=>'Accueil',
    'rdv'=>'Rendez-Vous', // Not in views yet
    'personnel'=>'Presentation du personnel',
    'prestation'=>'Prestations proposées',
    'contact'=>'Contact',
];

include(__DIR__ . "/actions/page_vars.php");
include(__DIR__ . "/actions/actionsRdv.php");
include(__DIR__ . "/actions/action_prestation.php");
include(__DIR__ . "/views/formulaire_base.php");
