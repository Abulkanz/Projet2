<?php
// aide
function carte(){
    require_once 'template/carte.php';
}
function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'template/loginVue.php';
}