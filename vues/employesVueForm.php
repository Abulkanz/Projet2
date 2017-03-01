<?php
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();
$login= $_SESSION['login'];
$nom = $_SESSION['nomEmploye'];
$prenom = $_SESSION['prenomEmploye'];
$avatar = $_SESSION['avatar'];
$script = '<script src="js/jquery.min.js" type="text/javascript"></script>
           <script src="js/Chart.min.js" type="text/javascript"></script>
           <script src="js/app.js" type="text/javascript"></script>
           <script src="js/dropdown.js" type="text/javascript"></script>';

switch ($action){
    case 'ajouter' :
        $employes="<li><form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input class='lienNav' type='submit' name='employes' value='utilisateur'></form></li>";
        $tpl->assign('employes',$employes);
        $tpl->assign('login', $login);
        $tpl->assign('avatar', $avatar);
        $tpl->assign('js', $script);
        $tpl->assign("msg","Ajout d'un employé");
        $tpl->display("vues/employesVueAjouter.tpl");
        break;
    case 'consulter' :
        $consultEmploye=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultEmploye[$i]['login']=$row['login'];
            $consultEmploye[$i]['avatar']=$row['avatar'];
            $consultEmploye[$i]['idEmploye']=$row['idEmploye'];
            $consultEmploye[$i]['nomEmploye']=$row['nomEmploye'];
            $consultEmploye[$i]['prenomEmploye']=$row['prenomEmploye'];
            $consultEmploye[$i]['fonction']=$row['fonction'];
            $consultEmploye[$i]['motdepasse']=$row['motDePasse'];
            $consultEmploye[$i]['adressemail']=$row['adresse_mail'];
            $consultEmploye[$i]['droits']=$row['droits'];
            if($consultEmploye[$i]['idSexe']=$row['idSexe']==1){
                $consultEmploye[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("Civilite","Monsieur");
            } else {
                $consultEmploye[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("Civilite","Madame");
            }
            $i++;
        }
        $valeurcolspan="";
        $employes="<li><form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input class='lienNav' type='submit' name='employes' value='utilisateur'></form></li>";
        $tpl->assign('employes',$employes);
        $form="<form method='POST' action='index.php'' enctype='multipart/form-data'>";
        $bouton1="<td><input type='submit' id='retour' name='retour' value='Retour' ></td>";
        $action1="";
        $debutlignetab="";
        $finlignetab="";
        $bouton2="";
        $parametrereadonly="readonly";
        $tpl->assign("msg","Consultation de la fiche d'un employe");
        $tpl->assign("action1",$action1);
        $tpl->assign("bouton1",$bouton1);
        $tpl->assign("bouton2",$bouton2);
        $tpl->assign("valeurcolspan",$valeurcolspan);
        $tpl->assign('form',$form);
        $tpl->assign('login', $login);
        $tpl->assign('avatar', $avatar);
        $tpl->assign('js', $script);
        $tpl->assign("parametrereadonly",$parametrereadonly);
        $tpl->assign("debutlignetab",$debutlignetab);
        $tpl->assign("finlignetab",$finlignetab);
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->display("vues/employesVueForm.tpl");
        break;
    case 'modifier':
        $consultEmploye=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultEmploye[$i]['login']=$row['login'];
            $consultEmploye[$i]['avatar']=$row['avatar'];
            $consultEmploye[$i]['idEmploye']=$row['idEmploye'];
            $consultEmploye[$i]['nomEmploye']=$row['nomEmploye'];
            $consultEmploye[$i]['prenomEmploye']=$row['prenomEmploye'];
            $consultEmploye[$i]['fonction']=$row['fonction'];
            $consultEmploye[$i]['motdepasse']=$row['motDePasse'];
            $consultEmploye[$i]['adressemail']=$row['adresse_mail'];
            $consultEmploye[$i]['droits']=$row['droits'];
            if($consultEmploye[$i]['idSexe']=$row['idSexe']==1){
                $consultEmploye[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("Civilite","Monsieur");
            } else {
                $consultEmploye[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("Civilite","Madame");
            }
            $i++;
        }
        $valeurcolspan="'3'";
        $employes="<li><form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input class='lienNav' type='submit' name='employes' value='utilisateur'></form></li>";
        $tpl->assign('employes',$employes);
        $form="<form method='POST' action='index.php'' enctype='multipart/form-data'>";
        $bouton2="<td><input type='submit' id='retour' name='retour' value='Retour' ></td>";
        $action1="<input type='hidden' name='action' value='validermodification'>";
        $bouton1="<input type='submit' id='Valider' name='validermodification' value='Valider' >";
        $debutlignetab="<tr><td valeurcolspan='3'><form><input type='hidden' name='gestion' value='employes'><input type='hidden' name='action' value='vmodificationimage'><input type='file' id='avatar' name='avatar' >";
        $finlignetab="<input type='submit'' id='modifier' name='vmodificationimage' value='Modifier image' ></form></td></tr>";
        $parametrereadonly="";
        $tpl->assign("msg","Modification de la fiche d'un employe");
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->assign("action1",$action1);
        $tpl->assign("valeurcolspan",$valeurcolspan);
        $tpl->assign("bouton1",$bouton1);
        $tpl->assign("bouton2",$bouton2);
        $tpl->assign('form',$form);
        $tpl->assign('login', $login);
        $tpl->assign('avatar', $avatar);
        $tpl->assign('js', $script);
        $tpl->assign("parametrereadonly",$parametrereadonly);
        $tpl->assign("debutlignetab",$debutlignetab);
        $tpl->assign("finlignetab",$finlignetab);
        $tpl->display("vues/employesVueForm.tpl");
        break;
    case 'supprimer':
        $employes="<li><form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input class='lienNav' type='submit' name='employes' value='utilisateur'></form></li>";
        $tpl->assign('employes',$employes);
        $consultEmploye=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultEmploye[$i]['login']=$row['login'];
            $consultEmploye[$i]['avatar']=$row['avatar'];
            $consultEmploye[$i]['idEmploye']=$row['idEmploye'];
            $consultEmploye[$i]['nomEmploye']=$row['nomEmploye'];
            $consultEmploye[$i]['prenomEmploye']=$row['prenomEmploye'];
            $consultEmploye[$i]['fonction']=$row['fonction'];
            $consultEmploye[$i]['motdepasse']=$row['motDePasse'];
            $consultEmploye[$i]['adressemail']=$row['adresse_mail'];
            $consultEmploye[$i]['droits']=$row['droits'];
            if($consultEmploye[$i]['idSexe']=$row['idSexe']==1){
                $consultEmploye[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("Civilite","Monsieur");
            } else {
                $consultEmploye[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("Civilite","Madame");
            }
            $i++;
        }
        $valeurcolspan="'3'";
        $form="<form method='POST' action='index.php' enctype='multipart/form-data'>";
        $bouton1="<input type='submit' id='Valider' name='validersuppression' value='Supprimer'>";
        $bouton2="<td><input type='submit' id='retour' name='retour' value='Retour' ></td>";
        $action1="<input type='hidden' name='action' value='validersuppression'>";
        $debutlignetab="";
        $finlignetab="";
        $parametrereadonly="readonly";
        $tpl->assign("msg","Suppression de la fiche d'un employe");
        $tpl->assign('form',$form);
        $tpl->assign("action1",$action1);
        $tpl->assign("valeurcolspan",$valeurcolspan);
        $tpl->assign("bouton1",$bouton1);
        $tpl->assign("bouton2",$bouton2);
        $tpl->assign('login', $login);
        $tpl->assign('avatar', $avatar);
        $tpl->assign('js', $script);
        $tpl->assign("parametrereadonly",$parametrereadonly);
        $tpl->assign("debutlignetab",$debutlignetab);
        $tpl->assign("finlignetab",$finlignetab);
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->display("vues/employesVueForm.tpl");
        break;
}
