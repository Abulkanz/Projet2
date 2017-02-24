<?php
require_once 'modele/employesModele.php';
function profil($param) {
    $action=$param['action'];
    $idRequete=profilEmploye($param);
    require_once 'template/profil.php';
}
function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'template/loginVue.php';
}