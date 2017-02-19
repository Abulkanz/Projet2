<?php

require_once 'modele/animauxModele.php';

function liste() {
    $tabReq = listeAnimaux();
    require_once 'vues/animauxVue.php';
}

