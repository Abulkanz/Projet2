<?php

require_once 'modele/animauxModele.php';

function parDefaut() {
    $tabReq = listeAnimaux();
    require_once 'vues/animauxVue.php';
}

