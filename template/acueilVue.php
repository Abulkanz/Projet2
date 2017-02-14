<?php
require_once 'include/libs/Smarty.class.php';
$tpl=new Smarty();
/*$listeProduits=array();
$i=0;
while($row=$idRequete->fetch()){
    $listeProduits[$i]['reference']=$row['reference'];
    $listeProduits[$i]['designation']=$row['designation'];
    $listeProduits[$i]['prix']=$row['prix_unitaire_HT'];
    $i++;
}
$nbligne=$idRequete->rowCount();*/
$tpl->assign('msg','Accueil');
/*$tpl->assign('nbligne',$nbligne);
$tpl->assign('listeProduits', $listeProduits);*/
$tpl->display('template/accueilVue.tpl');
