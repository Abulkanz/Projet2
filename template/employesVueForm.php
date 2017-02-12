<?php
require_once 'include/libs/Smarty.class.php';
$tpl=new Smarty();
switch ($action){
    case 'ajouter' :
        $tpl->assign("msg","Ajout d'un employes");
        $tpl->assign("G", "Gramme");
        $tpl->assign("P", "Poids piece");
        $tpl->assign("valeur", 0);
        $tpl->display("template/employesVueAjouter.tpl");
        break;
    case 'consulter' :
        $consultEmploye=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultEmploye[$i]['idSexe']=$row['idSexe'];
            $consultEmploye[$i]['nom']=$row['nom'];
            $consultEmploye[$i]['prenom']=$row['prenom'];
            $consultEmploye[$i]['fonction']=$row['fonction'];
            $consultEmploye[$i]['adressemail']=$row['adresse_mail'];
            $consultEmploye[$i]['droits']=$row['droits'];
            $i++;
        }
        $tpl->assign("msg","Consultation de la fiche d'un employe");
        $tpl->assign("G", "Gramme");
        $tpl->assign("P", "Poids piece");
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->display("template/employesVueConsult.tpl");
        break;
    case 'modifier':
        $consultEmploye=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultEmploye[$i]['idconnexion']=$row['idConnexion'];
            $consultEmploye[$i]['avatar']=$row['avatar'];
            $consultEmploye[$i]['idEmploye']=$row['idEmploye'];
            $consultEmploye[$i]['idSexe']=$row['idSexe'];
            $consultEmploye[$i]['nom']=$row['nom'];
            $consultEmploye[$i]['prenom']=$row['prenom'];
            $consultEmploye[$i]['fonction']=$row['fonction'];
            $consultEmploye[$i]['motdepasse']=$row['motDePasse'];
            $consultEmploye[$i]['adressemail']=$row['adresse_mail'];
            $consultEmploye[$i]['droits']=$row['droits'];
            $i++;
        }
        $tpl->assign("msg","Modification de la fiche d'un employe");
        $tpl->assign("G", "Gramme");
        $tpl->assign("P", "Poids piece");
        $tpl->assign('consultEmploye', $consultEmploye);
        $tpl->display("template/employesVueModifier.tpl");
        break;
    case 'supprimer':
        $supprimerProduits=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $modifierProduits[$i]['reference']=$row['reference'];
            $modifierProduits[$i]['designation']=$row['designation'];
            $modifierProduits[$i]['prixunitaireht']=$row['prix_unitaire_HT'];
            $modifierProduits[$i]['descriptif']=$row['descriptif'];
            $modifierProduits[$i]['stock']=$row['stock'];
            $modifierProduits[$i]['quantite']=$row['quantite'];
            $modifierProduits[$i]['poidspiece']=$row['poids_piece'];
            $i++;
        }
        $tpl->assign("msg","Suppresion du produit");
        $tpl->assign("G", "Gramme");
        $tpl->assign("P", "Poids piece");
        $tpl->assign('modifierProduits', $modifierProduits);
        $tpl->display("vue/produitVueSupprimer.tpl");
        break;   
}
