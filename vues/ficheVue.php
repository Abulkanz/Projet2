<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();
$ficheAnimal = [];

$reqConsAnimal = $tabReq[0];
$reqAgeAnimal = $tabReq[1];
$reqEspeceAnimal = $tabReq[2];
$reqSexAnimal = $tabReq[3];

if ($ligne = $reqConsAnimal->fetch()) {
    $ficheAnimal['photo'] = '<img src= "img/imgFiches/' . $ligne['photo'] . '">';
    $ficheAnimal['prenomAnimal'] = $ligne['prenomAnimal'];
    $ficheAnimal['poids'] = $ligne['poids'];
    $ficheAnimal['taille'] = $ligne['taille'];
    $ficheAnimal['dateNaissance'] = $ligne['date_naissance'];
    $ficheAnimal['lieuNaissance'] = $ligne['lieu_naissance'];
    $ficheAnimal['statut'] = $ligne['statut'];
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
            $ficheAnimal['sexe'] = 'Male';
        } else {
            $ficheAnimal['sexe'] = 'Femelle';
        }
    }
    $erreur = "";
} else {
    $erreur = "<p>Une erreur est survenue</p>";
}

$tpl->assign('photo', $ficheAnimal['photo']);


$tpl->display('vues/ficheVue.tpl');

