<?php
require_once 'modele/acueilModele.php';
function liste() {
    $idRequete=listeca();
    require_once 'template/acueilVue.php';
}
function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'template/loginVue.php';
}