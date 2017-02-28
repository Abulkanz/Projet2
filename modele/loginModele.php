<?php

require_once 'modele.php';

function validationauth($param){
    $login_temp=$param["identifiant"];
    $mdp_temp=$param["password"];
    $cnx=getBD();
    $sql="SELECT * FROM employes WHERE login=?";
    $idRequete = executeR($cnx, $sql,array($login_temp));
    if ($idRequete->rowCount() == 1) {
        $row = $idRequete->fetch(PDO::FETCH_NUM);
        $droite="tk!@";
        $gauche="ar30&bb%";
        $motdepasse=hash('Ripemd128',"$gauche.$mdp_temp.$droite");
        if($motdepasse==$row[4]){
            session_start();
            $_SESSION['login']=$login_temp;
            $_SESSION['nomEmploye']=$row[1];
            $_SESSION['prenomEmploye']=$row[2];
            $_SESSION['droits']=$row[8];
            $_SESSION['avatar']=$row[5];
            
            header('location:index.php?gestion=accueil');
        }else{
            echo "Mot de passe inconnu";
        }
     }else {
         echo "Login inconnu";
     }
     echo "vous etes connecté";
    return $idRequete;
} 

