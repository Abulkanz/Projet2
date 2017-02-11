<?php
// on charge le fichier modele.php qui contient les fonction servant pour la base de données
include  'modele.php' ;

// fonction qui est appelé par la fonction liste dans le controleur
function listeEmploye(){
    $cnx=getBD();
    $sql="SELECT * FROM employes";
    $idRequete=  executeRequete($cnx, $sql);
    return $idRequete;
}
function rechercheremploye($param){
    $idEmployes= $param['nom'];
    $cnx=getBD();
    $sql="SELECT * FROM employes WHERE nom LIKE CONCAT('%', ?, '%')";
    $idRequete=  executeRequete($cnx, $sql,array($idEmployes));
    return $idRequete;
}
function trieremploye($param){
    $elementtrie= $param['choix'];
    $cnx=getBD();
    $sql="SELECT nom,prenom FROM employes ORDER BY ? ASC";
    $idRequete=  executeRequete($cnx, $sql,array($elementtrie));
    return $idRequete;
}
function consultEmploye($param){
    $idEmployes= $param['identifiant'];
    $cnx=getBD();
    $sql="SELECT * FROM employes WHERE idEmploye = ?";
    $idRequete=  executeRequete($cnx, $sql,array($idEmployes));
    return $idRequete;
}
function ajouterEmploye($param){
    $idConnexion = $param["idconnexion"];
    $nom=$param["nom"];
    $prenom=$param["prenom"]; 
    $fonction=$param["fonction"]; 
    $mail=$param["mail"];
    $mdp_temp=$param["motdepasse"];
    $droits=$param["droits"];
    $idSexe=$param["idSexe"];
    

    // traitement du mots de passe
    $droite="tk!@";
    $gauche="ar30&bb%";
    $motdepasse=hash('Ripemd128',"$gauche.$mdp_temp.$droite");
    // traitemment de l'image
    // on recupere l'image : nom, type, taille,..
    $imgFile = $_FILES["avatar"]["name"];
    $tmp_dir = $_FILES["avatar"]["tmp_name"];
    $imgSize = $_FILES["avatar"]["size"];
    
    // traitement de l'image
    // on definit le repertoire ou sera sotcké l'image
    $upload_dir = 'img/'; 
    // on receuper l'extension du fichier image
    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
    // on recupere le nom de l'image
    $nomImg = strtolower(pathinfo($imgFile,PATHINFO_FILENAME));
    // on definit les types de fichier qui seront pris en compte
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
    // on renome l'image 
    $userpic = $nomImg.'.'.$imgExt;

    // on passe a l'envoie du fichier
            // on verifier d'abord que le fichier est correct
            if(in_array($imgExt, $valid_extensions)){
                if($imgSize < 5000000){  
                    move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                }
                else {
                    $errMSG = "Le fichier est trop gros";
                }
            }
            else{
                $errMSG = "Le format de l'image n'est pas pris en charge";  
            }
            if(!isset($errMSG)){
                // on insere dans la bdd
                $cnx=getBD();
                $Sql = "INSERT INTO employes(idConnexion, nom, prenom, fonction, motDePasse, avatar, adresse_mail, droits, idSexe) VALUES (?,?,?,?,?,?,?,?,?)";
                $idRequete = executeRequete($cnx,$Sql,array($idConnexion,$nom,$prenom,$fonction,$motdepasse,$userpic,$mail,$droits,$idSexe));
            }
    return $idRequete;
}