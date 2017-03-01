<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();

// definition du tableau qui conteient les données extraite de la base
$login= $_SESSION['login'];
$nom = $_SESSION['nomEmploye'];
$prenom = $_SESSION['prenomEmploye'];
$droits = $_SESSION['droits'];
$avatar = $_SESSION['avatar'];
$script = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';
$listeEmploye=array();
$i=0;
while($row=$idRequete->fetch()){
    $listeEmploye[$i]['idEmploye']=$row['idEmploye'];
    $listeEmploye[$i]['avatar']=$row['avatar'];
    $listeEmploye[$i]['nomEmploye']=$row['nomEmploye'];
    $listeEmploye[$i]['prenomEmploye']=$row['prenomEmploye'];
    $listeEmploye[$i]['fonction']=$row['fonction'];
    $i++;
}

$nbligne=$idRequete->rowCount();
$tpl->assign('msg','Liste des employes');
$tpl->assign('login', $login);
$tpl->assign('avatar', $avatar);
$tpl->assign('js', $script);
$tpl->assign('nbligne',$nbligne);
$tpl->assign('listeEmploye', $listeEmploye);
$tpl->display('vues/employesVueListe.tpl');