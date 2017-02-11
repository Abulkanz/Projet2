<?php
function executeRequete($cnx, $sql, $parametre=NULL){
    if($parametre==NULL){
        // requete simple
        $idRequete=$cnx->query($sql);
    } else {
        // requete preparé
        $idRequete = $cnx->prepare($sql);
        $idRequete->execute($parametre);
    }
    return $idRequete; 
}
function getBD(){
    $cnx=  connexion(UTILISATEUR, MOTDEPASSE, SERVER, BASEDEDONNEES);
    return $cnx;
}
function connexion($UTILISATEUR, $MOTDEPASSE, $SERVER, $BASEDEDONNEES){
    try {
        $cnx = new PDO('mysql:host='.SERVER.';dbname='.BASEDEDONNEES,UTILISATEUR,MOTDEPASSE, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8", PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        return $cnx;  
    } catch (PDOException $montreMoi) {
        echo 'Erreur releve:'.$montreMoi->getMessage();
        exit();
    }
}
?>
