<?php
// on charge le fichier modele.php qui contient les fonction servant pour la base de données
include  'modele.php' ;

// fonction qui est appelé par la fonction liste dans le controleur
function listeAnimaux(){
    $cnx=getBD();
    $sql="SELECT * FROM animaux, especes, sexe WHERE animaux.idEspece=especes.idEspece AND animaux.idSexe=sexe.idSexe";
    $idRequete=  executeRequete($cnx, $sql);
    return $idRequete;
}
function rechercherAnimal($param){
    $idEmployes= $param['nom'];
    $cnx=getBD();
    $sql="SELECT * FROM animaux WHERE nom  LIKE CONCAT('%', ?, '%')";
    $idRequete=  executeRequete($cnx, $sql,array($idEmployes));
    return $idRequete;
}
function trierAnimal($param){
    $elementtrie= $param['choix'];
    $cnx=getBD();
    $sql="SELECT nom,prenom FROM animeaux ORDER BY ? ASC";
    $idRequete=  executeRequete($cnx, $sql,array($elementtrie));
    return $idRequete;
}
function consultAnimaux($param){
    $idAnimaux= $param['identifiant'];
    $cnx=getBD();
    $sql="SELECT * FROM animaux,parcelle WHERE animaux.idParcelle=parcelle.idParcelle AND idAnimaux = ?";
    $idRequete=  executeRequete($cnx, $sql,array($idAnimaux));
    return $idRequete;
}
function ajouterAnimaux($param){
    $poids = $param["poids"];
    $taille=$param["taille"];
    $prenomanimal=$param["prenomAnimal"]; 
    $datenaissance=$param["date_naissance"]; 
    $lieunaissance=$param["lieu_naissance"];
    $pere=$param["pere"];
    $mere=$param["mere"];
    $idParcelle=$param["idParcelle"]; 
    $description=$param["description"]; 
    $statut=$param["statut"];
    $idPays=$param["idPays"];
    $idEspece=$param["idEspece"];
    $idSexe=$param["idSexe"];

    // traitemment de l'image
    // on recupere l'image : nom, type, taille,..
    $imgFile = $_FILES["photo"]["name"];
    $tmp_dir = $_FILES["photo"]["tmp_name"];
    $imgSize = $_FILES["photo"]["size"];
    
    // traitement de l'image
    // on definit le repertoire ou sera sotcké l'image
    $upload_dir = 'img/imgFiches/'; 
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
         $Sql = "INSERT INTO animaux(poids,taille,prenomAnimal, date_naissance,lieu_naissance,pere,mere,photo, idParcelle,description,statut,idPays,idEspece,idSexe) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
         $idRequete = executeRequete($cnx,$Sql,array($poids,$taille,$prenomanimal,$datenaissance,$lieunaissance,$pere,$mere,$userpic,$idParcelle,$description,$statut,$idPays,$idEspece,$idSexe));
    }
    return $idRequete;
}
// fonction pour modifier la totalité des information sans l'image
function modifierAnimaux($param){
    $idAnimaux = $param["idAnimaux"];
    $prenomanimal = $param["prenomAnimal"];
    $poids=$param["poids"];
    $taille=$param["taille"]; 
    $statut=$param["statut"]; 
    $datenaissance=$param["date_naissance"];
    $lieunaissance=$param["lieu_naissance"];
    $description=$param["description"];
    
    $cnx=getBD();
    $Sql = "UPDATE animaux SET poids=?,taille=?,prenomAnimal=?, date_naissance=?,lieu_naissance=?,description=?,statut=? WHERE idAnimaux=?";
    $idRequete = executeRequete($cnx,$Sql,array($poids, $taille,$prenomanimal,$datenaissance,$lieunaissance,$description,$statut,$idAnimaux));

    return $idRequete;
}
function modifierImageAnimaux($param){
    $idAnimaux=$param["idAnimaux"];
    // on recupere l'image : nom, type, taille,..
     $imgFile = $_FILES["photo"]["name"];
     $tmp_dir = $_FILES["photo"]["tmp_name"];
     $imgSize = $_FILES["photo"]["size"];
    
    // traitement de l'image
    // on definit le repertoire ou sera sotcké l'image
    $upload_dir = 'img/imgFiches/'; 
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
        $Sql = "UPDATE animaux SET photo=? WHERE idAnimaux=?";
        $idRequete = executeRequete($cnx,$Sql,array($userpic,$idAnimaux));
    }
    return $idRequete;
}
function supprimerAnimaux($param){
    $idEmployes=$param["idEmploye"];
    $cnx=getBD();
    $sql="DELETE FROM animaux WHERE idAnimaux = ?";;
    $idRequete=  executeRequete($cnx, $sql,array($idEmployes));
    return $idRequete;
}
function envoyermails($param){
    $mail = new PHPMailer();
    // On indique que l'on va utlisé le protocole smtp
    $mail->isSMTP();
    // on indique l'adresse du serveur smtp
    $mail->Host = 'smtp.googlemail.com';
    // on indique que l'authentification est necessaire
    $mail->SMTPAuth   = true;
    // on indique le port smtp a utilisé et que l'on utilisé le protocole tls pour la sécurité
    $mail->Port = 587; 
    $mail->SMTPSecure = 'tls';
	
    // On s'authentifie
    $mail->Username = "sora18500@gmail.com";
    $mail->Password = "Stargate18AU";
	
    // On definit l'adrresse mail,le nom de l'expediteur et du destinataie
    // expediteur
    $mail->SetFrom('sora18500@gmail.com', 'admintechs');
    
    // destinataire
    $mail->AddAddress('lablandinerie2@gmail.com', 'Rossignol Anthony');
				
	// On difinit l'objet du mail
	$mail->Subject = 'TEST';
				
	// On definit le contenu du mail
	$mail->msgHTML(file_get_contents('testcorpsmail.html'), dirname(__FILE__));
	
    // Envoi du mail avec gestion des erreurs
	if(!$mail->Send()) {
        echo 'Erreur : ' . $mail->ErrorInfo;
	} else {
        echo 'Message envoyé !';
	}
    return true;
}
