<?php
error_reporting(E_ALL ^ E_NOTICE);

@set_time_limit(900); //15min.

header('Content-type: text/html; charset=iso-8859-1');

//remplace GET et POST par les noms de variables
foreach ($_GET as $key => $value) $$key = $value;
foreach ($_POST as $key => $value) $$key = $value;

include_once "config.php";

//initialisation des variables de navigation pour la premiere utilisation
if(!isset($page))
    $page = "";
?>
