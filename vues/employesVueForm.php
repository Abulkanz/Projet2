<?php
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();
switch ($action){
    case 'ajouter' :
        $tpl->assign("msg","Ajout d'un employé");
        $tpl->display("template/employesVueAjouter.tpl");
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
        $tpl->assign("parametrereadonly",$parametrereadonly);
        $tpl->assign("debutlignetab",$debutlignetab);
        $tpl->assign("finlignetab",$finlignetab);
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->display("template/employesVueForm.tpl");
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
        $form="<form method='POST' action='index.php'' enctype='multipart/form-data'>";
        $bouton2="<td><input type='submit' id='retour' name='retour' value='Retour' ></td>";
        $action1="<input type='hidden' name='action' value='validermodification'>";
        $bouton1="<input type='submit' id='Valider' name='validermodification' value='Valider' >";
        $debutlignetab="<tr><td valeurcolspan='3'><form><input type='hidden' name='gestion' value='employes'><input type='hidden' name='action' value='vmodificationimage'><input type='file' id='avatar' name='avatar' >";
        $finlignetab="<input type='submit'' id='modifier'' name='vmodificationimage'' value='Modifier' ></form></td></tr>";
        $parametrereadonly="";
        $tpl->assign("msg","Modification de la fiche d'un employe");
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->assign("action1",$action1);
        $tpl->assign("valeurcolspan",$valeurcolspan);
        $tpl->assign("bouton1",$bouton1);
        $tpl->assign("bouton2",$bouton2);
        $tpl->assign('form',$form);
        $tpl->assign("parametrereadonly",$parametrereadonly);
        $tpl->assign("debutlignetab",$debutlignetab);
        $tpl->assign("finlignetab",$finlignetab);
        $tpl->display("template/employesVueForm.tpl");
        break;
    case 'supprimer':
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
        $tpl->assign("parametrereadonly",$parametrereadonly);
        $tpl->assign("debutlignetab",$debutlignetab);
        $tpl->assign("finlignetab",$finlignetab);
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->display("template/employesVueForm.tpl");
        break;
}
