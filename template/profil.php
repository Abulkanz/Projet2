<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();

// definition du tableau qui conteient les données extraite de la base
$login=$_SESSION['login'];
$profilEmploye=array();
$i=0;
while($row=$idRequete->fetch()){
    $profilEmploye[$i]['login']=$row['login'];
    $profilEmploye[$i]['avatar']=$row['avatar'];
    $profilEmploye[$i]['idEmploye']=$row['idEmploye'];
    $profilEmploye[$i]['nomEmploye']=$row['nomEmploye'];
    $profilEmploye[$i]['prenomEmploye']=$row['prenomEmploye'];
    $profilEmploye[$i]['fonction']=$row['fonction'];
    $profilEmploye[$i]['motdepasse']=$row['motDePasse'];
    $profilEmploye[$i]['adressemail']=$row['adresse_mail'];
    $profilEmploye[$i]['droits']=$row['droits'];
    if($profilEmploye[$i]['idSexe']=$row['idSexe']==1){
        $profilEmploye[$i]['idSexe']=$row['idSexe'];
        $tpl->assign("Civilite","Monsieur");
    } else {
        $profilEmploye[$i]['idSexe']=$row['idSexe'];
        $tpl->assign("Civilite","Madame");
    }
     $i++;
    }
$form="<form method='POST' action='index.php'' enctype='multipart/form-data'>";
$bouton1="";
$action1="";
$debutlignetab="";
$finlignetab="";
$parametrereadonly="readonly";
$tpl->assign("msg","Mon profil");
$tpl->assign("action1",$action1);
$tpl->assign("bouton1",$bouton1);
$tpl->assign('form',$form);
$tpl->assign("parametrereadonly",$parametrereadonly);
$tpl->assign("debutlignetab",$debutlignetab);
$tpl->assign("finlignetab",$finlignetab);
$tpl->assign('login',$login);
$tpl->assign('profilEmploye', $profilEmploye);
$tpl->display("template/profil.tpl");