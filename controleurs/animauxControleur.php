<?php

require_once 'modele/animauxModele.php';

function parDefaut() {
    $tabReqListe = listeAnimaux();
    require_once 'vues/animauxVue.php';
}

