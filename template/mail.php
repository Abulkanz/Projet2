<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/Smarty.class.php';
require('include/libs/phpmailer/PHPMailerAutoload.php'); 
$tpl=new Smarty();

// definition du tableau qui conteient les données extraite de la base
$listeEmploye=array();
$i=0;
while($row=$idRequete->fetch()){
    $listeEmploye[$i]['idEmploye']=$row['idEmploye'];
    $listeEmploye[$i]['avatar']=$row['avatar'];
    $listeEmploye[$i]['nom']=$row['nom'];
    $listeEmploye[$i]['prenom']=$row['prenom'];
    $listeEmploye[$i]['fonction']=$row['fonction'];
    $i++;
}
$tpl->assign('listeEmploye', $listeEmploye);
$tpl->display('template/mail.tpl');