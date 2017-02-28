<?php

require_once 'include/libs/smarty/Smarty.class.php';


$jsCalls = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';
$login= $_SESSION['login'];
$nom = $_SESSION['nomEmploye'];
$prenom = $_SESSION['prenomEmploye'];
$avatar = $_SESSION['avatar'];

$tpl = new Smarty();
$ficheAnimal = [];

$jScript = 'function agrImg($param) {
                if ($param.style.position == "absolute") {
                    $param.style.cssText = " width: 100%;object-fit: cover;padding: 1em;";
                    document.getElementById("fsFiche").style.display = "block";
                } else {
                    $param.style.cssText = "width:80%;position:absolute; top:43%; left:50%; transform:translate(-50%, -50%);";
                    document.getElementById("fsFiche").style.display = "none";
                }
            }';

$reqConsAnimal = $tabReqConsult[0];
$reqAgeAnimal = $tabReqConsult[1];
$reqEspeceAnimal = $tabReqConsult[2];
$reqSexAnimal = $tabReqConsult[3];
$reqPaysAnimal = $tabReqConsult[4];

if ($ligne = $reqConsAnimal->fetch()) {
    $ficheAnimal['idAnimal'] = $ligne['idAnimaux'];
    $ficheAnimal['photo'] = '<img class="iPortrait" src= "img/imgFiches/' . $ligne['photo'] . '" onclick="agrImg(this)">';
    $ficheAnimal['prenomAnimal'] = $ligne['prenomAnimal'];
    $ficheAnimal['idParcelle'] = $ligne['idParcelle'];
    $ficheAnimal['poids'] = $ligne['poids'];
    $ficheAnimal['taille'] = $ligne['taille'];
    $ficheAnimal['dateNaissance'] = $ligne['date_naissance'];
    $ficheAnimal['lieuNaissance'] = $ligne['lieu_naissance'];
    $ficheAnimal['statut'] = $ligne['statut'];
    if ($ligne['statut'] == NULL) {
        $ligne['statut'] = "Présent";
    }
    $ficheAnimal['description'] = $ligne['description'];
    $ficheAnimal['pere'] = $ligne['pere'];
    if ($ficheAnimal['pere'] == NULL) {
        $ficheAnimal['pere'] = "Inconnu";
    }
    $ficheAnimal['mere'] = $ligne['mere'];
    if ($ficheAnimal['mere'] == NULL) {
        $ficheAnimal['mere'] = "Inconnue";
    }
    //Recupération de l'age
    if ($ligne2 = $reqAgeAnimal->fetch(PDO::FETCH_ASSOC)) {
        $ficheAnimal['age'] = $ligne2['Age'];
    }
    //Recuperation de l'espèce
    if ($ligne3 = $reqEspeceAnimal->fetch(PDO::FETCH_ASSOC)) {
        $ficheAnimal['nomEspece'] = $ligne3['nomEspece'];
    }
    //Recuperation du sexe
    if ($ligne4 = $reqSexAnimal->fetch(PDO::FETCH_ASSOC)) {
        $ficheAnimal['sexe'] = $ligne4['sexe'];
        if ($ficheAnimal['sexe'] == 'M') {
            $ficheAnimal['sexe'] = 'Mâle';
        } else {
            $ficheAnimal['sexe'] = 'Femelle';
        }
    }
    //Recuperation du pays d'origine
    if ($ligne5 = $reqPaysAnimal->fetch(PDO::FETCH_ASSOC)) {
        $ficheAnimal['pays'] = $ligne5['nomPays'];
    }

    $erreur = "";
} else {
    $erreur = "<p>Une erreur est survenue</p>";
}


switch ($_POST['action']) {
    case 'supprimer' :
        $varCRUD = 'style="border-style:none;" readonly';
        $onSubmitJs = 'onsubmit="return validForm()"';
        $jScript = $jScript.' function validForm() {
                    var choix = confirm("Etes-vous certain de vouloir supprimer cet enregistrement ?");
                    if (choix === true) {
                        return true;
                        } else {
                        return false;
                        }
                    }';
        $espSexPays = '<strong class="espAnimal">' . $ficheAnimal['nomEspece'] . ' ' . $ficheAnimal['sexe'] . ' (' . $ficheAnimal['pays'] . ' )</strong>';
        $inputEdit = '<input type = "hidden" name = "idAnimal" value = "' . $ficheAnimal['idAnimal'] . '">
        <input type = "hidden" name = "gestion" value = "animaux">
        <input type = "hidden" name = "action" value = "supprimer">
        <input type = "submit" name = "valSuppr" value = "Supprimer">';
        break;
    case 'modifier' :
        $onSubmitJs = null;
        $varCRUD = null;
        $espSexPays = '<input type="text" name="espece" value="'. $ficheAnimal['nomEspece'].'">
                       <input type="text" name="sexe" value="'. $ficheAnimal['sexe'].'">
                       <input type="text" name="pays" value="'. $ficheAnimal['pays'].'">';
        $inputEdit = '<input type = "hidden" name = "idAnimal" value = "' . $ficheAnimal['idAnimal'] . '">
        <input type = "hidden" name = "gestion" value = "animaux">
        <input type = "hidden" name = "action" value = "modifier">
        <input type = "submit" name = "valModif" value = "Modifier">';
        break;
    case 'consulter' :
        $onSubmitJs = null;
        $varCRUD = 'style = "border-style:none;" readonly';
        $espSexPays = '<strong class="espAnimal">' . $ficheAnimal['nomEspece'] . ' ' . $ficheAnimal['sexe'] . ' (' . $ficheAnimal['pays'] . ' )</strong>';
        $inputEdit = null;
        break;
}

$tpl->assign('inputEdit', $inputEdit);
$tpl->assign('varCRUD', $varCRUD);
$tpl->assign('espSexPays', $espSexPays);

$tpl->assign('photo', $ficheAnimal['photo']);
$tpl->assign('sexe', $ficheAnimal['sexe']);
$tpl->assign('numero', $ficheAnimal['idAnimal']);
$tpl->assign('parcelle', $ficheAnimal['idParcelle']);
$tpl->assign('espece', $ficheAnimal['nomEspece']);
$tpl->assign('statutAnimal', $ligne['statut']);
$tpl->assign('prenom', $ficheAnimal['prenomAnimal']);
$tpl->assign('poids', $ficheAnimal['poids']);
$tpl->assign('taille', $ficheAnimal['taille']);
$tpl->assign('dOb', $ficheAnimal['dateNaissance']);
$tpl->assign('pOb', $ficheAnimal['lieuNaissance']);
$tpl->assign('statut', $ficheAnimal['idAnimal']);
$tpl->assign('description', $ficheAnimal['description']);
$tpl->assign('pays', $ficheAnimal['pays']);
$tpl->assign('pere', $ficheAnimal['pere']);
$tpl->assign('mere', $ficheAnimal['mere']);

$tpl->assign('login', $login);
$tpl->assign('avatar', $avatar);
$tpl->assign('onSubmitJs', $onSubmitJs);
$tpl->assign('jsCalls', $jsCalls);
$tpl->assign('js', $jScript);

$tpl->display('vues/animauxVueFiche.tpl');

