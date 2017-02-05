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
            echo 'Formulaire de modification'.'<br>'.'<br>';
            if(isset($_POST['identifiant'])){
                $idEmployes=$_POST["identifiant"];
                $varSql = "SELECT idEmploye,idConnexion, nom,prenom, fonction, avatar,motDePasse,adresse_mail,idSexe FROM employes WHERE idEmploye= ?";
                $idRequete = executeRequete($cnx,$varSql,array($idEmployes));
                while($ligne=$idRequete->fetch()){   
            ?>
                <table>
				<form method="POST" action="" enctype="multipart/form-data">
                <thead>
                    <tr>
                        <td colspan="3">Fiche de : <?php echo ''.$ligne['nom'].''.''.' '.$ligne['prenom'];?></td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td><input type="submit" id="retour" name="Retour" value="Retour" ></td>
                        <td><input type="submit" id="Valider" name="Valider" value="Valider" ></td>
                        <td><input type="hidden" id="idEmploye" name="idEmploye" value="<?php echo ''.$ligne['idEmploye'].'';?>"></td>
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td rowspan="7"><img src="<?php echo 'img/'.$ligne['avatar'].'';?>" class="avatar"></td>
                            <td>Identifiant de connexion de la personne</td>
                            <td><input id="idconnexion" name="idconnexion" value="<?php echo ''.$ligne['idConnexion'].'';?>"></td>
                        </tr>
						<tr>
                            <td>Nom de la personne</td>
                            <td><input id="nom" name="nom" value="<?php echo ''.$ligne['nom'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Prenom de la personne</td>
                            <td><input id="prenom" name="prenom" value="<?php echo ''.$ligne['prenom'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Fonction de la personne</td>
                            <td><input id="fonction" name="fonction" value="<?php echo ''.$ligne['fonction'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Mot de passe de la personne</td>
                            <td><input id="motdepasse" name="motdepasse" value="<?php echo ''.$ligne['motDePasse'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Adresse mail de la personne</td>
                            <td><input id="mail" name="mail" value="<?php echo ''.$ligne['adresse_mail'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Sexe</td>
							<td><input id="sexe" name="sexe" value="<?php echo ''.$ligne['idSexe'].'';?>"></td>
                        </tr>
                    </tbody>
            </table>
            </form>
            <?php
                }
            }
            if(isset($_POST['Retour'])){
                header('location:index.php?');
            }
            if(isset($_POST['Valider'])){
                $idEmployes=$_POST["idEmploye"];
				$Sql = "DELETE FROM employes WHERE idEmploye=?";
				$idRequete = executeRequete($cnx,$Sql,array($idEmployes));
                header('location:index.php');
            }
            ?>
</html>

