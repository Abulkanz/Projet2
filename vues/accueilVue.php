<?php

require_once 'include/libs/Smarty.class.php';

$tpl = new Smarty();

//$nom = $_SESSION['nomEmploye'];
//$prenom = $_SESSION['prenomEmploye'];
//$avatar = $_SESSION['avatar'];
$nom = "Marie";
$script = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';


$tpl->assign('nom', $nom);
$tpl->assign('js', $script);
$tpl->display('vues/accueilVue.tpl');