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
    if(isset($_POST['ajouter'])){
        ajouter($_POST);
    } elseif(isset($_POST['validerajouter'])){
        validerajouter($_POST);
    } elseif(isset($_POST['valider'])) {
        valider($_POST);
    } elseif(isset($_POST['retour'])) {
        retour();
    }elseif (isset($_POST['consulter'])) {
        consulter($_POST);
    } elseif (isset($_POST['modifier'])) {
        modifier($_POST);
    } elseif(isset($_POST['validermodification'])){
        validermodification($_POST);
    } elseif(isset($_POST['vmodificationimage'])){
        vmodificationimage($_POST);
    } elseif (isset($_POST['supprimer'])) {
        modifier($_POST);
    } elseif(isset($_POST['validersuppression'])){
        validersuppression($_POST);
    } elseif(isset($_POST['Rechercher'])){
        rechercher($_POST);
    } elseif(isset($_POST['Trier'])){
        trier($_POST);
    } elseif(isset($_POST['envoyermail'])){
        envoyermail($_POST);
    } elseif(isset($_POST['Deconnexion'])){
        deconnexion();
    } elseif(isset($_POST['aide'])){
        aide();
    }elseif(isset($_POST['profil'])){
        profil($_POST);
    }elseif(isset($_POST['carte'])){
        carte();
    }elseif(isset($_POST['statistique'])){
        statistique($_POST);
    }else {
        liste();
    }
} elseif (isset($_POST['login'])){
    authentification($_POST);
}
else {
    connection();
} 
?>
