<?php
$_PAGE_LIST = [
    'accueil'=>'Accueil',
    'rdv'=>'Rendez-Vous',
    'personnel'=>'Presentation du personnel',
    'prestation'=>'Prestations proposées',
    'contact'=>'Contact',
    'login'=>'Se connecter',
    'signUp'=>'S\'inscrire',
    'account'=>'Votre compte',
];

include(__DIR__ . "/actions/page_vars.php");
include(__DIR__ . "/actions/actionLogin.php");
include(__DIR__ . "/actions/actionsRdv.php");
include(__DIR__ . "/actions/action_prestation.php");
include(__DIR__ . "/actions/actionLogin.php");
