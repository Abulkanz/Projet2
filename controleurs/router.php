<?php
switch ($gestion){
    case 'login':
        require_once $gestion . 'Controleur.php';
        break;
    case 'accueil':
        require_once($gestion.'Controleur.php');
        break;
    case 'employes':
     require_once($gestion.'Controleur.php');
     break;
    case 'animaux':
     require_once($gestion.'Controleur.php');
     break;
    case 'carte':
     require_once($gestion.'Controleur.php');
     break;
    case 'statistique':
     require_once($gestion.'Controleur.php');
     break;
    case 'aide':
     require_once($gestion.'Controleur.php');
     break;
    case 'profil':
     require_once($gestion.'Controleur.php');
     break;
    default :
    echo "impossible !!!";
}
if (isset($_SESSION['login'])) {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'consulter') {
            consulter($_POST);
        } elseif ($_POST['action'] == 'rechercher') {
            rechercher($_POST);
        } elseif ($_POST['action'] == 'modifier') {
            modifier($_POST);
        } elseif ($_POST['action'] == 'supprimer') {
            supprimer($_POST);
        } elseif ($_POST['action'] == 'profil') {
            profil($_POST);
        } elseif ($_POST['action'] == 'deconnexion') {
            deconnexion();
        }
    } else {
        parDefaut();
    }
} elseif (isset($_POST['login'])){
    authentification($_POST);
}else {
    connection();
} 
?>



    