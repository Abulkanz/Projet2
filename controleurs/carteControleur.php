<?php
// aide
function parDefaut(){
    require_once 'vues/carte.php';
}
function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'vues/loginVue.php';
}