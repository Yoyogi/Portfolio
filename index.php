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
    </head>
    
    <body>
        <?php include $header_file; ?>
        
        <?php include $menu_file; ?>
        <div id="container">
            <div id="formationContent" class="test"><?php include $formation_file; ?></div>
            <div id="expContent" class="test"><?php include $experience_file; ?></div>
            <div id="projectsContent" class="test"><?php include $projects_file; ?></div>
            <div id="contactContent" class="test"><?php include $contact_file; ?></div>
        </div>
        
        <?php 
        if (isset($body) && $body != "") {
            include $body;
        }
        ?>
        
        <?php include $footer_file;?>
    </body>
</html>
