<?php
// on charge le fichier modele.php qui contient les fonction servant pour la base de données
require_once 'modele.php';

// fonction qui est appelé par la fonction liste dans le controleur
function listeEmploye(){
    $cnx=getBD();
    $sql="SELECT * FROM employes";
    $idRequete=  executeR($cnx, $sql);
    return $idRequete;
}
function consultEmploye($param){
    $idEmployes= $param['identifiant'];
    $cnx=getBD();
    $sql="SELECT * FROM employes WHERE idEmploye = ?";
    $idRequete=  executeR($cnx, $sql,array($idEmployes));
    return $idRequete;
}
function ajouterEmploye($param){
    $login = $param["login"];
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
        }else {
            $errMSG = "Le fichier est trop gros";
        }
    }else{
         $errMSG = "Le format de l'image n'est pas pris en charge";  
    }
    if(!isset($errMSG)){
        // on insere dans la bdd
         $cnx=getBD();
         $Sql = "INSERT INTO employes(login, nomEmploye, prenomEmploye, fonction, motDePasse, avatar, adresse_mail, droits, idSexe) VALUES (?,?,?,?,?,?,?,?,?)";
         $idRequete = executeR($cnx,$Sql,array($login,$nom,$prenom,$fonction,$motdepasse,$userpic,$mail,$droits,$idSexe));
    }
    return $idRequete;
}
// fonction pour modifier la totalité des information sans l'image
function modifierEmploye($param){
    $idEmploye = $param["idEmploye"];
    $login = $param["login"];
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
    $cnx=getBD();
    $Sql = "UPDATE employes SET login=?, nomEmploye=?, prenomEmploye=?, fonction=?, motDePasse=?, adresse_mail=?,droits=? WHERE idEmploye=?";
    $idRequete = executeR($cnx,$Sql,array($login, $nom,$prenom,$fonction,$motdepasse,$mail,$droits,$idEmploye));

    return $idRequete;
}
function modifierImageEmploye($param){
    $idEmployes=$param["idEmploye"];
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
    if(in_array($imgExt, $valid_extensions)){
        if($imgSize < 5000000){  
            move_uploaded_file($tmp_dir,$upload_dir.$userpic);
            } else { 
                $errMSG = "Le fichier est trop gros";
			}
		} else {
            $errMSG = "Le format de l'image n'est pas pris en charge";  
		}
	if(!isset($errMSG)){
        // on insere dans la bdd
        $cnx=getBD();
        $Sql = "UPDATE employes SET avatar=? WHERE idEmploye=?";
        $idRequete = executeR($cnx,$Sql,array($userpic,$idEmployes));
    }
    return $idRequete;
}
function supprimerEmploye($param){
    $idEmployes=$param["idEmploye"];
    $cnx=getBD();
    $sql="DELETE FROM employes WHERE idEmploye = ?";;
    $idRequete=  executeR($cnx, $sql,array($idEmployes));
    return $idRequete;
}
function corspmail($param){
    $idEmployes= $param['idEmploye'];
    $cnx=getBD();
    $sql="SELECT * FROM employes WHERE idEmploye = ?";
    $idRequete=  executeR($cnx, $sql,array($idEmployes));
    return $idRequete;
}
function profilEmploye($param){
    $idEmployes= $param['identifiant'];
    $cnx=getBD();
    $sql="SELECT * FROM employes WHERE login = ?";
    $idRequete=  executeR($cnx, $sql,array($idEmployes));
    return $idRequete;
}