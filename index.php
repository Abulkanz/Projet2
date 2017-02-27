<?php
session_start();
require_once 'include/configuration.php';
if (isset($_POST['deconnexion'])) {
    deconnexion();
}else{
if (!isset($_SESSION['login'])) {
    $gestion = 'login';
} else {
    if (isset($_REQUEST['gestion'])) {
        $gestion = $_REQUEST['gestion'];
    } else {
        $gestion = 'accueil';
    }
}
require_once 'controleurs/router.php';
}
?>