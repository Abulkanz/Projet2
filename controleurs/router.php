<?php

switch ($gestion) {
    case 'login':
        require_once $gestion . 'Controleur.php';
        break;
    case 'accueil':
        require_once $gestion . 'Controleur.php';
        break;
    case 'animaux':
        require_once $gestion . 'Controleur.php';
        break;
    case 'fiche':
        require_once $gestion . 'Controleur.php';
        break;
    case 'especes':
        require_once $gestion . 'Controleur.php';
        break;
    default :
        echo 'Impossible !';
}

if(isset($_POST['action'])){
    
}else{
    liste();
}
