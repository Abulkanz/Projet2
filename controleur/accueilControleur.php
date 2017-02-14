<?php
require_once 'modele/accueilModele.php';
function liste() {
    $idRequete=listeca();
    require_once 'vue/accueilVue.php';
}