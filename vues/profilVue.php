<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();

// definition du tableau qui conteient les données extraite de la base
$jScript = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';

$login= $_SESSION['login'];
$nom = $_SESSION['nomEmploye'];
$prenom = $_SESSION['prenomEmploye'];
$avatar = $_SESSION['avatar'];
$droits = $_SESSION['droits'];
if($droits=="3"){
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
    $employes="<form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input type='submit' name='employes' value='utilisateur'></form>";
    $form="<form method='POST' action='index.php'' enctype='multipart/form-data'>";
    $bouton1="";
    $action1="";
    $debutlignetab="";
    $finlignetab="";
    $parametrereadonly="readonly";
    $tpl->assign("msg","Mon profil");
    $tpl->assign('employes',$employes);
    $tpl->assign("action1",$action1);
    $tpl->assign("bouton1",$bouton1);
    $tpl->assign('form',$form);
    $tpl->assign("parametrereadonly",$parametrereadonly);
    $tpl->assign("debutlignetab",$debutlignetab);
    $tpl->assign("finlignetab",$finlignetab);
    $tpl->assign('login',$login);
    $tpl->assign('avatar',$avatar);
    $tpl->assign('js', $jScript);
    $tpl->assign('profilEmploye', $profilEmploye);
    $tpl->display("vues/profilVue.tpl");
} elseif($droits=="2"){
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
    $employes="";
    $form="<form method='POST' action='index.php'' enctype='multipart/form-data'>";
    $bouton1="";
    $action1="";
    $debutlignetab="";
    $finlignetab="";
    $parametrereadonly="readonly";
    $tpl->assign("msg","Mon profil");
    $tpl->assign('employes',$employes);
    $tpl->assign("action1",$action1);
    $tpl->assign("bouton1",$bouton1);
    $tpl->assign('form',$form);
    $tpl->assign("parametrereadonly",$parametrereadonly);
    $tpl->assign("debutlignetab",$debutlignetab);
    $tpl->assign("finlignetab",$finlignetab);
    $tpl->assign('login',$login);
    $tpl->assign('avatar',$avatar);
    $tpl->assign('js', $jScript);
    $tpl->assign('profilEmploye', $profilEmploye);
    $tpl->display("vues/profilVue.tpl");
} else{
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
    $employes="";
    $form="<form method='POST' action='index.php'' enctype='multipart/form-data'>";
    $bouton1="";
    $action1="";
    $debutlignetab="";
    $finlignetab="";
    $parametrereadonly="readonly";
    $tpl->assign("msg","Mon profil");
    $tpl->assign('employes',$employes);
    $tpl->assign("action1",$action1);
    $tpl->assign("bouton1",$bouton1);
    $tpl->assign('form',$form);
    $tpl->assign("parametrereadonly",$parametrereadonly);
    $tpl->assign("debutlignetab",$debutlignetab);
    $tpl->assign("finlignetab",$finlignetab);
    $tpl->assign('login',$login);
    $tpl->assign('avatar',$avatar);
    $tpl->assign('js', $jScript);
    $tpl->assign('profilEmploye', $profilEmploye);
    $tpl->display("vues/profilVue.tpl");
}