<?php

require_once 'modele/animauxModele.php';

function rechercher($param) {
    $reqRech = listeRech($param);
    require_once 'vues/animauxVue.php';
}

function parDefaut() {
    $reqListe = listeAnimaux();
    require_once 'vues/animauxVue.php';
}

function consulter($param) {
    $reference = $param['idAnimal'];
    $tabReqConsult = consulterFiche($reference);
    require_once 'vues/animauxVueFiche.php';
}

function modifier($param) {
    $reference = $param['idAnimal'];
    $tabReqModif = modifierFiche($reference);
    require_once 'vues/animauxVueFiche.php';
}

function supprimer($param) {
    $reference = $param['idAnimal'];
    if (isset($_POST['valSuppr'])) {
        execSuppr($reference);
    }
    $tabReqConsult = consulterFiche($reference);
    require_once 'vues/animauxVueFiche.php';
}
