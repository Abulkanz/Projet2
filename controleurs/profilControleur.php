<?php
require_once 'modele/employesModele.php';
function profil($param) {
    $idRequete=profilEmploye($param);
    require_once 'vues/profilVue.php';
}
function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'vues/loginVue.php';
}