<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/smarty/Smarty.class.php';
require_once('include/libs/phpmailer/PHPMailerAutoload.php'); 
$tpl=new Smarty; 

// definition du tableau qui conteient les données extraite de la base
$nom=$_SESSION['nomEmploye'];
$prenom=$_SESSION['prenomEmploye'];
$expediteur = $prenom." ".$nom;
$corspmail=array();
$i=0;
$i=0;
while($row=$idRequete->fetch()){
    $corspmail[$i]['idAnimaux']=$row['idAnimaux'];
    $corspmail[$i]['prenomAnimal']=$row['prenomAnimal'];
    $corspmail[$i]['photo']=$row['photo'];
    $corspmail[$i]['poids']=$row['poids'];
    $corspmail[$i]['taille']=$row['taille'];
    $corspmail[$i]['statut']=$row['statut'];
    $corspmail[$i]['date_naissance']=$row['date_naissance'];
    $corspmail[$i]['lieu_naissance']=$row['lieu_naissance'];
    $corspmail[$i]['idParcelle']=$row['idParcelle'];
    $corspmail[$i]['description']=$row['description'];
    if($corspmail[$i]['idSexe']=$row['idSexe']==1){
        $corspmail[$i]['idSexe']=$row['idSexe'];
        $tpl->assign("genre","Mâle");
    } else {
        $corspmail[$i]['idSexe']=$row['idSexe'];
        $tpl->assign("genre","Femelle");
    }
    $i++;
}
$tpl->assign('corspmail', $corspmail);
$body = $tpl->fetch('template/mail.tpl');

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

// on indique que ce sera du html 
$mail->IsHTML(true); 
// On s'authentifie
$mail->Username = "sora18500@gmail.com";
$mail->Password = "Stargate18AU";
	
// On definit l'adrresse mail,le nom de l'expediteur et du destinataie
// expediteur
$mail->SetFrom('sora18500@gmail.com', $expediteur);
    
// destinataire
$mail->AddAddress('lablandinerie2@gmail.com', 'Rossignol Anthony');
				
// On difinit l'objet du mail
$mail->Subject = 'Fiche animal';
 				
// On definit le contenu du mail
$mail->Body = $body; 
	
// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
    echo 'Erreur : ' . $mail->ErrorInfo;
} else {
    echo 'Message envoyé !';
    header('refresh:5;url=index.php');
}