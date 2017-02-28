<?php

function parDefaut(){
require_once 'vues/accueilVue.php';
}

function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'vues/loginVue.php';
}
