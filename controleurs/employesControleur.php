<?php 
// on appele fichier modele approprié
require_once 'modele/employesModele.php';

// fonction ajouter
function ajouter($param) {
    $action=$param['action'];
    require_once 'vues/employesVueForm.php';
}
// fonction validerajouter
function validerajouter($param) {
    $action=$param['action'];
    $idRequete=  ajouterEmploye($param);
    parDefaut();
}
// fonction consulter
function consulter($param) {
    $action=$param['action'];
    $idRequete=consultEmploye($param);
    require_once 'vues/employesVueForm.php';
}
// fonction modifier
function modifier($param) {
    $action=$param['action'];
    $idRequete=consultEmploye($param);
    require_once 'vues/employesVueForm.php';
}
// fonction validermodification
function validermodification($param){
    $action=$param['action'];
    $idRequete= modifierEmploye($param);
    parDefaut();
}
// fonction vmodificationimage
function vmodificationimage($param){
    $action=$param['action'];
    $idRequete= modifierImageEmploye($param);
    parDefaut();
}
// suppression
function supprimer($param) {
    $action=$param['action'];
    $idRequete=consultEmploye($param);
    require_once 'vues/employesVueForm.php';
}
// valider la suppression
function validersuppression($param) {
    $action=$param['action'];
    $idRequete= supprimerEmploye($param);
    parDefaut();
}
// fonction valider 
function valider(){
    parDefaut();
}
// fonction retour
function retour(){
    parDefaut();
}
// fonction pour liste les employés
function parDefaut() {
    $idRequete=listeEmploye();
    require_once 'vues/employesVueListe.php';
}
function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'vues/loginVue.php';
}