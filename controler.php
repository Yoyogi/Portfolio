<?php
switch($page) {
    case "main":
        $title = "Portfolio de Yannick Tirand";
        $metadescription = "Portfolio - Accueil";
        break;
    
    case "mail":
        $body = $mail_file;
        $title = "Portfolio de Yannick Tirand";
        $metadescription = "Envoie du mail";
        break;
    
    default:
        $title = "Portfolio de Yannick Tirand";
        $metadescription = "Portfolio - Accueil";
        break;
}
?>
