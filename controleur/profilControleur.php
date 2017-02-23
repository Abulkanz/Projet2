<?php
require_once 'modele/employesModele.php';
function profil($param) {
    $action=$param['action'];
    $idRequete=profilEmploye($param);
    require_once 'template/profil.php';
}