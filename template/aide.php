<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();

// definition du tableau qui conteient les données extraite de la base
$tpl->assign('msg','Aide utilisateur');
$msg2=$_SESSION['fonction'];
$login=$_SESSION['login'];
$tpl->assign('msg2',$msg2);
$tpl->assign('login',$login);
$tpl->display('template/aide.tpl');