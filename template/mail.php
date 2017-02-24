<?php 
// appelle de smarty et creation d'un nouvelle objet smarty
require_once 'include/libs/smarty/Smarty.class.php';
$tpl=new Smarty; 

// definition du tableau qui conteient les données extraite de la base
$listeEmploye=array();
$i=0;
while($row=$idRequete->fetch()){
    $listeEmploye[$i]['idEmploye']=$row['idEmploye'];
    $listeEmploye[$i]['avatar']=$row['avatar'];
    $listeEmploye[$i]['nomEmploye']=$row['nomEmploye'];
    $listeEmploye[$i]['prenomEmploye']=$row['prenomEmploye'];
    $listeEmploye[$i]['fonction']=$row['fonction'];
    $i++;
}
$tpl->assign('listeEmploye', $listeEmploye);
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
	
// On s'authentifie
$mail->Username = "sora18500@gmail.com";
$mail->Password = "MDP";
	
// On definit l'adrresse mail,le nom de l'expediteur et du destinataie
// expediteur
$mail->SetFrom('sora18500@gmail.com', 'admintechs');
    
// destinataire
$mail->AddAddress('lablandinerie2@gmail.com', 'Rossignol Anthony');
				
// On difinit l'objet du mail
$mail->Subject = 'TEST';
$mail->IsHTML(true);  				
// On definit le contenu du mail
$mail->Body = $body; 
	
// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
    echo 'Erreur : ' . $mail->ErrorInfo;
} else {
    echo 'Message envoyé !';
}