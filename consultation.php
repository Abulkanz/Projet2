<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
        <title>Projet2</title>
	</head>
        <body>
            <?php
            require_once 'include/infoConnexion.php';
            require_once 'include/connexion.php';
            require_once 'include/executeRequete.php';
            $cnx=connexion(UTILISATEUR,MOTDEPASSE,SERVER,BASEDEDONNEES);
            echo 'Formulaire de consultation'.'<br>'.'<br>';
            if(isset($_POST['identifiant'])){
                $id_auteur=$_POST["identifiant"];
                $varSql = "SELECT avatar, nom, prenom, fonction,idConnexion,motDePasse,adresse_mail,idSexe FROM employes WHERE idEmploye= ?";
                $idRequete = executeRequete($cnx,$varSql,array($id_auteur));
                while($ligne=$idRequete->fetch()){
                    echo '<table>';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<td colspan="3">Fiche de :'.' '.$ligne['nom'].' '.$ligne['prenom'].' </td>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tfoot>';
                    echo '<tr>';
                    echo '<td colspan="4"><a href="listerecette.html">Retour à la liste des employé</a></td>';
                    echo '</tr>';
                    echo '</tfoot>';
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td rowspan="7"><img src="img/'.$ligne['avatar'].'" class="avatar"></td>';
                    echo '<td>Identifiant de connexion de la personne</td>';
                    echo '<td>'.$ligne['idConnexion'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Nom de la personne</td>';
                    echo '<td>'.$ligne['nom'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Prenom de la personne</td>';
                    echo '<td>'.$ligne['prenom'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Fonction de la personne</td>';
                    echo '<td>'.$ligne['fonction'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Mot de passe de la personne</td>';
                    echo '<td>'.$ligne['motDePasse'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Adresse mail de la personne</td>';
                    echo '<td>'.$ligne['adresse_mail'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Sexe</td>';
                    echo '<td>'.$ligne['idSexe'].'</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                }
            }
            ?>
        </body>
</html>
