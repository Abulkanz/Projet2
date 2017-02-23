<?php
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();
$login=$_SESSION['login'];
$fonction=$_SESSION['droits'];
if($fonction=="3"){
    $tpl->assign('msg','Accueil');
    $msg2=$_SESSION['fonction'];
    $tpl->assign('login',$login);
    $tpl->assign('msg2',$msg2);
    $tpl->display('template/acueilVue.tpl');
} elseif ($fonction=="2"){
    $tpl->assign('msg','Accueil');
    $tpl->assign('login',$login);
    $msg2=$_SESSION['fonction'];
    $tpl->assign('msg2',$msg2);
    $tpl->display('template/acueilVue.tpl');
}
else ($fonction=="1"){
    $tpl->assign('msg','Accueil');
    $tpl->assign('login',$login);
    $msg2=$_SESSION['fonction'];
    $tpl->assign('msg2',$msg2);
    $tpl->display('template/acueilVue.tpl');
}

