<?php
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();
$login= $_SESSION['login'];
$nom = $_SESSION['nomEmploye'];
$prenom = $_SESSION['prenomEmploye'];
$droits = $_SESSION['droits'];
$avatar = $_SESSION['avatar'];
$script = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';
if($droits=="3"){
    $employes="<form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input type='submit' name='employes' value='utilisateur'></form>";
    $tpl->assign('msg','Carte');
    $tpl->assign('login',$login);
    $tpl->assign('avatar', $avatar);
    $tpl->assign('js', $script);
    $tpl->assign('employes',$employes);
    $tpl->display('vues/carteVue.tpl');
} elseif ($droits=="2"){
    $employes="";
    $tpl->assign('msg','Carte');
    $tpl->assign('employes',$employes);
    $tpl->assign('login',$login);
    $tpl->assign('avatar', $avatar);
    $tpl->assign('js', $script);
    $tpl->display('vues/carteVue.tpl');
} else {
    $employes="";
    $tpl->assign('msg','Carte');
    $tpl->assign('avatar', $avatar);
    $tpl->assign('js', $script);
    $tpl->assign('employes',$employes);
    $tpl->display('vues/carteVue.tpl');
}
