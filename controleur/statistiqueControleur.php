<?php
// aide
function statistique(){
    require_once 'template/statistique.php';
}
function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'template/loginVue.php';
}