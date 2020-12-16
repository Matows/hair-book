<?php
if (!(isset($_SESSION['connected']))){
  $_SESSION['connected']=false;
}

// visialiser erreur
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$_ROOT_URL = "/hairbook";
// TODO : Include vendor

include("config.php");
include("db.php");
include("src/functions.php");
include("src/actions.php");
include("src/views.php"); // fourni les bonnes variables pour nos templates

