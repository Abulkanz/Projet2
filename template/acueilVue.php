<?php
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();
$login=$_SESSION['login'];
$droits=$_SESSION['droits'];
if($droits=="3"){
    $employes="<form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input type='submit' name='employes' value='utilisateur'></form>";
    $tpl->assign('msg','Accueil');
    $tpl->assign('login',$login);
    $tpl->assign('employes',$employes);
    $tpl->display('template/acueilVue.tpl');
} elseif ($droits=="2"){
    $employes="";
    $tpl->assign('msg','Accueil');
    $tpl->assign('employes',$employes);
    $tpl->assign('login',$login);
    $tpl->display('template/acueilVue.tpl');
} else {
    $employes="";
    $tpl->assign('msg','Accueil');
    $tpl->assign('login',$login);
    $tpl->assign('employes',$employes);
    $tpl->display('template/acueilVue.tpl');
}

