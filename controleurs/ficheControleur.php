<?php

require_once 'modele/ficheModele.php';

function consulter($param) {
    $reference = $param['idAnimal'];
    $tabReqConsult = consulterFiche($reference);
    require_once 'vues/ficheVue.php';
}

function modifier($param) {
    $reference = $param['idAnimal'];
    $tabReqModif = modifierFiche($reference);
    require_once 'vues/ficheVue.php';
}

