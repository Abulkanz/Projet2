<?php

require_once 'modele/ficheModele.php';

function consulter($param) {
    $reference = $param['idAnimal'];
    $tabReq = consulterFiche($reference);
    require_once 'vues/ficheVue.php';
}

