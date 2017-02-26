<?php
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();
switch ($action){
    case 'ajouter' :
        $tpl->assign("msg","Ajout d'un animal");
        $tpl->display("template/AnimauxVueAjouter.tpl");
        break;
    case 'consulter' :
        $consultAnimaux=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultAnimaux[$i]['idAnimaux']=$row['idAnimaux'];
            $consultAnimaux[$i]['prenomAnimal']=$row['prenomAnimal'];
            $consultAnimaux[$i]['photo']=$row['photo'];
            $consultAnimaux[$i]['poids']=$row['poids'];
            $consultAnimaux[$i]['taille']=$row['taille'];
            $consultAnimaux[$i]['statut']=$row['statut'];
            $consultAnimaux[$i]['date_naissance']=$row['date_naissance'];
            $consultAnimaux[$i]['lieu_naissance']=$row['lieu_naissance'];
            $consultAnimaux[$i]['nomParcelle']=$row['nomParcelle'];
            $consultAnimaux[$i]['description']=$row['description'];
            if($consultAnimaux[$i]['idSexe']=$row['idSexe']==1){
                $consultAnimaux[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("genre","Mâle");
            } else {
                $consultAnimaux[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("genre","Femelle");
            }
            $i++;
        }
        $form="<form method='POST' action='index.php' enctype='multipart/form-data'>";
        $bouton1="<input type='submit' name='envoyermail' value='Envoyer la fiche par mail' />";
        $action1="<input type='hidden' name='action' value='envoyermail'>";
        $debutlignetab="";
        $finlignetab="";
        $parametrereadonly="readonly";
        $tpl->assign("msg","Consultation de la fiche d'un Animal");
        $tpl->assign("action1",$action1);
        $tpl->assign("bouton1",$bouton1);
        $tpl->assign('form',$form);
        $tpl->assign("parametrereadonly",$parametrereadonly);
        $tpl->assign("debutlignetab",$debutlignetab);
        $tpl->assign("finlignetab",$finlignetab);
        $tpl->assign('consultAnimaux', $consultAnimaux);
        $tpl->display("template/AnimauxVueForm.tpl");
        break;
    case 'modifier':
        $consultAnimaux=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultAnimaux[$i]['idAnimaux']=$row['idAnimaux'];
            $consultAnimaux[$i]['prenomAnimal']=$row['prenomAnimal'];
            $consultAnimaux[$i]['photo']=$row['photo'];
            $consultAnimaux[$i]['poids']=$row['poids'];
            $consultAnimaux[$i]['taille']=$row['taille'];
            $consultAnimaux[$i]['statut']=$row['statut'];
            $consultAnimaux[$i]['date_naissance']=$row['date_naissance'];
            $consultAnimaux[$i]['lieu_naissance']=$row['lieu_naissance'];
            $consultAnimaux[$i]['nomParcelle']=$row['nomParcelle'];
            $consultAnimaux[$i]['description']=$row['description'];
            if($consultAnimaux[$i]['idSexe']=$row['idSexe']==1){
                $consultAnimaux[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("genre","Mâle");
            } else {
                $consultAnimaux[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("genre","Femelle");
            }
            $i++;
        }
        $form="<form method='POST' action='index.php' enctype='multipart/form-data'>";
        $action1="<input type='hidden' name='action' value='validermodification'>";
        $bouton1="<input type='submit' id='validermodification' name='validermodification' value='Valider' >";
        $debutlignetab="<tr><td colspan='3'><form><input type='hidden' name='gestion' value='animaux'><input type='hidden' name='action' value='vmodificationimage'><input type='file' id='photo' name='photo' >";
        $finlignetab="<input type='submit' id='modifier' name='vmodificationimage' value='Modifier' ></form></td></tr>";
        $parametrereadonly="";
        $tpl->assign("msg","Modification de la fiche d'un Animaux");
        $tpl->assign('consultAnimaux', $consultAnimaux);
        $tpl->assign("action1",$action1);
        $tpl->assign("bouton1",$bouton1);
        $tpl->assign('form',$form);
        $tpl->assign("parametrereadonly",$parametrereadonly);
        $tpl->assign("debutlignetab",$debutlignetab);
        $tpl->assign("finlignetab",$finlignetab);
        $tpl->display("template/AnimauxVueForm.tpl");
        break;
    case 'supprimer':
        $consultAnimaux=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $consultAnimaux[$i]['idAnimaux']=$row['idAnimaux'];
            $consultAnimaux[$i]['prenomAnimal']=$row['prenomAnimal'];
            $consultAnimaux[$i]['photo']=$row['photo'];
            $consultAnimaux[$i]['poids']=$row['poids'];
            $consultAnimaux[$i]['taille']=$row['taille'];
            $consultAnimaux[$i]['statut']=$row['statut'];
            $consultAnimaux[$i]['date_naissance']=$row['date_naissance'];
            $consultAnimaux[$i]['lieu_naissance']=$row['lieu_naissance'];
            $consultAnimaux[$i]['nomParcelle']=$row['nomParcelle'];
            $consultAnimaux[$i]['description']=$row['description'];
            if($consultAnimaux[$i]['idSexe']=$row['idSexe']==1){
                $consultAnimaux[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("genre","Mâle");
            } else {
                $consultAnimaux[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("genre","Femelle");
            }
            $i++;
        }
        $form="<form method='POST' action='index.php' enctype='multipart/form-data'>";
        $bouton1="<input type='submit' id='validersuppression' name='validersuppression' value='Supprimer'>";
        $action1="<input type='hidden' name='action' value='validersuppression'>";
        $debutlignetab="";
        $finlignetab="";
        $parametrereadonly="readonly";
        $tpl->assign("msg","Suppression de la fiche d'un Animaux");
        $tpl->assign('form',$form);
        $tpl->assign("action1",$action1);
        $tpl->assign("bouton1",$bouton1);
        $tpl->assign("parametrereadonly",$parametrereadonly);
        $tpl->assign("debutlignetab",$debutlignetab);
        $tpl->assign("finlignetab",$finlignetab);
        $tpl->assign('consultAnimaux', $consultAnimaux);
        $tpl->display("template/AnimauxVueForm.tpl");
        break; 
        case 'Rechercher':
        $listeAnimaux=array();
        $i=0;
        while($row=$idRequete->fetch()){
            $listeAnimaux[$i]['idAnimaux']=$row['idAnimaux'];
            $listeAnimaux[$i]['poids']=$row['poids'];
            $listeAnimaux[$i]['taille']=$row['taille'];
            $listeAnimaux[$i]['prenomAnimal']=$row['prenomAnimal'];
            $listeAnimaux[$i]['photo']=$row['photo'];
            $listeAnimaux[$i]['date_naissance']=$row['date_naissance'];
            $listeAnimaux[$i]['lieu_naissance']=$row['lieu_naissance'];
            $listeAnimaux[$i]['statut']=$row['statut'];
            $listeAnimaux[$i]['nomEspece']=$row['nomEspece'];
            $listeAnimaux[$i]['sexe']=$row['sexe'];
            if($consultAnimaux[$i]['idSexe']=$row['idSexe']==1){
                $consultAnimaux[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("genre","Mâle");
            } else {
                $consultAnimaux[$i]['idSexe']=$row['idSexe'];
                $tpl->assign("genre","Femelle");
            }
            $i++;
        }
        $tpl->assign("msg","Resultat de la recherche");
        $nbligne=$idRequete->rowCount();
        $tpl->assign('nbligne',$nbligne);
        $tpl->assign('listeAnimaux', $listeAnimaux);
        $tpl->display("template/AnimauxVueRechercher.tpl");
        break;

}
