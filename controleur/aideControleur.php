<?php
// aide
function aide(){
    require_once 'template/aide.php';
}
function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'template/loginVue.php';
}