<?php
require_once 'modele/loginModele.php';
function connection(){
    require_once 'template/loginVue.php';
}
function authentification($param){
    $action=$param['action'];
    $idRequete= validationauth($param);
}
