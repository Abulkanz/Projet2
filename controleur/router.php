<?php
switch ($gestion){
    case 'employes':
     require_once($gestion.'Controleur.php');
     break;
    default :
    echo "impossible !!!";
}
if(isset($_POST['ajouter'])){
    ajouter($_POST);
}elseif(isset($_POST['validerajouter'])){
    validerajouter($_POST);
} elseif(isset($_POST['valider'])) {
    valider($_POST);
} elseif(isset($_POST['retour'])) {
    retour($_POST);
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
}
else {
    liste();
}
?>
