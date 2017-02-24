<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();

// definition du tableau qui conteient les données extraite de la base
$droits=$_SESSION['droits'];
$login=$_SESSION['login'];
if($droits=="3"){
    $employes="<form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input type='submit' name='employes' value='utilisateur'></form>";
    $tpl->assign('msg','Aide utilisateur');
    $tpl->assign('employes',$employes);
    $tpl->assign('login',$login);
    $tpl->display('template/aide.tpl');
} elseif($droits=="2"){
    $employes="";
    $tpl->assign('msg','Aide utilisateur');
    $tpl->assign('employes',$employes);
    $tpl->assign('login',$login);
    $tpl->display('template/aide.tpl');
} else {
    $employes="";
    $tpl->assign('msg','Aide utilisateur');
    $tpl->assign('employes',$employes);
    $tpl->assign('login',$login);
    $tpl->display('template/aide.tpl');
}