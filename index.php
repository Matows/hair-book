<?php

// visialiser erreur
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// TODO : Include vendor
include("db.php");
include("src/functions.php");
include("src/actions.php");
include("src/views.php"); // fourni les bonnes variables pour nos templates

