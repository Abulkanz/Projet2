<?php 
// on appele fichier modele approprié
require_once 'modele/employesModele.php';

// fonction ajouter
function ajouter($param) {
    $action=$param['action'];
    require_once 'template/employesVueForm.php';
}
// fonction validerajouter
function validerajouter($param) {
    $action=$param['action'];
    $idRequete=  ajouterEmploye($param);
    liste();
}
// fonction consulter
function consulter($param) {
    $action=$param['action'];
    $idRequete=consultEmploye($param);
    require_once 'template/employesVueForm.php';
}
// fonction modifier 
// fonction validermodification
// suppression
// rechercher
function rechercher($param){
    $action=$param['action'];
    $idRequete= rechercheremploye($param);
    require_once 'template/employesVueListe.php';
}
// trier
function trier($param){
    $action=$param['action'];
    $idRequete= trieremploye($param);
    require_once 'template/employesVueListe.php';
}
// fonction valider 
function valider(){
    liste();
}
// fonction retour
function retour(){
    liste();
}
// fonction pour liste les employés
function liste() {
    $idRequete=listeEmploye();
    require_once 'template/employesVueListe.php';
}