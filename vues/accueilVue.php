<?php

require_once 'include/libs/smarty/Smarty.class.php';
$tpl = new Smarty();
$login= $_SESSION['login'];
$nom = $_SESSION['nomEmploye'];
$prenom = $_SESSION['prenomEmploye'];
$avatar = $_SESSION['avatar'];
$script = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';


$tpl->assign('login', $login);
$tpl->assign('avatar', $avatar);
$tpl->assign('js', $script);
$tpl->display('vues/accueilVue.tpl');