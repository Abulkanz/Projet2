<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/smarty/Smarty.class.php';
$tpl = new Smarty();
$login= $_SESSION['login'];
$nom = $_SESSION['nomEmploye'];
$prenom = $_SESSION['prenomEmploye'];
$avatar = $_SESSION['avatar'];
$droits = $_SESSION['droits'];
$script = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';

 if($droits=="3"){
     $employes="<li><form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input class='lienNav' type='submit' name='employes' value='utilisateur'></form></li>";
     $tpl->assign('employes',$employes);
     $tpl->assign('msg', 'Aide utilisateur');
     $tpl->assign('login', $login);
     $tpl->assign('avatar', $avatar);
     $tpl->assign('js', $script);
     $tpl->display('vues/aide.tpl');
 } elseif($droits=="2"){
     $employes="";
     $tpl->assign('employes',$employes);
     $tpl->assign('msg', 'Aide utilisateur');
     $tpl->assign('login', $login);
     $tpl->assign('avatar', $avatar);
     $tpl->assign('js', $script);
     $tpl->display('vues/aide.tpl');
 } else{
     $employes="";
     $tpl->assign('employes',$employes);
     $tpl->assign('msg', 'Aide utilisateur');
     $tpl->assign('login', $login);
     $tpl->assign('avatar', $avatar);
     $tpl->assign('js', $script);
     $tpl->display('vues/aide.tpl');
 }