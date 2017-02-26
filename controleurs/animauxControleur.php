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
