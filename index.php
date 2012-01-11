<?php
error_reporting(E_ALL ^ E_NOTICE);

@set_time_limit(900); //15min.

header('Content-type: text/html; charset=utf-8');

//remplace GET et POST par les noms de variables
foreach ($_GET as $key => $value) $$key = $value;
foreach ($_POST as $key => $value) $$key = $value;

include_once "config.php";

//initialisation des variables de navigation pour la premiere utilisation
if(!isset($page))
    $page = "";

include $controler_file;
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $metadescription; ?>" />
        <link href="<?php echo $styleGeneral_file; ?>" rel="stylesheet" type="text/css" media="screen,print" />
        <link href="<?php echo $styleMenu_file; ?>" rel="stylesheet" type="text/css" media="screen,print" />
        <SCRIPT LANGUAGE="Javascript" SRC="style/animationHandler.js"> </SCRIPT>
        <script src="lib/js-global/FancyZoom.js" type="text/javascript"></script>
        <script src="lib/js-global/FancyZoomHTML.js" type="text/javascript"></script>
    </head>
    
    <body onload="setupZoom()">
        <?php include $header_file; ?>
        
        <?php include $menu_file; ?>
        <div id="container">
            <div id="accueilContent" 
                <?php
                if (isset($flag_contact) || isset($body)) {
                    echo "class='test'";
                }
                else {
                    echo "class='animateIn'";
                }
                ?>
            ><?php include $accueil_file; ?></div>
            <div id="formationContent" class="test"><?php include $formation_file; ?></div>
            <div id="expContent" class="test"><?php include $experience_file; ?></div>
            <div id="projectsContent" class="test"><?php include $projects_file; ?></div>
            <div id="contactContent" 
                <?php
                if (isset($flag_contact)) {
                    echo "class='animateIn'";
                }
                else {
                    echo "class='test'";
                }
                ?>
            ><?php include $contact_file; ?></div>
        
            <?php 
            if (isset($body) && $body != "") {
                include $body;
            }
            ?>
        </div>
        
        <?php include $footer_file;?>
    </body>
</html>
