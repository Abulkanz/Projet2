<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty();

// definition du tableau qui conteient les données extraite de la base
$droits=$_SESSION['droits'];
$login=$_SESSION['login'];
if($droits=="3"){
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
        if($listeAnimaux[$i]['sexe']=='M'){
            $tpl->assign("sexe","Male");
        }elseif($listeAnimaux[$i]['sexe']=='F'){
            $tpl->assign("sexe","Femelle");
        } else {
            $tpl->assign("sexe","");
        }
        $i++;
        }

    $style="";
    $employes="<form method='POST' action='index.php'><input type='hidden' name='gestion' value='employes'><input type='submit' name='employes' value='utilisateur'></form>";
    $consulter="<input type='hidden' name='action' value='consulter'><input type='submit' name='consulter' value='Consulter'>";
    $modifier="<input type='hidden' name='action' value='modifier'><input type='submit' name='modifier' value='Modifier'>";
    $supprimer="<input type='hidden' name='action' value='supprimer'><input type='submit' name='supprimer' value='Supprimer'>";
    $ajouter="<form method='POST' action='index.php'><p><label>Ajout d'un animal</label><input type='hidden' name='gestion' value='animaux'><input type='hidden' name='action' value='ajouter'><input type='submit' name='ajouter' value='Ajouter'></p></form>";
    $nbligne=$idRequete->rowCount();
    $tpl->assign('msg','Liste des animaux');
    $tpl->assign('login',$login);
    $tpl->assign('employes',$employes);
    $tpl->assign('style',$style);
    $tpl->assign('consulter',$consulter);
    $tpl->assign('modifier',$modifier);
    $tpl->assign('supprimer',$supprimer);
    $tpl->assign('ajouter',$ajouter);
    $tpl->assign('nbligne',$nbligne);
    $tpl->assign('listeAnimaux', $listeAnimaux);
    $tpl->display('template/animauxVueListe.tpl');
} elseif($droits=="2"){
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
        if($listeAnimaux[$i]['sexe']=='M'){
            $tpl->assign("sexe","Male");
        }elseif($listeAnimaux[$i]['sexe']=='F'){
            $tpl->assign("sexe","Femelle");
        } else {
            $tpl->assign("sexe","");
        }
        $i++;
        }
    $style="";
    $employes="";
    $consulter="<input type='hidden' name='action' value='consulter'><input type='submit' name='consulter' value='Consulter'>";
    $modifier="<input type='hidden' name='action' value='modifier'><input type='submit' name='modifier' value='Modifier'>";
    $supprimer="<input type='hidden' name='action' value='supprimer'><input type='submit' name='supprimer' value='Supprimer'>";
    $ajouter="<form method='POST' action='index.php'><p><label>Ajout d'un animal</label><input type='hidden' name='gestion' value='animaux'><input type='hidden' name='action' value='ajouter'><input type='submit' name='ajouter' value='Ajouter'></p></form>";
    $nbligne=$idRequete->rowCount();
    $tpl->assign('msg','Liste des animaux');
    $tpl->assign('login',$login);
    $tpl->assign('employes',$employes);
    $tpl->assign('style',$style);
    $tpl->assign('consulter',$consulter);
    $tpl->assign('modifier',$modifier);
    $tpl->assign('supprimer',$supprimer);
    $tpl->assign('ajouter',$ajouter);
    $tpl->assign('nbligne',$nbligne);
    $tpl->assign('listeAnimaux', $listeAnimaux);
    $tpl->display('template/animauxVueListe.tpl');
} else{
    $tpl->assign('login',$login);
    $i=0;
    $listeAnimaux=array();
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
        if($listeAnimaux[$i]['sexe']=='M'){
            $tpl->assign("sexe","Male");
        }elseif($listeAnimaux[$i]['sexe']=='F'){
            $tpl->assign("sexe","Femelle");
        } else {
            $tpl->assign("sexe","");
        }
        $i++;
        }
    $style="style='display: none;'";
    $employes="";
    $consulter="<input type='hidden' name='action' value='consulter'><input type='submit' name='consulter' value='Consulter'>";
    $modifier="";
    $supprimer="";
    $ajouter="";
    $nbligne=$idRequete->rowCount();
    $tpl->assign('msg','Liste des animaux');
    $tpl->assign('employes',$employes);
    $tpl->assign('style',$style);
    $tpl->assign('consulter',$consulter);
    $tpl->assign('modifier',$modifier);
    $tpl->assign('supprimer',$supprimer);
    $tpl->assign('ajouter',$ajouter);
    $tpl->assign('nbligne',$nbligne);
    $tpl->assign('listeAnimaux', $listeAnimaux);
    $tpl->display('template/animauxVueListe.tpl');
}