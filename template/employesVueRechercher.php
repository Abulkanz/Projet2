<?php
require_once 'include/libs/Smarty.class.php';
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
            $consultEmploye[$i]['idconnexion']=$row['login'];
            $consultEmploye[$i]['avatar']=$row['avatar'];
            $consultEmploye[$i]['idEmploye']=$row['idEmploye'];
            $consultEmploye[$i]['nom']=$row['nom'];
            $consultEmploye[$i]['prenom']=$row['prenom'];
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
        /*$test="<td><imut type='submit' name='' value'Retour'></td>";
        $tpl->assign('test',$test);*/
        $tpl->assign("msg","Consultation de la fiche d'un employe");
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->display("template/employesVueConsult.tpl");
        break;
    case 'modifier':
        $consultEmploye=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultEmploye[$i]['idconnexion']=$row['login'];
            $consultEmploye[$i]['avatar']=$row['avatar'];
            $consultEmploye[$i]['idEmploye']=$row['idEmploye'];
            $consultEmploye[$i]['nom']=$row['nom'];
            $consultEmploye[$i]['prenom']=$row['prenom'];
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
        $tpl->assign("msg","Modification de la fiche d'un employe");
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->display("template/employesVueModifier.tpl");
        break;
    case 'supprimer':
        $consultEmploye=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultEmploye[$i]['idconnexion']=$row['login'];
            $consultEmploye[$i]['avatar']=$row['avatar'];
            $consultEmploye[$i]['idEmploye']=$row['idEmploye'];
            $consultEmploye[$i]['nom']=$row['nom'];
            $consultEmploye[$i]['prenom']=$row['prenom'];
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
        $tpl->assign("msg","Suppression de la fiche d'un employe");
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->display("template/employesVueSupprimer.tpl");
        break; 
        case 'Rechercher':
        $listeEmploye=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $listeEmploye[$i]['avatar']=$row['avatar'];
            $listeEmploye[$i]['idEmploye']=$row['idEmploye'];
            $listeEmploye[$i]['nom']=$row['nom'];
            $listeEmploye[$i]['prenom']=$row['prenom'];
            $listeEmploye[$i]['fonction']=$row['fonction'];
            $i++;
        }
        $tpl->assign("msg","Resultat de la recherche");
        $nbligne=$idRequete->rowCount();
        $tpl->assign('nbligne',$nbligne);
        $tpl->assign('listeEmploye', $listeEmploye);
        $tpl->display("template/employesVueRechercher.tpl");
        break;
        case Retour:
        $listeEmploye=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $listeEmploye[$i]['avatar']=$row['avatar'];
            $listeEmploye[$i]['idEmploye']=$row['idEmploye'];
            $listeEmploye[$i]['nom']=$row['nom'];
            $listeEmploye[$i]['prenom']=$row['prenom'];
            $listeEmploye[$i]['fonction']=$row['fonction'];
            $i++;
        }
        $tpl->assign("msg","Resultat de la recherche");
        $nbligne=$idRequete->rowCount();
        $tpl->assign('nbligne',$nbligne);
        $tpl->assign('listeEmploye', $listeEmploye);
        $tpl->display("template/employesVueRechercher.tpl");
        break;

}
