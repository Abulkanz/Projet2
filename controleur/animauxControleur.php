<?php 
// on appele fichier modele approprié
require_once 'modele/animauxModele.php';

// fonction ajouter
function ajouter($param) {
    $action=$param['action'];
    require_once 'template/AnimauxVueForm.php';
}
// fonction validerajouter
function validerajouter($param) {
    $action=$param['action'];
    $idRequete=  ajouterAnimaux($param);
    liste();
}
// fonction consulter
function consulter($param) {
    $action=$param['action'];
    $idRequete=consultAnimaux($param);
    require_once 'template/animauxVueForm.php';
}
// fonction modifier
function modifier($param) {
    $action=$param['action'];
    $idRequete=consultAnimaux($param);
    require_once 'template/AnimauxVueForm.php';
}
// fonction validermodification
function validermodification($param){
    $action=$param['action'];
    $idRequete= modifierAnimaux($param);
    liste();
}
// fonction vmodificationimage
function vmodificationimage($param){
    $action=$param['action'];
    $idRequete= modifierImageAnimaux($param);
    liste();
}
// suppression
function supprimer($param) {
    $action=$param['action'];
    $idRequete=consultAnimaux($param);
    require_once 'template/AnimauxVueForm.php';
}
// valider la suppression
function validersuppression($param) {
    $action=$param['action'];
    $idRequete= supprimerAnimaux($param);
    liste();
}
// rechercher
function rechercher($param){
    $action=$param['action'];
    $idRequete= rechercherAnimaux($param);
    require_once 'template/AnimauxVueRechercher.php';
}
// trier
function trier($param){
    $action=$param['action'];
    $idRequete= trierAnimaux($param);
    require_once 'template/animeauxVueListe.php';
}
// fonction valider 
function valider(){
    liste();
}
// fonction retour
function retour($param){
    liste();
}
// fonction pour liste les employés
function liste() {
    $idRequete=listeAnimaux();
    require_once 'template/animauxVueListe.php';
}
function envoyermail($param){
    $action=$param['action'];
    $idRequete=envoyermails($param);
    require_once 'template/mail.php';
}
function deconnexion(){
    $_SESSION = array();
    session_destroy();
    require_once 'template/loginVue.php';
}